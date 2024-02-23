<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'SOF7z Login!';
            $this->load->view('templates_auth/auth_header', $data);
            $this->load->view('login');
            $this->load->view('templates_auth/auth_footer');
        } else {
            $this->_login();
        }
    }

    // public function _login()
    // {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');

    //     $user = $this->db->get_where('user', ['email' => $email])->row_array();

    //     var_dump($user);
    //     die;
    // }

    public function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] <= "0") {
                        redirect('devoloper');
                    } elseif ($user['role_id'] == "1") {
                        redirect('admin');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                    Password salah
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning bg-warning text-light-black border-0 alert-dismissible fade show" role="alert">
                Email Ini Belum Diaktifasi
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
            Email belum pernah terdaftar!
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Masukkan nama anda!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'email' => 'Email harus disi!',
            'is_unique' => 'Email sudah pernah buat!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Pastikan password kamu sama!',
            'min_length' => 'Password kamu terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'pastikan password kamu sama!'
        ]);

        if ($this->form_validation->run() == false) {

            $data['title'] = 'SOF7z Register!';
            $this->load->view('templates_auth/auth_header', $data);
            $this->load->view('register');
            $this->load->view('templates_auth/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            //buat token email
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            //inputan email & token ke database 
            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);
            //
            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('pesan', '<div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
            Silahkan aktifasi akun email kamu!
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        }
    }

    public function _sendEmail($token, $type)
    {

        $this->load->library('email');
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'sof7z.online@gmail.com';
        $config['smtp_pass'] = 'rqydgmeusabixipz';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        $this->load->library('email', $config);

        $this->email->from('sof7z.online@gmail.com', 'SOF7z');
        $this->email->to($this->input->post('email'));


        if ($type == 'verify') {
            $this->email->subject(('Account Verify'));
            $this->email->message('klik tombol link untuk verifikasi : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token)  . '">Activate</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {

                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">'
                        . $email . ' Silahkan Login!
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                    redirect('auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Account activation failed! token expired.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Account activation failed! wrong token.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger bg-denger text-light border-0 alert-dismissible fade show" role="alert">
            Account activation failed! wrong email.
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
        Kamu teleh logout
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['title'] = 'Access Blocked';
        $this->load->view('templates_auth/auth_header', $data);
        $this->load->view('blocked');
        $this->load->view('templates_auth/auth_footer');
    }
}
