@extends('layouts.app')

@section('content')
<!-- Modal Music -->
<div class="modal fade" id="musicModal" tabindex="-1" aria-labelledby="musicModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="musicModalLabel">Play Music</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Do you want to play background music while browsing?</p>
                <button id="playMusicButton" class="btn btn-outline-custom">Yes, Play Music</button>
                <button id="closeMusicModal" class="btn btn-outline-custom" data-bs-dismiss="modal">No, Thanks</button>
            </div>
        </div>
    </div>
</div>

<!-- Audio -->
<audio id="backgroundMusic" loop>
    <source src="{{ asset('audio/bgs.mp3') }}" type="audio/mpeg">
</audio>

<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: transparent; transition: background-color 0.3s;">
    <div class="container"> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="#film">MOVIE</a>
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

    <!-- Hero Section -->
    <div id="home" class="hero section text-center text-white d-flex align-items-center" style="height: 470px;">
        <div style="padding-top: 180px; padding-left:13px;">
            <h1 class="BRO" style="font-style: italic; text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5);">
                Bro Do Fest 2.0
            </h1>
            <h2 class="text-uppercase" style="font-weight: bold;">ANTRA: <br> MAYANIDRA PRAKASHA</h2>
            <p class="shine mt-3">Shinning Beyond Imagination</p>
        </div>
        <div style="position: absolute; top: 62%; left: 50%; transform: translate(-50%, -50%); z-index: 0; padding-top: 350px;">
            <img src="{{ asset('images/elemen.png') }}" alt="Elemen">
        </div>
    </div>


    <!-- Content Section -->
    <section class="section py-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('images/foto2.png') }}" class="img-fluid rounded" alt="Bro Do Fest 2.0" style="padding-left: 45px; padding-top: 25px; width:80%;">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                    <h3 style="font-weight: 700; font-style: italic; padding-top:40px;">
                        <span class="kuning">Bro</span>
                        <span class="putih">Do</span>
                        <span class="kuning">Fest</span>
                        <span class="putih">2.0</span>
                    </h3>
                    <p style="text-align: justify; color:beige; padding-top:23px; font-size:20px;">
                        <span class="kuning">Bro</span>
                        <span class="putih">Do</span>
                        <span class="kuning">Fest</span>
                        <span class="putih">2.0</span> 
                        <span class="putih">"Antra:</span> 
                        <span class="kuning">Mayanidra</span>
                        <span class="putih">Prakasha"</span>  dan memiliki tagline 
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
        <div style="position: absolute; left: 50%; transform: translate(-50%, -50%); z-index: 0; padding-top: 170px;">
            <img src="{{ asset('images/elemen.png') }}" alt="Elemen">
        </div>
    </section>
    
    <div id="invitation" class="section" style="padding: 85px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 p-0">
                    <img src="{{ asset('images/kupu.png') }}" class="floating-effect" >
                </div>
                <div class="col d-flex flex-column justify-content-center p-0">
                    <h2 style="font-weight: 700; font-style: italic; padding-left:50px; padding-top:18px; color:#ffff; text-shadow: 0 0 1px rgba(255, 255, 255, 1), 0 0 1px rgba(255, 255, 255, 0.5), 0 0 50px rgba(255, 255, 255, 0.8), 0 0 100px rgba(255, 255, 255, 1);">
                        Will be held on
                    </h2>
                    <p style="text-align: justify; padding-top:30px; font-size:23px;">
                        <span class="putih">Date : </span>
                        <span class="kuning">14 December 2024</span>
                    </p>
                    <p style="text-align: justify; font-size:23px;">
                        <span class="putih">Time : </span>
                        <span class="kuning">07.00 - 17.10</span>
                    </p>
                    <p style="text-align: justify; font-size:23px;">
                        <span class="putih">Place : </span>
                        <span class="kuning">Lapang 2 SMKN 1 Katapang</span>
                    </p>
                    
                </div>
                <div class="col-sm-1">
                    <img src="{{ asset('images/kupu2.png') }}" style="padding-top:230px;" class="floating-effect2">
                </div>
                <div class="col">
                    <img src="{{ asset('images/peta.png') }}" class="img-fluid rounded" alt="Bro Do Fest 2.0" style="padding-left: 45px; padding-top: 45px;">
                </div>
            </div>
        </div>
        <div style="position: absolute; left: 50%; transform: translate(-50%, -50%); z-index: 0; padding-top: 140px;">
            <img src="{{ asset('images/elemen.png') }}" alt="Elemen">
        </div>
    </div>
    
    <div id="film" class="section" style="padding: 25px 0;">
        <div class="container">
            <div class="header-film" style="background: rgba(0, 0, 0, 0.7); height: 60px; display: flex; justify-content: center; align-items: center;">
                <h2 class="ourmovies" style="font-size: 30px; font-style: italic; color: #F6DDA4; text-shadow: 0 0 10px rgba(255, 255, 255, 0.2), 0 0 20px rgba(255, 255, 255, 0.2), 0 0 30px rgba(255, 255, 255, 0.2);">
                    Our Movies
                </h2>
            </div>
            <div class="container-fluid" style="padding: 25px 0;">
                <div class="position-relative">
                    <button class="btn btn-dark position-absolute top-50 start-0 translate-middle-y" id="scrollLeft" style="z-index: 10;">❮</button>
                    <div class="film-container d-flex overflow-x-scroll">
                        @foreach($movies as $movie)
                            <div class="card custom-card border-0 mx-2">
                                <img src="{{ asset('storage/' . $movie->image) }}" class="img-fluid mb-3">
                                <div class="konten-film" style="padding: 20px; padding-top:10px;">
                                    <h4 class="judul-film fw-bold mb-3 kuning">{{ $movie->title }}</h4>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Produser  : </span><span class="produser" style="color: #F6DDA4;">{{ $movie->producer }}</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Sutradara : </span><span class="sutradara" style="color: #F6DDA4;">{{ $movie->director }}</span></p>
                                    <p><span style="color: #ffff">Penulis naskah : </span><span class="penas" style="color: #F6DDA4;">{{ $movie->writer }}</span></p>
                                    <button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        data-title="{{ $movie->title }}"
                                        data-producer="{{ $movie->producer }}"
                                        data-director="{{ $movie->director }}"
                                        data-writer="{{ $movie->writer }}"
                                        data-actors="{{ $movie->actors }}"
                                        data-synopsis="{{ $movie->synopsis }}"
                                        data-image="{{ asset('storage/' . $movie->image) }}">
                                        See More <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y" id="scrollRight" style="z-index: 10;">❯</button>
                </div>
            </div>
        </div>
    </div>
    
    

    <div id="filosofi" class="section" style="padding: 100px 0;">
        <div class="container">
            <div >
                <h2>v</h2>
            </div>
        </div>
    </div>
    
    <div id="gallery" class="section" style="padding: 100px 0;">
        <div class="container">
            <h2>Gallery</h2>
            <p>Galeri foto dan video Bro Do Fest.</p>
        </div>
    </div>
