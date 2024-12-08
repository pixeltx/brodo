@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <!-- Hero Section -->
    <div class="hero text-center text-white d-flex align-items-center " 
     style="background-image: url('{{ asset('images/background.png') }}'); height: 470px; background-size: cover;">
        <div style="padding-top: 60px">
            <p class="k1">#Event Broadcasting & Perfilman</p>
            <h1 class="wel" style="text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5);">
                Welcome to
            </h1>
            <h1 class="wel" style="font-style: italic; text-shadow: 0 0 1px rgba(255, 255, 255, 0.1), 0 0 1px rgba(255, 255, 255, 0.1), 0 0 50px rgba(255, 255, 255, 0.3), 0 0 100px rgba(255, 255, 255, 0.5);">
                Bro
                <span class="biru"> Do Fest</span>
            </h1>            
            <p style="padding-left: 40px; text-align: left;">Creating unforgettable moments through the film that leave a timeless impact</p>
            <div style="text-align: left; padding-left: 40px;">
                <a href="{{ route('event') }}" class="btn btn-primary mt-3" style="background-color: #79AAD3; font-weight: 800; border-radius: 10px; padding: 6px 35px; font-size:20px;">
                    Our Event
                </a>                
            </div>
        </div>
    </div>

    <!-- Timeline Section -->
    <section id="event"> 
            <div class="row text-center">
                <img src="{{ asset('images/timeline.png') }}" alt="Timeline Event" style="padding:50px;">
            </div>
            <div class="d-flex align-items-center" style="padding-left: 50px;">
                <div class="mr-4">
                    <img src="{{ asset('images/foto.png') }}" alt="Timeline Event" style="width: 300px; height: auto;">
                </div>
                <div class="desc p-8" style="text-align: justify;">
                    <p>
                        <span class="biru2">Bro Do Fest</span> terdiri dari tiga suku kata dalam bahasa Inggris yaitu 
                        <span class="biru2">"Bro"</span> yang artinya <span class="biru2">saudara</span> atau teman, 
                        <span class="biru2">"Do"</span> yang artinya <span class="biru2">melakukan</span>, dan 
                        <span class="biru2">"Fest"</span> yang merupakan kependekan dari <span class="biru2">"Festival"</span>.
                    </p>
                    <p>
                        Makna dari <span class="biru2">Bro Do Fest</span> adalah mengadakan 
                        <span class="biru2">festival</span> untuk <span class="biru2">mempererat tali persaudaraan</span>.
                    </p>
                </div>                
            </div>
    </section>
</div>
<footer class="footer2 text-white text-center py-3">
    <p>&copy; 2024 Bro Do Fest</p>
</footer>

@endsection
