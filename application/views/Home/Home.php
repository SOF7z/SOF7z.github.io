<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Simple Digital Clock</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.cs') ?>">
</head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    * {
        box-sizing: border-box;
    }

    .menu {
        float: left;
        width: 20%;
        text-align: center;
    }

    .menu a {
        background-color: #e5e5e5;
        padding: 8px;
        margin-top: 7px;
        display: block;
        width: 100%;
        color: black;
    }

    .main {
        float: left;
        width: 60%;
        padding: 0 20px;
    }

    .right {
        background-color: #e5e5e5;
        float: left;
        width: 20%;
        padding: 15px;
        margin-top: 7px;
        text-align: center;
    }

    @media only screen and (max-width: 620px) {

        /* For mobile phones: */
        .menu,
        .main,
        .right {
            width: 100%;
        }
    }
</style> -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Home page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="<?= base_url('home') ?>">Home</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-lg-12">
        <div class="row">

            <div class="col-lg-3">
                <!-- Card with an image on top -->
                <div class="card">
                    <video width="368" height="278" controls>
                        <source src="<?= base_url('assets/temp/img/portfolio/2023-11-29-195451783.mp4') ?>" type="video/mp4">
                        <source src="<?= base_url('assets/temp/img/portfolio/2023-11-29-195451783.mp4') ?>" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">3D INTRO LOGO SOF7z</h5>
                        <p class="card-text">Logo yang di beri efect partikel hijau nan elegant dan mamajakan mata</p>
                        <p>Harga <a href="#">200K</a></p>
                    </div>
                </div><!-- End Card with an image on top -->
            </div>

            <div class="col-lg-3">
                <!-- Card with an image on top -->
                <div class="card">
                    <video width="368" height="278" controls>
                        <source src="<?= base_url('assets/temp/img/portfolio/Rumah adat Toraja!.mp4') ?>" type="video/mp4">
                        <source src="<?= base_url('assets/temp/img/portfolio/Rumah adat Toraja!.mp4') ?>" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">3D End</h5>
                        <p class="card-text">Sentuhan akhir 3D modeling rumah adat Toraja, memakai software BLENDER dengan total Rendering Total 37 Jam</p>
                        <p>Harga <a href="#">400K</a></p>
                    </div>
                </div><!-- End Card with an image on top -->
            </div>

            <div class="col-lg-3">
                <!-- Card with an image on top -->
                <div class="card">
                    <video width="368" height="278" controls>
                        <source src="<?= base_url('assets/temp/img/portfolio/Rumah adat Toraja Sulawesi Selatan!.mp4') ?>" type="video/mp4">
                        <source src="<?= base_url('assets/temp/img/portfolio/Rumah adat Toraja Sulawesi Selatan!.mp4') ?>" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">3D Awal Rumah Adat Toraja</h5>
                        <p class="card-text">Sentuhan awal 3D rumah adat Toraja BLENDER dengan total Rendering 4 jam</p>
                        <p>Harga <a href="#">150K</a></p>
                    </div>
                </div><!-- End Card with an image on top -->
            </div>

            <div class="col-lg-3">
                <!-- Card with an image on top -->
                <div class="card">
                    <video width="368" height="278" controls>
                        <source src="<?= base_url('assets/temp/img/portfolio/3D LOGO AE.mp4') ?>" type="video/mp4">
                        <source src="<?= base_url('assets/temp/img/portfolio/3D LOGO AE.mp4') ?>" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">3D LOGO</h5>
                        <p class="card-text">Logo cinematic membuat gerakan camera lebih halus dan efect partikel yang di pancarkan terlihat bagus</p>
                        <p>Harga <a href="#">300K</a></p>
                    </div>
                </div><!-- End Card with an image on top -->
            </div>

        </div>
    </div>


    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- News & Updates Traffic -->
                    <div class="card">

                        <!-- <div class="filter">
    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
            <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
    </ul>
