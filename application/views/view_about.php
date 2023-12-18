<?php $this->load->view('public/partials/view_public_header.php'); ?>

<style>
    body {
        background-color: #F8EDE3;
    }
    .banner {
        background: url('<?= base_url('assets/images/newbanner.jpg'); ?>') center center no-repeat;
        background-size: cover;
        height: 560px;
    }
    .about-container {
        background-color: #D0B8A8;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
	.contact-container {
        background-color: #D0B8A8;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
	.peta-container {
        background-color: #D0B8A8;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		height: 600px;
    }
	.footer {
        margin-top: 20px;
    }
</style>

<div class="banner">
    <div class="container">
        <script src="<?= base_url('assets/js/responsiveslides.min.js'); ?>"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider">
                <li>
                    <div class="banner-text">
                        <h3>Temukan Sepedamu Hari Ini!</h3>
                        <p>Di PRIMABIKE, kami dengan bangga menawarkan berbagai pilihan sepeda berkualitas tinggi untuk memenuhi kebutuhan pengendara sepeda dari segala tingkatan. Jelajahi koleksi kami dan temukan sepeda yang sesuai dengan gaya dan kebutuhan Anda. Dengan Jaminan Pembelian Kembali, Anda dapat berbelanja dengan percaya diri!</p>
                    </div>
                </li>
                <li>
                    <div class="banner-text">
                        <h3>Tidak Perlu Tawar-menawar!</h3>
                        <p>PRIMABIKE mengusung prinsip harga yang jelas dan transparan. Kami tidak memerlukan proses tawar-menawar karena kami telah menyajikan harga yang kompetitif untuk setiap sepeda yang kami jual. Kami percaya setiap pelanggan berhak mendapatkan harga yang adil tanpa perlu bernegosiasi. Di PRIMABIKE, setiap harga rendah adalah milik Anda untuk diambil.</p>
                    </div>
                </li>
                <li>
                    <div class="banner-text">
                        <h3>Pelayanan Instimewa Membawakan Sepeda Untuk Anda!</h3>
                        <p>PRIMABIKE tidak hanya menjual sepeda berkualitas tinggi, tetapi juga memberikan pengalaman berbelanja yang istimewa. Nikmati kenyamanan berbelanja sepda baru atau bekas dari kenyamanan rumah Anda. Tim kami yang ramah dan berpengetahuan akan membantu Anda menemukan sepeda yang sesuai dengan kebutuhan dan preferensi Anda.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container about-container">
    <h2 class="text-center">Tentang Kami</h2>
    <p>
        Selamat datang di PRIMABIKE, tempat terbaik untuk menemukan sepeda berkualitas tinggi dan layanan pelanggan yang luar biasa.
        Kami memiliki misi untuk menyediakan pilihan sepeda terbaik dengan harga yang kompetitif, tanpa perlu melakukan tawar-menawar.
        Dengan pengalaman bertahun-tahun di industri sepeda, kami bangga menjadi destinasi utama untuk para pecinta sepeda.
    </p>
    <p>
        Di PRIMABIKE, kami tidak hanya menjual sepeda, tetapi kami juga berkomitmen untuk memberikan pengalaman berbelanja yang istimewa.
        Tim kami yang berpengetahuan luas akan membantu Anda menemukan sepeda yang sesuai dengan kebutuhan dan gaya hidup Anda.
        Dengan Jaminan Pembelian Kembali, kami memberikan kepercayaan kepada pelanggan untuk berbelanja dengan nyaman.
    </p>
    <p>
        Terima kasih telah memilih PRIMABIKE sebagai mitra sepeda Anda. Kami berkomitmen untuk terus memberikan produk berkualitas tinggi
        dan layanan yang memuaskan. Selamat berbelanja di PRIMABIKE!
    </p>
</div>

<div class="container contact-container">
    <h2 class="text-center">Kontak Kami</h2>
    <p>
        Untuk pertanyaan lebih lanjut atau bantuan, jangan ragu untuk menghubungi tim kami. Kami siap membantu Anda dengan senang hati!
    </p>
	<p>
        WA/Call : +62 858-5260-1479 a.n. Jawahirul Wildan
    </p>
	<p>
        WA/Call : +62 812-53369-4369 a.n. Urdhanaka
    </p>
	<p>
        WA/Call : +62 811-3303-924 a.n. Achmad Khosyi'
    </p>
	<p>
        Sosial Media Kami :
    </p>
	<p><a href="https://www.instagram.com/jawahirulwildan?igshid=OGQ5ZDc2ODk2ZA=="><i class="facebok"> </i></a></p>
	<p><a href="https://www.instagram.com/jawahirulwildan?igshid=OGQ5ZDc2ODk2ZA=="><i class="goog"> </i></a></p>
</div>

<div class="container peta-container">
	<h2 class="text-center">Lokasi Kami</h2>
	<iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d394.3143663632098!2d112.78708457613627!3d-7.282796924999578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbbf2670a60d%3A0x254fbfa8b1fcb08f!2sKos%20Gebang%20Muslim!5e0!3m2!1sen!2sid!4v1702871303423!5m2!1sen!2sid" 
        style="border:0; width: 100%; height: 95%; margin: 0;"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<?php $this->load->view('public/partials/view_public_footer.php'); ?>
