<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('pre-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./assets/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;300;400;500;700;800&display=swap"
        rel="stylesheet">
    @stack('post-style')
    <title>Markas</title>
</head>

<body class="vh-100 vw-100"
    style="background-image: url('{{ asset('') }}assets/img/bg-nav.png'); background-repeat: repeat; background-size: 100%">
    <form class="mx-5 px-5 min-vh-100" action="">
        <div class="my-3">
            <label for="name" class="form-label fw-bold fs-4 mb-3 ps-3">Nama</label>
            <input type="text" id="name" aria-describedby="emailHelp"
                class="form-control bg-transparent rounded-pill border border-2 border-dark px-4 py-3">
        </div>

        <div class="my-3">
            <label for="email" class="form-label fw-bold fs-4 mb-3 ps-3">Gender</label>
            <div class="px-3 d-flex">
                <div class="form-check d-flex align-items-center me-4">
                    <input class="form-check-input border border-2 border-dark" type="radio" name="gender"
                        id="gender1">
                    <label class="ps-3 form-check-label fw-bold fs-4" for="gender1">
                        Male
                    </label>
                </div>
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input border border-2 border-dark" type="radio" name="gender"
                        id="gender2" checked>
                    <label class="ps-3 form-check-label fw-bold fs-4" for="gender2">
                        Female
                    </label>
                </div>
            </div>
        </div>

        <div class="my-3">
            <label for="email" class="form-label fw-bold fs-4 mb-3 ps-3">Email</label>
            <input type="email" id="email" aria-describedby="emailHelp"
                class="form-control bg-transparent rounded-pill border border-2 border-dark px-4 py-3">
        </div>

        <div class="my-3">
            <label for="notelp" class="form-label fw-bold fs-4 mb-3 ps-3">Nomor Telepon</label>
            <input type="text" id="notelp" aria-describedby="emailHelp"
                class="form-control bg-transparent rounded-pill border border-2 border-dark px-4 py-3">
        </div>

        <div class="my-3">
            <label for="ins/kom/per" class="form-label fw-bold fs-4 mb-3 ps-3">Instansi/Komunitas/Perusahaan</label>
            <input type="text" id="ins/kom/per" aria-describedby="emailHelp"
                class="form-control bg-transparent rounded-pill border border-2 border-dark px-4 py-3">
        </div>

        <div class="my-3">
            <label for="jeniskegiatan" class="form-label fw-bold fs-4 mb-3 ps-3">Jenis Kegiatan</label>
            <input type="text" id="jeniskegiatan" aria-describedby="emailHelp"
                class="form-control bg-transparent rounded-pill border border-2 border-dark px-4 py-3">
        </div>

        <div class="my-3">
            <label for="namakegiatan" class="form-label fw-bold fs-4 mb-3 ps-3">Nama Kegiatan</label>
            <input type="text" id="namakegiatan" aria-describedby="emailHelp"
                class="form-control bg-transparent rounded-pill border border-2 border-dark px-4 py-3">
        </div>

        <div class="my-3">
            <label for="desc" class="form-label fw-bold fs-4 mb-3 ps-3">Deskripsi Singkat</label>
            <textarea class="form-control bg-transparent border border-2 border-dark px-4 py-3" name="decs" id="desc"
                cols="30" rows="10" style="border-radius: 2.5rem;"></textarea>
        </div>
    </form>
</body>

@stack('pre-script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
@stack('post-script')

</html>
