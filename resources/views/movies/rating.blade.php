@extends('layouts.app')
    
@section('content')

<div class="container-fluid p-0">
    <!-- Hero Section -->
    <div class="hero-wrapper" 
     style="background-image: url('{{ asset('images/bghutanfull.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: top;">

     <div id="film" class="section" style="padding: 25px 0;">
        <div class="container">
            <div class="header-film" style="background: rgba(0, 0, 0, 0.7); height: 60px; display: flex; justify-content: center; align-items: center;">
                <h2 class="ourmovies" style="font-size: 30px; font-style: italic; color: #F6DDA4; text-shadow: 0 0 10px rgba(255, 255, 255, 0.2), 0 0 20px rgba(255, 255, 255, 0.2), 0 0 30px rgba(255, 255, 255, 0.2);">
                    Rating The Movie
                </h2>
            </div>

            {{-- <h1 class="text-xl font-bold mb-4">Rate the Movie</h1> --}}
            {{-- <div id="rating-container" class="flex justify-center">
                <!-- Dinamis dibangun berdasarkan film yang ada -->
            </div> --}}

            <div class="container-fluid d-flex justify-content-center  min-vh-100">
                <div class="row py-3 justify-content-center" style="width: 100%; padding-left:18px;">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Card Film di kiri -->
                        <div class="col-12 col-sm-4 col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('storage/' . $movie->image) }}" class="img-fluid mb-3">
                                <div class="konten-film" style="padding: 20px; padding-top:10px;">
                                    <h4 class="judul-film fw-bold mb-3 kuning">{{ $movie->title }}</h4>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Produser  : </span><span class="produser" style="color: #F6DDA4;">{{ $movie->producer }}</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Sutradara : </span><span class="sutradara" style="color: #F6DDA4;">{{ $movie->director }}</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Penulis naskah : </span><span class="penas" style="color: #F6DDA4;">{{ $movie->writer }}</span></p>
                                    <p style="margin-bottom: 15px"><span style="color: #ffff">Pemeran : </span><span class="cast" style="color: #F6DDA4;">{{ $movie->actors }}</span></p>
                                    <a href="{{ route('rating', ['movie_id' => $movie->id]) }}" type="button" class="btn btn-outline-custom">
                                        Rating <i class="fa fa-star" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bintang Rating di kanan -->
                        <div class="col-12 col-sm-8 col-md-8" style="padding-top: 90px;">
                            <div>
                                <p class="berikan">Berikan Rating Anda!</p>
                            </div>
                            <div class="rating-container">
                                <div class="stars">
                                    <input type="radio" id="star5" name="rating" value="5">
                                    <label for="star5">&#9733;</label>
                                    <input type="radio" id="star4" name="rating" value="4">
                                    <label for="star4">&#9733;</label>
                                    <input type="radio" id="star3" name="rating" value="3">
                                    <label for="star3">&#9733;</label>
                                    <input type="radio" id="star2" name="rating" value="2">
                                    <label for="star2">&#9733;</label>
                                    <input type="radio" id="star1" name="rating" value="1">
                                    <label for="star1">&#9733;</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div> 
            
            <div class="footer-film text-center py-3">
                <a href="/movies" class="btn btn-outline-custom" style="font-size: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 1);">
                    <i class="fa fa-arrow-circle-left p-2" aria-hidden="true"></i> Back To Menu </a>  
            </div>
        </div>
    </div>   
</div>    
</div>
<footer class="footer text-white text-center py-3">
        <p>&copy; 2024 Bro Do Fest</p>
</footer>
@endsection

<script>
    // Contoh data film, dapat diganti dengan data dinamis dari server
    let movieId = 1; // ID film yang sedang dinilai
    let maxRating = 5; // Maksimum bintang

    // Membuat bintang rating secara dinamis dengan urutan yang benar
    for (let i = 1; i <= maxRating; i++) {
        $('#rating-container').append(
            `<input type="radio" name="rating" class="hidden" id="rating-${i}">
            <label for="rating-${i}" class="text-3xl cursor-pointer text-gray-300 hover:text-yellow-500">&#9733;</label>`
        );
    }

    // Menangani perubahan rating
    $('input[name="rating"]').change(function () {
        let rating = $(this).attr('id').split('-')[1];
        $.ajax({
            url: '/rate-movie',
            type: 'POST',
            data: {
                movie_id: movieId,
                rating: rating,
                _token: '{{ csrf_token() }}' // Token CSRF untuk Laravel
            },
            success: function (response) {
                alert('Thanks for rating: ' + rating + ' stars!');
            },
            error: function () {
                alert('Error in submitting rating.');
            }
        });
    });
</script>