</div> -->

                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="<?php echo base_url('assets/temp/img/portfolio/IMG20231202011436.jpg') ?>" alt="">
                                    <h4><a href="#">3D Rumah Adat</a></h4>
                                    <p>3D Rumah adat toraja yang memakai aplikasi blender</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="<?php echo base_url('assets/assets_admin/assets/img/656709b2ea594.png') ?>" alt="">
                                    <h4><a href="#">Pemilihan Capres & Cawapres 2024</a></h4>
                                    <p>Prasiden Indonesia yang mempunyai ambisi ingin merubah Negara Republik Indonesia</p>
                                </div>

                                <!-- <div class="post-item clearfix">
            <img src="<?php echo base_url('assets/assets_admin/assets/img/news-3.jpg') ?>" alt="">
            <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
            <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
        </div>

        <div class="post-item clearfix">
            <img src="<?php echo base_url('assets/assets_admin/assets/img/news-4.jpg') ?>" alt="">
            <h4><a href="#">Laborum corporis quo dara net para</a></h4>
            <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
        </div>

        <div class="post-item clearfix">
            <img src="<?php echo base_url('assets/assets_admin/assets/img/news-5.jpg') ?>" alt="">
            <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
            <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
        </div> -->

                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <!-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> -->

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Terjual</th>
                                            <th scope="col">Pendapatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-1.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                            <td>$64</td>
                                            <td class="fw-bold">124</td>
                                            <td>$5,828</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-2.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                            <td>$46</td>
                                            <td class="fw-bold">98</td>
                                            <td>$4,508</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-3.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                            <td>$59</td>
                                            <td class="fw-bold">74</td>
                                            <td>$4,366</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-4.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                            <td>$32</td>
                                            <td class="fw-bold">63</td>
                                            <td>$2,016</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-5.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                            <td>$79</td>
                                            <td class="fw-bold">41</td>
                                            <td>$3,239</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <!-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> -->

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-1.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                            <td>$64</td>
                                            <td class="fw-bold">124</td>
                                            <td>$5,828</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-2.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                            <td>$46</td>
                                            <td class="fw-bold">98</td>
                                            <td>$4,508</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-3.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                            <td>$59</td>
                                            <td class="fw-bold">74</td>
                                            <td>$4,366</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-4.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                            <td>$32</td>
                                            <td class="fw-bold">63</td>
                                            <td>$2,016</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url('assets/assets_admin/assets/img/product-5.jpg') ?>" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                            <td>$79</td>
                                            <td class="fw-bold">41</td>
                                            <td>$3,239</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->



                </div>
            </div><!-- End Left side columns -->



            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">
                    <!-- <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div> -->

                    <div class="card-body">
                        <h5 class="card-title">Aktivitas Terbaru <span>| Hari ini</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">27/12/2023</div>
                                <i class='bi bi-circle-fill activity-badge text-Primary align-self-start'>16:00 </i>
                                <div class="activity-content">
                                    Memperbaharui tampilan <a href="#" class="fw-bold text-dark">Home</a>
                                </div>
                            </div>

                            <div class="activity-item d-flex">
                                <div class="activite-label">27/12/2023</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'>15:35 </i>
                                <div class="activity-content">
                                    Memperbaharui tampilan <a href="#" class="fw-bold text-dark">Header</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class="card">
                    <!-- <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div> -->

                    <div class="card-body pb-0">
                        <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                        <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                    legend: {
                                        data: ['Allocated Budget', 'Actual Spending']
                                    },
                                    radar: {
                                        // shape: 'circle',
                                        indicator: [{
                                                name: 'Sales',
                                                max: 6500
                                            },
                                            {
                                                name: 'Administration',
                                                max: 16000
                                            },
                                            {
                                                name: 'Information Technology',
                                                max: 30000
                                            },
                                            {
                                                name: 'Customer Support',
                                                max: 38000
                                            },
                                            {
                                                name: 'Development',
                                                max: 52000
                                            },
                                            {
                                                name: 'Marketing',
                                                max: 25000
                                            }
                                        ]
                                    },
                                    series: [{
                                        name: 'Budget vs spending',
                                        type: 'radar',
                                        data: [{
                                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                name: 'Allocated Budget'
                                            },
                                            {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class="card">
                    <!-- <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div> -->

                    <div class="card-body pb-0">
                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                                value: 1048,
                                                name: 'Top Seller'
                                            },
                                            {
                                                value: 735,
                                                name: 'Direct'
                                            },
                                            {
                                                value: 580,
                                                name: 'Email'
                                            },
                                            {
                                                value: 484,
                                                name: 'Union Ads'
                                            },
                                            {
                                                value: 300,
                                                name: 'Picture Ads'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->



            </div><!-- End Right side columns -->

        </div>
    </section>


</main><!-- End #main -->
<script src="<?php echo base_url('assets/css/script.js') ?>"></script>
</body>

</html>