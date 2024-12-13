@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <!-- Hero Section -->
        <div class="hero text-center text-white d-flex align-items-center"
<<<<<<< HEAD
            style="background-image: url('{{ asset('images/bg4.png') }}');">
            <div class="ket">
                <p class="k1 animated" data-animation="fadeInRight" style="padding-left: 0%">#Event Broadcasting & Perfilman</p>
                <h1 class="wel animated" data-animation="fadeInLeft"
                    style="padding-left:0px; text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5); ">
                    Welcome to
                </h1>
                <h1 class="wel animated" data-animation="fadeInRight"
                    style="font-style:italic; padding-left:0px; italic; text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5);">
                    
                    <span class="biru">Bro Do Fest</span>
                </h1>
                <p class="k2 animated" style="text-align: center;" data-animation="fadeInLeft">Creating
                    unforgettable moments through the film that leave a timeless impact</p>
                <div style=" animation: bounceIn 3s ease; text-align: left;">
=======
            style="background-image: url('{{ asset('images/bg2.png') }}'); height: 100vh; background-size: cover;">
            <div style="padding-top: 15vh; padding-left:20px;">
                <p class="k1 animated" data-animation="fadeInRight">#Event Broadcasting & Perfilman</p>
                <h1 class="wel animated" data-animation="fadeInLeft"
                    style="text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5); ">
                    Welcome to
                </h1>
                <h1 class="wel animated" data-animation="fadeInRight"
                    style="font-style: italic; text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5);">
                    Bro
                    <span class="biru"> Do Fest</span>
                </h1>
                <p class="k2 animated" data-animation="fadeInLeft" style="padding-left: 40px;">Creating
                    unforgettable moments through the film that leave a timeless impact</p>
                <div style="text-align: left; padding-left: 40px; animation: bounceIn 3s ease;">
>>>>>>> 23e4f4722d2ca56bc326894a956df5504db500ac
                    <a href="{{ route('event') }}" class="btn btn-primary mt-3 animated-btn oure">
                        Our Event
                    </a>
                </div>
            </div>
        </div>

        <!-- Timeline Section -->
        <section id="event">
            {{-- <div class="d-flex justify-content-center">
            <img src="{{ asset('images/timeline.png') }}" alt="Timeline Event" style="padding:70px; width:80%;">
        </div>         --}}

            <!-- Timeline Section -->
            <div class="timeline">
                <div class="event">
                <div class="circle">
                        <img src="{{ asset('images/l1.png') }}" alt="Event 1">
                </div>
                    <p class="title fade-in">Multeamexpo 1.0</p>
                    <p class="year fade-in">2017</p>
                </div>
                <div class="event">
                    <div class="circle">
                        <img src="{{ asset('images/l2.png') }}" alt="Event 2">
                    </div>
                    <p class="title fade-in">Multeamexpo 2.0</p>
                    <p class="year fade-in">2018</p>
                </div>
                <div class="event">
                    <div class="circle">
                        <img src="{{ asset('images/l3.png') }}" alt="Event 3">
                    </div>
                    <p class="title fade-in">Multeamexpo 3.0</p>
                    <p class="year fade-in">2019</p>
                </div>
                <div class="event">
                    <div class="circle">
                        <img src="{{ asset('images/l4.png') }}" alt="Event 4">
                    </div>
                    <p class="title fade-in">Multifest</p>
<<<<<<< HEAD
                    <p class="year fade-in">2022</p>
=======
                    <p class="year fade-in">2020</p>
>>>>>>> 23e4f4722d2ca56bc326894a956df5504db500ac
                </div>
                <div class="event">
                    <div class="circle">
                        <img src="{{ asset('images/l5.png') }}" alt="Event 5">
                    </div>
                    <p class="title fade-in">Multeamexpo 4.0</p>
                    <p class="year fade-in">2023</p>
                </div>
                <div class="event">
                    <div class="circle">
                        <img src="{{ asset('images/l6.png') }}" alt="Event 5">
                    </div>
                    <p class="title fade-in">Bro Do Fest 1.0</p>
                    <p class="year fade-in">2024</p>
                </div>
                <div class="event">
                    <div class="circle">
                        <img src="{{ asset('images/burung.png') }}" alt="Event 6">
                    </div>
                    <p class="title fade-in">Bro Do Fest 2.0</p>
                    <p class="year">2024</p>
                </div>
            </div>
<<<<<<< HEAD
            <div class="d-flex align-items-center kotak">
                <div class="container-content">
                    <div class="mr-4 d-flex justify-content-center">
                        <img src="{{ asset('images/q.png') }}" class="q animated" data-animation="fadeInLeft">
                    </div>
                    <div class="desc animated " data-animation="fadeInRight">
=======
            <div class="d-flex align-items-center" style="padding-left: 65px;">
                <div class="container-content">
                    <div class="mr-4">
                        <img src="{{ asset('images/q.png') }}" class="q animated" data-animation="fadeInLeft">
                    </div>
                    <div class="desc animated" data-animation="fadeInRight">
>>>>>>> 23e4f4722d2ca56bc326894a956df5504db500ac
                        <p class="k3">
                            <span class="biru2">Bro Do Fest</span> terdiri dari tiga suku kata dalam bahasa Inggris yaitu
                            <span class="biru2">"Bro"</span> yang artinya <span class="biru2">saudara</span> atau teman,
                            <span class="biru2">"Do"</span> yang artinya <span class="biru2">melakukan</span>, dan
                            <span class="biru2">"Fest"</span> yang merupakan kependekan dari <span class="biru2">"Festival"</span>.
                        </p>
                        <p class="k3">
                            Makna dari <span class="biru2">Bro Do Fest</span> adalah mengadakan
                            <span class="biru2">festival</span> untuk <span class="biru2">mempererat tali persaudaraan</span>.
                        </p>
                    </div>
                </div>                
            </div>            
        </section>
    </div>
    <footer class="footer2 text-white py-3" style="background-color: #1A1A1A;">
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
            <a href="https://instagram.com/aether.weave" target="_blank" class="text-white text-decoration-none mx-2">
                <img src="{{ asset('images/aev.png') }}" alt="Aether Weave Logo" 
                     style="width: 30px; height: 30px; border-radius: 50%;">
                Aether Weave
            </a>
        </div>
        </div>
    </footer>
    

@endsection

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
