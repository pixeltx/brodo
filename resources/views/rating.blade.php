<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ratings</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center h-screen">
    <h1 class="text-xl font-bold mb-4">Rate the Movie</h1>
    <div id="rating-container" class="flex justify-center">
        <!-- Dinamis dibangun berdasarkan film yang ada -->
    </div>

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
</body>
</html>