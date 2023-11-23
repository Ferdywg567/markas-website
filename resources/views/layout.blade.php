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

<body class="bg-body-tertiary w-100 overflow-x-hidden"
    style="background-image: url({{ asset('') }}./assets/img/bg-nav.png)">
    {{-- begin full width nav --}}
    <nav class="navbar full-width-nav bg-body-tertiary"
        style="background-image: url({{ asset('') }}./assets/img/bg-nav.png)">
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
                    <a class="navbar-brand ms-5 primary-color" href="{{ route('event') }}">Events</a>
                    <a class="navbar-brand ms-5 primary-color" href="{{ route('booking') }}">Booking</a>
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
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Philosophy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('event') }}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('booking') }}">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end responsive nav --}}

    @stack('body')

    <footer class="mt-5 pt-5">
        <div class="w-100 bg-primary-color">
            <div class="container pe-0"
                style="transform: translateY(-4rem);background-image: url({{ asset('./assets/img/bg-footer.png') }});border-radius: 24px;border-style: solid;
             border-width: 2px;border-color: #1a202c;background-position: center center;background-repeat: no-repeat;">
                <div class="ps-3 pt-3">
                    <div class="row mt-4">
                        <div class="col">
                            <img class="w-100" src="{{ asset('') }}assets/images/logo/Markas/Logo-17.png">
                            <p class="text-sm-start fs-6 lh-sm ms-3" style="letter-spacing: 1px">
                                MARKAS adalah tempat kolaborasi atau yang lebih dikenal dengan space yang bertujuan
                                menjadi
                                wadah tempat masyarakat melakukan perintisan Startup di kota-kota seluruh Indonesia
                                maupun
                                tempat belajar bagi para peminat teknologi perusahaan digital.
                            </p>

                            <div class="d-flex align-items-center flex-row ms-3 ">
                                <svg class="d-inline-flex" width="37" height="37" viewBox="0 0 37 37"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_703_100)">
                                        <path
                                            d="M18.2338 3.2835C23.1056 3.2835 23.6825 3.30487 25.5985 3.39034C27.3791 3.46869 28.3407 3.76784 28.9817 4.01713C29.8293 4.34476 30.4418 4.74363 31.0758 5.37754C31.7168 6.01857 32.1085 6.62399 32.4362 7.47157C32.6855 8.1126 32.9846 9.08127 33.0629 10.8548C33.1484 12.7779 33.1698 13.3548 33.1698 18.2195C33.1698 23.0914 33.1484 23.6683 33.0629 25.5843C32.9846 27.3649 32.6855 28.3264 32.4362 28.9675C32.1085 29.8151 31.7097 30.4276 31.0758 31.0615C30.4347 31.7025 29.8293 32.0943 28.9817 32.4219C28.3407 32.6712 27.372 32.9704 25.5985 33.0487C23.6754 33.1342 23.0985 33.1555 18.2338 33.1555C13.3619 33.1555 12.785 33.1342 10.869 33.0487C9.08839 32.9704 8.12685 32.6712 7.48582 32.4219C6.63823 32.0943 6.02569 31.6954 5.39178 31.0615C4.75075 30.4205 4.35901 29.8151 4.03137 28.9675C3.78208 28.3264 3.48293 27.3578 3.40459 25.5843C3.31912 23.6612 3.29775 23.0842 3.29775 18.2195C3.29775 13.3477 3.31912 12.7708 3.40459 10.8548C3.48293 9.07415 3.78208 8.1126 4.03137 7.47157C4.35901 6.62399 4.75787 6.01144 5.39178 5.37754C6.03281 4.73651 6.63823 4.34476 7.48582 4.01713C8.12685 3.76784 9.09552 3.46869 10.869 3.39034C12.785 3.30487 13.3619 3.2835 18.2338 3.2835ZM18.2338 0C13.2836 0 12.6639 0.0213677 10.7195 0.106838C8.78212 0.192309 7.4502 0.505702 6.29635 0.954424C5.09263 1.42451 4.07411 2.04418 3.0627 3.0627C2.04418 4.07411 1.42451 5.09263 0.954424 6.28923C0.505702 7.4502 0.192309 8.775 0.106838 10.7123C0.0213677 12.6639 0 13.2836 0 18.2338C0 23.1839 0.0213677 23.8036 0.106838 25.7481C0.192309 27.6854 0.505702 29.0173 0.954424 30.1712C1.42451 31.3749 2.04418 32.3934 3.0627 33.4048C4.07411 34.4162 5.09263 35.043 6.28923 35.506C7.4502 35.9547 8.775 36.2681 10.7123 36.3536C12.6568 36.439 13.2765 36.4604 18.2266 36.4604C23.1768 36.4604 23.7965 36.439 25.7409 36.3536C27.6783 36.2681 29.0102 35.9547 30.1641 35.506C31.3607 35.043 32.3792 34.4162 33.3906 33.4048C34.402 32.3934 35.0288 31.3749 35.4917 30.1783C35.9405 29.0173 36.2539 27.6925 36.3393 25.7552C36.4248 23.8107 36.4462 23.1911 36.4462 18.2409C36.4462 13.2907 36.4248 12.671 36.3393 10.7266C36.2539 8.78924 35.9405 7.45733 35.4917 6.30347C35.043 5.09263 34.4234 4.07411 33.4048 3.0627C32.3934 2.0513 31.3749 1.42451 30.1783 0.961546C29.0173 0.512825 27.6925 0.199432 25.7552 0.113961C23.8036 0.0213677 23.184 0 18.2338 0Z"
                                            fill="#000100" />
                                        <path
                                            d="M18.2338 8.86768C13.0628 8.86768 8.86761 13.0629 8.86761 18.2338C8.86761 23.4048 13.0628 27.6 18.2338 27.6C23.4048 27.6 27.6 23.4048 27.6 18.2338C27.6 13.0629 23.4048 8.86768 18.2338 8.86768ZM18.2338 24.3094C14.8791 24.3094 12.1582 21.5886 12.1582 18.2338C12.1582 14.8791 14.8791 12.1583 18.2338 12.1583C21.5885 12.1583 24.3093 14.8791 24.3093 18.2338C24.3093 21.5886 21.5885 24.3094 18.2338 24.3094Z"
                                            fill="#000100" />
                                        <path
                                            d="M30.1569 8.49767C30.1569 9.7085 29.174 10.6843 27.9703 10.6843C26.7595 10.6843 25.7837 9.70138 25.7837 8.49767C25.7837 7.28683 26.7666 6.31104 27.9703 6.31104C29.174 6.31104 30.1569 7.29395 30.1569 8.49767Z"
                                            fill="#000100" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_703_100">
                                            <rect width="36.4675" height="36.4675" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <p class="d-inline-flex mt-3 p-2 fs-5 fw-bold">INSTAGRAM</p>

                                <svg class="ms-5" width="13" height="12" viewBox="0 0 13 12"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.45189 9.50051L0.780369 10.172L2.12341 11.5151L2.79493 10.8436L1.45189 9.50051ZM3.64289 0.105475L2.69322 0.105475L2.69322 2.00483H3.64289V0.105475ZM10.2906 8.65255V9.60223H12.19V8.65255H10.2906ZM2.79493 10.8436L11.9118 1.72667L10.5688 0.383628L1.45189 9.50051L2.79493 10.8436ZM3.64289 2.00483L11.2403 2.00483V0.105475L3.64289 0.105475V2.00483ZM11.2403 2.00483L12 2.00483L12 0.105476L11.2403 0.105475L11.2403 2.00483ZM12.19 8.65255L12.19 1.05515L10.2906 1.05515L10.2906 8.65255H12.19ZM12.19 1.05515L12.19 0.295409L10.2906 0.295411L10.2906 1.05515L12.19 1.05515Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <div class="d-flex align-items-center flex-row ms-3 translate-middle-y mt-2">
                                <svg class="d-inline-flex" width="37" height="37" viewBox="0 0 37 37"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_703_105)">
                                        <path
                                            d="M36.1043 11.4078C36.1043 11.4078 35.7481 8.8935 34.6513 7.78951C33.2624 6.3365 31.7097 6.32938 30.9974 6.24391C25.8976 5.87353 18.2409 5.87354 18.2409 5.87354H18.2266C18.2266 5.87354 10.5699 5.87353 5.47013 6.24391C4.75787 6.32938 3.20515 6.3365 1.81625 7.78951C0.719379 8.8935 0.370373 11.4078 0.370373 11.4078C0.370373 11.4078 0 14.3636 0 17.3124V20.0759C0 23.0247 0.363251 25.9805 0.363251 25.9805C0.363251 25.9805 0.719379 28.4948 1.80913 29.5988C3.19803 31.0518 5.02141 31.0019 5.83338 31.1586C8.75363 31.4364 18.2338 31.5219 18.2338 31.5219C18.2338 31.5219 25.8976 31.5076 30.9974 31.1444C31.7097 31.0589 33.2624 31.0518 34.6513 29.5988C35.7481 28.4948 36.1043 25.9805 36.1043 25.9805C36.1043 25.9805 36.4675 23.0318 36.4675 20.0759V17.3124C36.4675 14.3636 36.1043 11.4078 36.1043 11.4078ZM14.4659 23.4307V13.1813L24.3164 18.3238L14.4659 23.4307Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_703_105">
                                            <rect width="36.4675" height="36.4675" fill="white"
                                                transform="translate(0 0.467773)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <p class="d-inline-flex mt-3 p-2 fs-5 fw-bold">YOUTUBE</p>

                                <svg class="ms-5" width="13" height="12" viewBox="0 0 13 12"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.45189 9.50051L0.780369 10.172L2.12341 11.5151L2.79493 10.8436L1.45189 9.50051ZM3.64289 0.105475L2.69322 0.105475L2.69322 2.00483H3.64289V0.105475ZM10.2906 8.65255V9.60223H12.19V8.65255H10.2906ZM2.79493 10.8436L11.9118 1.72667L10.5688 0.383628L1.45189 9.50051L2.79493 10.8436ZM3.64289 2.00483L11.2403 2.00483V0.105475L3.64289 0.105475V2.00483ZM11.2403 2.00483L12 2.00483L12 0.105476L11.2403 0.105475L11.2403 2.00483ZM12.19 8.65255L12.19 1.05515L10.2906 1.05515L10.2906 8.65255H12.19ZM12.19 1.05515L12.19 0.295409L10.2906 0.295411L10.2906 1.05515L12.19 1.05515Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>
                        <div class="col container mt-3 ms-5 ">
                            <p class="primary-color fs-5 fw-light text-uppercase">REGIONAL</p>
                            <p class="primary-color fs-4 fw-bold text-black text-uppercase">SURABAYA</p>
                            <p class="primary-color fs-4 fw-bold text-black text-uppercase">Jakarta</p>
                            <p class="primary-color fs-4 fw-bold text-black text-uppercase">Bandung</p>
                            <p class="primary-color fs-4 fw-bold text-black text-uppercase">denpasar</p>
                        </div>
                        <div class="col container mt-3 ms-5 fw-light">
                            <p class="primary-color fs-5 text-uppercase">CONTACT US</p>
                            <p class="primary-color fs-4 fw-bold text-black text-uppercase">Booking</p>
                            <p class="primary-color fs-4 fw-bold text-black text-uppercase">FAQ</p>
                        </div>
                        <div class="col container mt-3 ms-5 fw-light">
                            <p class="primary-color fs-5 text-uppercase">ABOUT</p>
                            <p class="primary-color fs-4 fw-bold text-black text-uppercase">Philosophy</p>
                            <p class="primary-color fs-4 fw-bold text-black text-uppercase">Event</p>
                            <p class="primary-color fs-4 fw-bold text-black text-uppercase">Credits</p>
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="position-absolute bottom-0 end-0 overflow-hidden">
                        <img src="{{ asset('') }}assets/images/logo/Markas/logo-transculent.png"
                            style="transform: translate(96px,96px)">
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
