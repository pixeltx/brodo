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

            <div class="container-fluid d-flex justify-content-center min-vh-100">
                <div class="row py-3 justify-content-center" style="width: 100%; padding-left:18px;">
                    <div class="col-12 d-flex justify-content-center">
                        <!-- Card Film di kiri -->
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="card border-0">
                                <img src="{{ asset('storage/' . $movie->image) }}" class="img-fluid mb-3">
                                <div class="konten-film" style="padding: 20px; padding-top:10px;">
                                    <h4 class="judul-film fw-bold mb-3 kuning">{{ $movie->title }}</h4>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Produser  : </span><span class="produser" style="color: #F6DDA4;">{{ $movie->producer }}</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Sutradara : </span><span class="sutradara" style="color: #F6DDA4;">{{ $movie->director }}</span></p>
                                    <p style="margin-bottom: 5px"><span style="color: #ffff">Penulis naskah : </span><span class="penas" style="color: #F6DDA4;">{{ $movie->writer }}</span></p>
                                    <p style="margin-bottom: 15px"><span style="color: #ffff">Pemeran : </span><span class="cast" style="color: #F6DDA4;">{{ $movie->actors }}</span></p>
                                    <div id="rating-container" class="rating">
                                        <!-- Stars will be generated here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <a href="{{ route('movies.index') }}" class="btn btn-primary">Return to Movies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
.rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center;
}

.rating input {
    display: none;
}

.rating label {
    font-size: 4rem; /* Make the stars bigger */
    color: #ddd;
    cursor: pointer;
}

.rating input:checked ~ label,
.rating label:hover,
.rating label:hover ~ label {
    color: #FFD700;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let movieId = {{ $movie->id }}; // ID film yang sedang dinilai
    let maxRating = 5; // Maksimum bintang

    // Membuat bintang rating secara dinamis dengan urutan yang benar
    for (let i = maxRating; i >= 1; i--) {
        $('#rating-container').append(
            `<input type="radio" name="rating" class="hidden" id="rating-${i}" value="${i}">
            <label for="rating-${i}" class="text-3xl cursor-pointer text-gray-300 hover:text-yellow-500">&#9733;</label>`
        );
    }

    // Menangani perubahan rating
    $('input[name="rating"]').change(function () {
        let rating = $(this).val();
        $.ajax({
            url: `/movies/${movieId}/ratings`,
            type: 'POST',
            contentType: 'application/json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: JSON.stringify({
                rating: rating
            }),
            success: function (response) {
                if (response.success) {
                    alert('Thanks for rating: ' + rating + ' stars!');
                    location.reload(); // Refresh the page
                } else {
                    alert('Error in submitting rating: ' + response.message);
                }
            },
            error: function () {
                alert('Error in submitting rating.');
            }
        });
    });
});
</script>
@endsection