</div>    
</div>
<footer class="footer text-white text-center py-3">
        <p>&copy; 2024 Bro Do Fest</p>
</footer>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Movie Details</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="" id="modal-image" class="img-fluid mb-3" style="width:50%; display: block; margin-left: auto; margin-right: auto;">
            <div class="modal-isi">
                <p style="margin:2px;"><span style="color: #ffff">Produser  : </span><span class="produser" style="color: #F6DDA4;" id="modal-producer"></span></p>
                <p style="margin:2px;"><span style="color: #ffff">Sutradara : </span><span class="sutradara" style="color: #F6DDA4;" id="modal-director"></span></p>
                <p style="margin:2px;"><span style="color: #ffff">Penulis naskah : </span><span class="penas" style="color: #F6DDA4;" id="modal-writer"></span></p>
                <p style="margin:2px;"><span style="color: #ffff">Pemeran : </span><span class="cast" style="color: #F6DDA4;" id="modal-actors"></span></p><br>
                <p style="margin:2px;"><span style="color: #ffff">Sinopsis : </span><br>
                    <span class="cast" style="color: #F6DDA4;" id="modal-synopsis"></span>
                </p>
            </div>
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
    container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
});

scrollRight.addEventListener('click', () => {
    container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
});
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Inisialisasi modal saat halaman dimuat
        const musicModal = new bootstrap.Modal(document.getElementById('musicModal'));
        const audio = document.getElementById('backgroundMusic');
        const playButton = document.getElementById('playMusicButton');

        // Tampilkan modal saat halaman dibuka
        musicModal.show();

        // Tambahkan event listener ke tombol play music
        playButton.addEventListener('click', function () {
            audio.play();
            musicModal.hide();
        });

        // Pastikan musik berhenti saat pengguna menutup modal tanpa memilih play
        document.getElementById('closeMusicModal').addEventListener('click', function () {
            if (!audio.paused) {
                audio.pause();
            }
        });
    });
    document.querySelectorAll('a.nav-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 70, // Sesuaikan offset agar header tidak menutupi konten
                    behavior: 'smooth'
                });
            }
        });
    });

    // Tambahkan event listener untuk mendeteksi scroll
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) { // Jika menggulir lebih dari 50px
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    document.addEventListener('scroll', function () {
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
        staticBackdrop.addEventListener('show.bs.modal', function (event) {
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
