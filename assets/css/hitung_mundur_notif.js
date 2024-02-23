//Mulaii Hitung Mundur

const tanggalTujuan = new Date('Mar 18 , 2024 00:00:00').getTime();

const hitungmundur = setInterval(function () {

    const sekarang = new Date().getTime();
    const selisih = tanggalTujuan - sekarang;

    const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));

    const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));

    const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));

    const detik = Math.floor(selisih % (1000 * 60) / 1000);


    const teks = document.getElementById('teks');

    teks.innerHTML = hari + ' Hari ' + jam + ' Jam ' + menit + ' Menit ' + detik + ' Detik ' ;

    if (selisih < 0) {
        clearInterval(hitungmundur);
        teks.innerHTML = ('Masuk Kampus');
    }

}, 1000);

//End Hitung Mundur ( Coutdown )