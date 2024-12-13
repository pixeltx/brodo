@extends('layouts.app')

@section('content')
    <!-- Modal Music -->
    <div class="modal fade" id="musicModal" tabindex="-1" aria-labelledby="musicModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="musicModalLabel">Putar Musik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Apakah anda ingin memutar musik untuk pengalaman yang lebih menyenangkan?</p>
                    <button id="playMusicButton" class="btn btn-outline-custom">Ya</button>
                    <button id="closeMusicModal" class="btn btn-outline-custom" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Audio -->
    <audio id="backgroundMusic" loop>
        <source src="{{ asset('audio/bgs.mp3') }}" type="audio/mpeg">
    </audio>

    <nav class="navbar navbar-expand-sm navbar-dark fixed-top"
        style="background-color: transparent; transition: background-color 0.3s;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#invitation">INVITATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#film">FILM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#filosofi">FILOSOFI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">GALLERY</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0">
        <!-- Hero Section -->
        <div class="hero-wrapper"
            style="background-image: url('{{ asset('images/bghutanfull.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: top;">

        {{-- <div class="hero-wrapper" style="background-color: black"> --}}
            <!-- Hero Section -->
            <div id="home" class="hero section text-center text-white d-flex align-items-center"
                style="height: 470px;">
                <div id="hero-text">
                    <h1 class="BRO animated" data-animation="fadeInRight"
                        style="font-style: italic; text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5);">
                        Bro Do Fest 2.0
                    </h1>
                    <h2 class="text-uppercase animated" style="font-weight: bold;" data-animation="fadeInLeft">ANTRA: <br>
                        MAYANIDRA PRAKASHA</h2>
                    <p class="shine ning mt-3 animated" data-animation="fadeInRight">Shinning Beyond Imagination</p>
                </div>
                <div class="elemen1">
                    <img src="{{ asset('images/elemen.png') }}" alt="Elemen" >
                </div>
            </div>


            <!-- Content Section -->
            <section class="section py-5" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('images/foto2.png') }}" class="img-fluid rounded mayan animated" data-animation="fadeInLeft">
                        </div>
                        <div class="col d-flex flex-column justify-content-center">
                            <h3 class="tulisan animated" data-animation="fadeInLeft">
                                <span class="kuning">Bro</span>
                                <span class="putih">Do</span>
                                <span class="kuning">Fest</span>
                                <span class="putih">2.0</span>
                            </h3>
                            <p class="tulisan2 animated" data-animation="fadeInRight">
                                <span class="kuning">Bro</span>
                                <span class="putih">Do</span>
                                <span class="kuning">Fest</span>
                                <span class="putih">2.0</span>
                                <span class="putih">"Antra:</span>
                                <span class="kuning">Mayanidra</span>
                                <span class="putih">Prakasha"</span> dan memiliki tagline
                                <span class="putih">"Shinning</span>
                                <span class="kuning">Beyond</span>
                                <span class="putih">Imagination"</span>
                                yang maknanya adalah kami kembali bersinar sebagai event
                                <span class="kuning">Bro</span>
                                <span class="putih">Do</span>
                                <span class="kuning">Fest</span>
                                <span class="putih">2.0</span>
                                yang melampaui imajinasi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="elemen2">
                    <img src="{{ asset('images/elemen.png') }}" alt="Elemen" >
                </div>
            </section>

            <div id="invitation" class="section">
                <div class="container">
                    <div class="row">
                        {{-- <div class="col-sm-1 p-0">
                            <img src="{{ asset('images/kupu.png') }}" class="kupu floating-effect">
                        </div> --}}
                        <div class="col d-flex flex-column justify-content-center p-0">
                            <h2 class="will animated" data-animation="fadeInLeft">
                                Will be held on
                            </h2>
                            <div class="invilengkap animated" data-animation="fadeInRight">
                                <p class="invi">
                                    <span class="putih">Tanggal : </span>
                                    <span class="kuning">14 Desember 2024</span>
                                </p>
                                <p class="invi">
                                    <span class="putih">Jam : </span>
                                    <span class="kuning">07.00 - 17.10</span>
                                </p>
                                <p class="invi">
                                    <span class="putih">Tempat : </span>
                                    <span class="kuning">Lapang 1 SMKN 1 Katapang</span>
                                </p>
                            </div>

                        </div>
                        {{-- <div class="col-sm-1">
                            <img src="{{ asset('images/kupu2.png') }}"
                                class="kupu2 floating-effect2">
                        </div> --}}
                        <div class="col peta text-center">
                            <!-- Thumbnail Gambar -->
                            <img src="{{ asset('images/peta2.png') }}" class="img-fluid rounded zoomable peta animated" data-animation="fadeInRight"
                                alt="Bro Do Fest 2.0"
                                data-bs-toggle="modal" data-bs-target="#zoomModal">
                        </div>
                    </div>
                </div>
                <div class="elemen3">
                    <img src="{{ asset('images/elemen.png') }}" alt="Elemen" >
                </div>
            </div>

            <div id="film" class="section" style="padding: 35px 0;">
                <div class="container">
                    <div class="header-film">
                        <h2 class="ourmovies"
                            style="padding-bottom:20px; font-style: italic; text-shadow: 0 0 1px rgba(255, 255, 255, 0.3), 0 0 1px rgba(255, 255, 255, 0.3), 0 0 50px rgba(255, 255, 255, 0.6), 0 0 100px rgba(255, 255, 255, 0.6);">
                            <i class="fa fa-film" aria-hidden="true"></i> MiniCinema
                        </h2>
                    </div>
                    <div class="container-fluid" style="padding: 25px 0;">
                        <div class="position-relative">
                            <button class="btn btn-dark position-absolute top-50 start-0 translate-middle-y"
                                id="scrollLeft" style="z-index: 10;">❮</button>
                            <div class="film-container d-flex overflow-x-scroll">
                                @foreach ($movies as $movie)
                                    <div class="card custom-card border-0 mx-2">
                                        <img src="{{ asset('storage/' . $movie->image) }}" class="img-fluid mb-3">
                                        <div class="konten-film" style="padding: 20px; padding-top:10px;">
                                            <h4 class="judul-film fw-bold mb-3 kuning">{{ $movie->title }}</h4>
                                            <p style="margin-bottom: 5px"><span style="color: #ffff">Produser :
                                                </span><span class="produser"
                                                    style="color: #F6DDA4;">{{ $movie->producer }}</span></p>
                                            <p style="margin-bottom: 5px"><span style="color: #ffff">Sutradara :
                                                </span><span class="sutradara"
                                                    style="color: #F6DDA4;">{{ $movie->director }}</span></p>
                                            <p><span style="color: #ffff">Penulis naskah : </span><span class="penas"
                                                    style="color: #F6DDA4;">{{ $movie->writer }}</span></p>
                                            <button type="button" class="btn btn-outline-custom" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop" data-title="{{ $movie->title }}"
                                                data-producer="{{ $movie->producer }}"
                                                data-director="{{ $movie->director }}"
                                                data-writer="{{ $movie->writer }}" data-actors="{{ $movie->actors }}"
                                                data-synopsis="{{ $movie->synopsis }}"
                                                data-image="{{ asset('storage/' . $movie->image) }}">
                                                Selengkapnya <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y"
                                id="scrollRight" style="z-index: 10;">❯</button>
                        </div>
                    </div>
                </div>
                <div class="elemen4">
                    <img src="{{ asset('images/elemen.png') }}" alt="Elemen" >
                </div>
            </div>
            
            <div id="filosofi" class="section ">
                <div class="row row-cols-2">
                  <div class="col-md-3" style="height: 15rem">
                    <div >
                        <img src="{{ asset('images/maskot2.png') }}"
                            class="maskot floating-effect3">
                    </div>
                  </div>
                  <div class="col-md-9"  >
                    <div class="" >
                        <p class="tulisan3 animated" data-animation="fadeInRight">
                            Karakter
                            <span class="kuning">"Dewi Penjaga Keseimbangan"</span>
                            dengan aksen warna hijau yang memberi ketenangan.
                            <span class="kuning">Mutiara Merah</span>
                            yang melambangkan kemurnian cinta yang
                            <span class="kuning">memberi kehangatan</span>
                            pada pulau
                            <span class="kuning">Antra.</span>
                        </p>
                    </div>
                  </div>
                  <div class="col-md-9" style="height: 15rem">
                    <div class=" t4">
                        <p class="tulisan4 animated" data-animation="fadeInLeft">
                            <span class="kuning">Mambruk Victoria</span>
                            burung langka dari papua yang melambangkan event ini
                            <span class="kuning">spesial.</span><br><br>

                            <span class="kuning">10 helai</span>
                            bulu nya melambangkan urutan
                            <span class="kuning">sempurna</span>
                            dan kami merupakan
                            <span class="kuning">angkatan 10.</span>

                            <span class="kuning">3 garis sejajar</span>
                            melambangkan
                            <span class="kuning">ketidak terhinggaan</span>
                            yang maksudnya event ini akan
                            <span class="kuning">berlangsung tidak terhingga.</span>
                        </p>
                    </div>
                  </div>
                  <div class="col-md-3 brg">
                    <div class="">
                        <img src="{{ asset('images/burung.png') }}" class="burung floating-effect2">
                    </div>
                  </div>
                </div>
                <div class="elemen5">
                    <img src="{{ asset('images/elemen.png') }}" alt="Elemen" >
                </div>
            </div>
            
              

            {{-- <div id="filosofi" class="section " style="padding: 10px 0; display: flex; flex-direction: column;">
                <div class="container text-center">
                    <div class="row" style="height:50rem;">
                        <div class="col-3" style="padding-right: 0px; padding-left:0px;">
                            <div class="col-sm-1">
                                <img src="{{ asset('images/kupu3.png') }}" class="floating-effect">
                            </div>
                            <div class="col-sm-1">
                                <img src="{{ asset('images/maskot2.png') }}"
                                    class="maskot floating-effect3">
                            </div>
                            <div class="col-sm-1">
                                <img src="{{ asset('images/kupu4.png') }}" class="floating-effect">
                            </div>
                        </div>
                        <div class="col-6 p-0">
                            <div class="col-sm-1">
                                <img src="{{ asset('images/kupu5.png') }}" style="padding-top:40px; padding-left:0%;"
                                    class="floating-effect2">
                            </div>
                            <div class="col-sm-12" style="padding-left: 10px">
                                <p class="tulisan3 animated" data-animation="fadeInRight">
                                    Karakter
                                    <span class="kuning">"Dewi Penjaga Keseimbangan"</span>
                                    dengan aksen warna hijau yang memberi ketenangan.
                                    <span class="kuning">Mutiara Merah</span>
                                    yang melambangkan kemurnian cinta yang
                                    <span class="kuning">memberi kehangatan</span>
                                    pada pulau
                                    <span class="kuning">Antra.</span>
                                </p>
                            </div>
                            <div class="col-sm-12 t4">
                                <p class="tulisan4 animated" data-animation="fadeInLeft">
                                    <span class="kuning">Mambruk Victoria</span>
                                    burung langka dari papua yang melambangkan event ini
                                    <span class="kuning">spesial.</span><br><br>

                                    <span class="kuning">10 helai</span>
                                    bulu nya melambangkan urutan
                                    <span class="kuning">sempurna</span>
                                    dan kami merupakan
                                    <span class="kuning">angkatan 10.</span>

                                    <span class="kuning">3 garis sejajar</span>
                                    melambangkan
                                    <span class="kuning">ketidak terhinggaan</span>
                                    yang maksudnya event ini akan
                                    <span class="kuning">berlangsung tidak terhingga.</span>
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <img src="{{ asset('images/elemen.png') }}" alt="Elemen" class="el1">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="col-sm-1">
                                <img src="{{ asset('images/kupu6.png') }}" style="padding-top:60px; padding-left:0%;"
                                    class="floating-effect">
                            </div>
                            <div class="col-sm-1">
                                <img src="{{ asset('images/burung.png') }}" class="burung floating-effect2">
                            </div>
                            <div class="col-sm-1">
                                <img src="{{ asset('images/kupu7.png') }}" style="padding-top:40px; padding-left:0%;"
                                    class="floating-effect3">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div id="gallery" class="section">
                <div class="container">
                    <h2 class="ourmovies"
                        style="padding-bottom:40px; font-size:30px; font-style: italic; text-shadow: 0 0 1px rgba(255, 255, 255, 0.3), 0 0 1px rgba(255, 255, 255, 0.3), 0 0 50px rgba(255, 255, 255, 0.6), 0 0 100px rgba(255, 255, 255, 0.6);">
                        <i class="fa fa-camera-retro" aria-hidden="true"></i> Gallery Antra
                    </h2>
                    <div class="container-fluid">
                        <div class="position-relative">
                            <button class="btn btn-dark position-absolute top-50 start-0 translate-middle-y"
                                id="scrollLeft" style="z-index: 10;">❮</button>
                            <div class="film-container d-flex overflow-x-scroll">
                                <!-- Card Film -->
                                @foreach ($galleries as $gallery)
                                    <div class="card custom-card border-0 mx-2">
                                        <img src="{{ asset('storage/' . $gallery->image) }}"
                                            class="img-fluid mb-3 custom-image" onclick="openLightbox(this)">
                                    </div>
                                @endforeach

                            </div>
                            <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y"
                                id="scrollRight" style="z-index: 10;">❯</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-white py-3">
        <div class="container d-flex justify-content-center align-items-center flex-wrap">
            <!-- Nama Event -->
            <p class="mb-0 mx-3">&copy; 2024 Bro Do Fest 2.0</p>

            <!-- Instagram -->
            <a href="https://instagram.com/brodofest" target="_blank" class="mx-3 text-white text-decoration-none">
                <i class="fab fa-instagram"></i> brodofest
            </a>

            <!-- TikTok -->
            <a href="https://tiktok.com/@brodofest" target="_blank" class="mx-3 text-white text-decoration-none">
                <i class="fab fa-tiktok"></i> brodofest
            </a>

            <!-- Developer -->
            <div class="d-flex align-items-center mx-3">
                <p class="mb-0">Developed by:</p>
                <a href="https://instagram.com/aether.weave" target="_blank"
                    class="text-white text-decoration-none mx-2">
                    <img src="{{ asset('images/aev.png') }}" alt="Aether Weave Logo"
                        style="width: 30px; height: 30px; border-radius: 50%;">
                    Aether Weave
                </a>
            </div>
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <img id="lightboxImg" class="lightbox-content">
        <span class="close-btn" onclick="closeLightbox()">×</span>
    </div>

    <!-- Modal -->

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Movie Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" id="modal-image" class="img-fluid mb-3"
                    style="width:50%; display: block; margin: auto;">
                <div class="modal-isi">
                    <p><span style="color: #ffff">Produser: </span><span style="color: #F6DDA4;" id="modal-producer"></span></p>
                    <p><span style="color: #ffff">Sutradara: </span><span style="color: #F6DDA4;" id="modal-director"></span></p>
                    <p><span style="color: #ffff">Penulis naskah: </span><span style="color: #F6DDA4;" id="modal-writer"></span></p>
                    <p><span style="color: #ffff">Pemeran: </span><span style="color: #F6DDA4;" id="modal-actors"></span></p>
                    <p><span style="color: #ffff">Sinopsis: </span><br>
                        <span style="color: #F6DDA4;" id="modal-synopsis"></span>
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


    {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Movie Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" id="modal-image" class="img-fluid mb-3"
                        style="width:50%; display: inline-block; margin-left: auto; margin-right: auto;">
                    <div class="modal-isi">
                        <p style="margin:2px;"><span style="color: #ffff">Produser : </span><span class="produser"
                                style="color: #F6DDA4;" id="modal-producer"></span></p>
                        <p style="margin:2px;"><span style="color: #ffff">Sutradara : </span><span class="sutradara"
                                style="color: #F6DDA4;" id="modal-director"></span></p>
                        <p style="margin:2px;"><span style="color: #ffff">Penulis naskah : </span><span class="penas"
                                style="color: #F6DDA4;" id="modal-writer"></span></p>
                        <p style="margin:2px;"><span style="color: #ffff">Pemeran : </span><span class="cast"
                                style="color: #F6DDA4;" id="modal-actors"></span></p><br>
                        <p style="margin:2px;"><span style="color: #ffff">Sinopsis : </span><br>
                            <span class="cast" style="color: #F6DDA4;" id="modal-synopsis"></span>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-custom " data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Modal untuk Zoom Gambar -->
    <div class="modal fade" id="zoomModal" tabindex="-1" aria-labelledby="zoomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="{{ asset('images/peta2.png') }}" class="img-fluid rounded" alt="Bro Do Fest 2.0"
                        style="border-radius: 15px;">
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    const container = document.querySelector('.film-container');
    const scrollLeft = document.getElementById('scrollLeft');
    const scrollRight = document.getElementById('scrollRight');

    // Ukuran setiap kartu
    const cardWidth = 300; // Sesuaikan dengan lebar card yang ditetapkan
    const scrollAmount = cardWidth * 1; // Geser satu kartu per klik

    scrollLeft.addEventListener('click', () => {
        container.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });

    scrollRight.addEventListener('click', () => {
        container.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    function openLightbox(img) {
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');

        lightbox.style.display = 'flex'; // Tampilkan lightbox
        lightboxImg.src = img.src; // Set gambar lightbox ke gambar yang ditekan
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.style.display = 'none'; // Sembunyikan lightbox
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Inisialisasi modal saat halaman dimuat
        const musicModal = new bootstrap.Modal(document.getElementById('musicModal'));
        const audio = document.getElementById('backgroundMusic');
        const playButton = document.getElementById('playMusicButton');

        // Tampilkan modal saat halaman dibuka
        musicModal.show();

        // Tambahkan event listener ke tombol play music
        playButton.addEventListener('click', function() {
            audio.play();
            musicModal.hide();
        });

        // Pastikan musik berhenti saat pengguna menutup modal tanpa memilih play
        document.getElementById('closeMusicModal').addEventListener('click', function() {
            if (!audio.paused) {
                audio.pause();
            }
        });
    });
    document.querySelectorAll('a.nav-link').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop -
                    70, // Sesuaikan offset agar header tidak menutupi konten
                    behavior: 'smooth'
                });
            }
        });
    });

    // Tambahkan event listener untuk mendeteksi scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) { // Jika menggulir lebih dari 50px
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    document.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('.section');
        const navLinks = document.querySelectorAll('.nav-link');

        let currentSectionId = '';

        // Cari section yang sedang berada di viewport
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 80; // Sesuaikan dengan tinggi navbar
            const sectionHeight = section.offsetHeight;

            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });

        // Perbarui kelas aktif pada navbar link
        navLinks.forEach(link => {
            if (link.getAttribute('href').substring(1) === currentSectionId) {
                link.classList.add('active-section');
            } else {
                link.classList.remove('active-section');
            }
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        var staticBackdrop = document.getElementById('staticBackdrop');
        staticBackdrop.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var title = button.getAttribute('data-title');
            var producer = button.getAttribute('data-producer');
            var director = button.getAttribute('data-director');
            var writer = button.getAttribute('data-writer');
            var actors = button.getAttribute('data-actors');
            var synopsis = button.getAttribute('data-synopsis');
            var image = button.getAttribute('data-image');

            var modalTitle = staticBackdrop.querySelector('.modal-title');
            var modalProducer = staticBackdrop.querySelector('#modal-producer');
            var modalDirector = staticBackdrop.querySelector('#modal-director');
            var modalWriter = staticBackdrop.querySelector('#modal-writer');
            var modalActors = staticBackdrop.querySelector('#modal-actors');
            var modalSynopsis = staticBackdrop.querySelector('#modal-synopsis');
            var modalImage = staticBackdrop.querySelector('#modal-image');

            modalTitle.textContent = title;
            modalProducer.textContent = producer;
            modalDirector.textContent = director;
            modalWriter.textContent = writer;
            modalActors.textContent = actors;
            modalSynopsis.textContent = synopsis;
            modalImage.src = image;
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const fadeInElements = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Tambahkan class "show" saat elemen terlihat
                entry.target.classList.add('show');
            } else {
                // Hapus class "show" saat elemen keluar dari viewport
                entry.target.classList.remove('show');
            }
        });
    }, {
        threshold: 0.1 // Elemen terlihat minimal 10% sebelum memicu animasi
    });

    fadeInElements.forEach(element => observer.observe(element));
});

// animasi konten
document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const target = entry.target;
                const animation = target.getAttribute('data-animation');

                if (entry.isIntersecting) {
                    // Menambahkan animasi ketika elemen terlihat
                    target.style.opacity = 1; // Pastikan elemen terlihat
                    target.style.visibility = 'visible';
                    target.classList.add(animation);
                } else {
                    // Reset animasi ketika elemen keluar viewport
                    target.style.opacity = 0;
                    target.style.visibility = 'hidden';
                    target.classList.remove(animation);
                }
            });
        });

        // Observasi semua elemen yang membutuhkan animasi
        const animatedElements = document.querySelectorAll('.animated');
        animatedElements.forEach(element => {
            observer.observe(element);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Ambil semua nav-link
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Tambahkan event listener untuk setiap nav-link
    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Tutup navbar setelah link diklik
            var navbarCollapse = document.getElementById('navbarNav');
            var bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                toggle: false // Jangan toggle, hanya tutup
            });
            bsCollapse.hide(); // Menyembunyikan navbar
        });
    });
});
</script>