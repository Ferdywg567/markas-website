<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('./assets/app.css') }}">
    <title>Markas</title>
</head>

<body class="bg-body-tertiary vh-100 vw-100" style="background-image: url({{ asset('') }}./assets/img/bg-nav.png)">
    {{-- begin full width nav --}}
    <nav class="navbar bg-body-tertiary" style="background-image: url({{ asset('') }}./assets/img/bg-nav.png)">
        <div class="container-fluid d-flex justify-content-between">
            <div class="navbar-brand ms-5">
                <a href="#">
                    <svg width="182" height="66" viewBox="0 0 182 66" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.832 45V22.6H9.216L18.88 35.432L16.288 35.4L25.952 22.6H30.272V45H25.568V37.096C25.568 35.2827 25.6107 33.5973 25.696 32.04C25.7813 30.4827 25.952 28.9147 26.208 27.336L26.72 28.936L18.624 39.24H16.512L8.352 28.904L8.896 27.336C9.152 28.8933 9.32267 30.4507 9.408 32.008C9.49333 33.544 9.536 35.24 9.536 37.096V45H4.832ZM36.917 45L47.317 22.6H51.989L62.357 45H57.333L51.093 31.56C50.901 31.1333 50.709 30.7067 50.517 30.28C50.325 29.832 50.1437 29.384 49.973 28.936C49.8023 28.488 49.6317 28.04 49.461 27.592C49.3117 27.144 49.173 26.7067 49.045 26.28L50.101 26.248C49.973 26.7173 49.8237 27.1867 49.653 27.656C49.4823 28.104 49.301 28.552 49.109 29C48.9383 29.4267 48.757 29.864 48.565 30.312C48.373 30.7387 48.1703 31.1867 47.957 31.656L41.749 45H36.917ZM41.653 40.52L43.285 36.648H55.797L56.725 40.52H41.653ZM68.957 45V22.6H81.117C82.6957 22.6 84.0717 22.9093 85.245 23.528C86.4397 24.1253 87.3677 24.9573 88.029 26.024C88.6903 27.0693 89.021 28.2853 89.021 29.672C89.021 31.08 88.6583 32.3387 87.933 33.448C87.229 34.5573 86.269 35.4427 85.053 36.104C83.837 36.7653 82.4823 37.096 80.989 37.096H73.597V45H68.957ZM84.573 45L77.501 34.888L82.525 34.088L90.237 45.032L84.573 45ZM73.597 33.192H80.541C81.2023 33.192 81.8103 33.0533 82.365 32.776C82.9197 32.4773 83.3463 32.0827 83.645 31.592C83.965 31.08 84.125 30.504 84.125 29.864C84.125 29.2453 83.9543 28.7013 83.613 28.232C83.293 27.7627 82.8343 27.4 82.237 27.144C81.661 26.888 81.0317 26.76 80.349 26.76H73.597V33.192ZM101.973 39.24L101.077 34.856L115.861 22.6H122.101L101.973 39.24ZM98.6445 45V22.6H103.445V45H98.6445ZM116.213 45L106.933 33.384L109.909 30.152L122.101 45H116.213ZM127.011 45L137.411 22.6H142.083L152.451 45H147.427L141.187 31.56C140.995 31.1333 140.803 30.7067 140.611 30.28C140.419 29.832 140.237 29.384 140.067 28.936C139.896 28.488 139.725 28.04 139.555 27.592C139.405 27.144 139.267 26.7067 139.139 26.28L140.195 26.248C140.067 26.7173 139.917 27.1867 139.747 27.656C139.576 28.104 139.395 28.552 139.203 29C139.032 29.4267 138.851 29.864 138.659 30.312C138.467 30.7387 138.264 31.1867 138.051 31.656L131.843 45H127.011ZM131.747 40.52L133.379 36.648H145.891L146.819 40.52H131.747ZM168.235 45.32C166.571 45.32 165.056 45.16 163.691 44.84C162.347 44.4987 161.109 44.0293 159.979 43.432C158.869 42.8133 157.867 42.0773 156.971 41.224L159.531 37.48C160.981 38.824 162.453 39.784 163.947 40.36C165.461 40.936 166.976 41.224 168.491 41.224C169.301 41.224 170.08 41.1387 170.827 40.968C171.573 40.776 172.192 40.488 172.683 40.104C173.195 39.6987 173.451 39.176 173.451 38.536C173.451 38.152 173.323 37.8213 173.067 37.544C172.832 37.2667 172.501 37.032 172.075 36.84C171.669 36.648 171.189 36.4987 170.635 36.392C170.08 36.264 169.504 36.168 168.907 36.104C168.331 36.0187 167.755 35.9333 167.179 35.848C165.771 35.656 164.512 35.3787 163.403 35.016C162.293 34.6533 161.344 34.2053 160.555 33.672C159.787 33.1387 159.189 32.488 158.763 31.72C158.357 30.9307 158.155 30.0453 158.155 29.064C158.155 27.9973 158.411 27.0373 158.923 26.184C159.435 25.3093 160.149 24.5733 161.067 23.976C162.005 23.3787 163.072 22.9307 164.267 22.632C165.483 22.312 166.784 22.152 168.171 22.152C169.664 22.152 171.008 22.3013 172.203 22.6C173.419 22.8987 174.485 23.3147 175.403 23.848C176.341 24.3813 177.109 25 177.707 25.704L175.051 29C174.475 28.4027 173.803 27.912 173.035 27.528C172.288 27.1227 171.488 26.8133 170.635 26.6C169.803 26.3867 168.949 26.28 168.075 26.28C167.136 26.28 166.304 26.376 165.579 26.568C164.853 26.7387 164.277 27.0053 163.851 27.368C163.424 27.7307 163.211 28.168 163.211 28.68C163.211 29.1493 163.371 29.544 163.691 29.864C164.011 30.184 164.437 30.44 164.971 30.632C165.504 30.824 166.112 30.9947 166.795 31.144C167.499 31.272 168.224 31.3787 168.971 31.464C170.208 31.656 171.392 31.88 172.523 32.136C173.675 32.392 174.699 32.7547 175.595 33.224C176.491 33.672 177.195 34.28 177.707 35.048C178.219 35.816 178.475 36.7867 178.475 37.96C178.475 39.496 178.037 40.8187 177.163 41.928C176.288 43.016 175.083 43.8587 173.547 44.456C172.011 45.032 170.24 45.32 168.235 45.32Z"
                            fill="#D90027" />
                    </svg>
                </a>
            </div>
            <div class="me-5">
                <span>
                    <a class="navbar-brand ms-5 primary-color" href="{{ route('home') }}">Home</a>
                    <a class="navbar-brand ms-5 primary-color" href="{{ route('about') }}">About</a>
                    <a class="navbar-brand ms-5 primary-color" href="#">Philosophy</a>
                    <a class="navbar-brand ms-5 primary-color" href="#">Events</a>
                    <a class="navbar-brand ms-5 primary-color" href="#">Booking</a>
                    <a class="navbar-brand ms-5 primary-color" href="#">Contact Us</a>
                </span>
            </div>
        </div>
    </nav>
    {{-- end full width nav --}}

    {{-- begin responsive nav --}}
    <nav class="navbar navbar-expand-lg bg-light min-width-nav"
        style="background-image: url({{ asset('') }}./assets/img/bg-nav.png)">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <svg width="182" height="66" viewBox="0 0 182 66" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.832 45V22.6H9.216L18.88 35.432L16.288 35.4L25.952 22.6H30.272V45H25.568V37.096C25.568 35.2827 25.6107 33.5973 25.696 32.04C25.7813 30.4827 25.952 28.9147 26.208 27.336L26.72 28.936L18.624 39.24H16.512L8.352 28.904L8.896 27.336C9.152 28.8933 9.32267 30.4507 9.408 32.008C9.49333 33.544 9.536 35.24 9.536 37.096V45H4.832ZM36.917 45L47.317 22.6H51.989L62.357 45H57.333L51.093 31.56C50.901 31.1333 50.709 30.7067 50.517 30.28C50.325 29.832 50.1437 29.384 49.973 28.936C49.8023 28.488 49.6317 28.04 49.461 27.592C49.3117 27.144 49.173 26.7067 49.045 26.28L50.101 26.248C49.973 26.7173 49.8237 27.1867 49.653 27.656C49.4823 28.104 49.301 28.552 49.109 29C48.9383 29.4267 48.757 29.864 48.565 30.312C48.373 30.7387 48.1703 31.1867 47.957 31.656L41.749 45H36.917ZM41.653 40.52L43.285 36.648H55.797L56.725 40.52H41.653ZM68.957 45V22.6H81.117C82.6957 22.6 84.0717 22.9093 85.245 23.528C86.4397 24.1253 87.3677 24.9573 88.029 26.024C88.6903 27.0693 89.021 28.2853 89.021 29.672C89.021 31.08 88.6583 32.3387 87.933 33.448C87.229 34.5573 86.269 35.4427 85.053 36.104C83.837 36.7653 82.4823 37.096 80.989 37.096H73.597V45H68.957ZM84.573 45L77.501 34.888L82.525 34.088L90.237 45.032L84.573 45ZM73.597 33.192H80.541C81.2023 33.192 81.8103 33.0533 82.365 32.776C82.9197 32.4773 83.3463 32.0827 83.645 31.592C83.965 31.08 84.125 30.504 84.125 29.864C84.125 29.2453 83.9543 28.7013 83.613 28.232C83.293 27.7627 82.8343 27.4 82.237 27.144C81.661 26.888 81.0317 26.76 80.349 26.76H73.597V33.192ZM101.973 39.24L101.077 34.856L115.861 22.6H122.101L101.973 39.24ZM98.6445 45V22.6H103.445V45H98.6445ZM116.213 45L106.933 33.384L109.909 30.152L122.101 45H116.213ZM127.011 45L137.411 22.6H142.083L152.451 45H147.427L141.187 31.56C140.995 31.1333 140.803 30.7067 140.611 30.28C140.419 29.832 140.237 29.384 140.067 28.936C139.896 28.488 139.725 28.04 139.555 27.592C139.405 27.144 139.267 26.7067 139.139 26.28L140.195 26.248C140.067 26.7173 139.917 27.1867 139.747 27.656C139.576 28.104 139.395 28.552 139.203 29C139.032 29.4267 138.851 29.864 138.659 30.312C138.467 30.7387 138.264 31.1867 138.051 31.656L131.843 45H127.011ZM131.747 40.52L133.379 36.648H145.891L146.819 40.52H131.747ZM168.235 45.32C166.571 45.32 165.056 45.16 163.691 44.84C162.347 44.4987 161.109 44.0293 159.979 43.432C158.869 42.8133 157.867 42.0773 156.971 41.224L159.531 37.48C160.981 38.824 162.453 39.784 163.947 40.36C165.461 40.936 166.976 41.224 168.491 41.224C169.301 41.224 170.08 41.1387 170.827 40.968C171.573 40.776 172.192 40.488 172.683 40.104C173.195 39.6987 173.451 39.176 173.451 38.536C173.451 38.152 173.323 37.8213 173.067 37.544C172.832 37.2667 172.501 37.032 172.075 36.84C171.669 36.648 171.189 36.4987 170.635 36.392C170.08 36.264 169.504 36.168 168.907 36.104C168.331 36.0187 167.755 35.9333 167.179 35.848C165.771 35.656 164.512 35.3787 163.403 35.016C162.293 34.6533 161.344 34.2053 160.555 33.672C159.787 33.1387 159.189 32.488 158.763 31.72C158.357 30.9307 158.155 30.0453 158.155 29.064C158.155 27.9973 158.411 27.0373 158.923 26.184C159.435 25.3093 160.149 24.5733 161.067 23.976C162.005 23.3787 163.072 22.9307 164.267 22.632C165.483 22.312 166.784 22.152 168.171 22.152C169.664 22.152 171.008 22.3013 172.203 22.6C173.419 22.8987 174.485 23.3147 175.403 23.848C176.341 24.3813 177.109 25 177.707 25.704L175.051 29C174.475 28.4027 173.803 27.912 173.035 27.528C172.288 27.1227 171.488 26.8133 170.635 26.6C169.803 26.3867 168.949 26.28 168.075 26.28C167.136 26.28 166.304 26.376 165.579 26.568C164.853 26.7387 164.277 27.0053 163.851 27.368C163.424 27.7307 163.211 28.168 163.211 28.68C163.211 29.1493 163.371 29.544 163.691 29.864C164.011 30.184 164.437 30.44 164.971 30.632C165.504 30.824 166.112 30.9947 166.795 31.144C167.499 31.272 168.224 31.3787 168.971 31.464C170.208 31.656 171.392 31.88 172.523 32.136C173.675 32.392 174.699 32.7547 175.595 33.224C176.491 33.672 177.195 34.28 177.707 35.048C178.219 35.816 178.475 36.7867 178.475 37.96C178.475 39.496 178.037 40.8187 177.163 41.928C176.288 43.016 175.083 43.8587 173.547 44.456C172.011 45.032 170.24 45.32 168.235 45.32Z"
                        fill="#D90027" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Philosophy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end responsive nav --}}

    {{-- begin header section --}}
    <div class="h-100 w-100"
        style="background-image: url({{ asset('/assets/images/events/bg/Picture-event=Frame-7.png') }})">

    </div>
    {{-- end header section --}}

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>