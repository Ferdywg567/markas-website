@extends('layout')

@push('post-style')
    <style>
        .subtitle-header {
            letter-spacing: .3rem;
            font-weight: 600;
            font-size: 28px;
            line-height: 68px;
        }

        .header {
            /* letter-spacing: .3rem; */
            font-weight: 800;
            font-size: 48px;
            line-height: 68px;
        }

        .light-placeholder::placeholder {
            color: #BCBCBC;
            font-weight: 300;
            font-size: 28px;
        }

        .category-group {
            gap: 20px;
        }

        .category-group button {
            flex-grow: 1;
        }

        .btn-category {
            padding: 12px 20px;
            font-size: 28px;
            border-radius: 50px;
            border: 0;
            background: transparent;
            font-weight: 600;
            transition: all .3ss ease-out;
        }

        .btn-category.active {
            background-color: #DA1F3E;
            color: white;
        }

        .search-form {
            padding: 2rem !important;
            border-radius: 100px;
        }

        .booking-hero {
            padding: 20rem 0;
        }

        .btn-booking {
            background-color: #D90027;
            color: white;
            font-size: 28px;
            font-weight: 600;
            padding: 1rem 6rem;
        }

        .more-photos {
            font-size: 36px;
            font-weight: 400px;
        }

        .building-detail {
            gap: 10px;
            margin: 6rem 0;
        }

        .building-item {
            padding: 1rem 2rem;
            font-weight: 300;
            font-size: 20px;
        }

        .section-title {
            font-size: 48px;
            font-weight: 700;
        }

        .facility-check {
            font-size: 28px;
            font-weight: 300;
        }

        .section-subtitle {
            font-size: 28px;
            font-weight: 600;
        }

        .divider {
            margin: 18px 0;
        }

        .description-text {
            color: #5A5A5A;
        }

        .place-name {
            font-size: 22px;
            font-weight: 600;
        }

        .facility-ul {
            columns: 2;
        }
    </style>
@endpush

@push('body')
    {{-- begin header section --}}
    <div class="h-100 w-100 mb-5" style="margin-top: 8rem">
        <div class="container p-0" style="padding: 8rem">
            <h4 class="mb-5 subtitle-header primary-color text-center">
                BOOKING
            </h4>
            <h2 class="mb-5 header text-center">
                CARI MARKAS DI SEKITARMU!
            </h2>

            <div class="input-group shadow-lg" style="border-radius: 100px">
                <input class="form-control form-control-lg search-form py-3 px-4 border-0 light-placeholder" type="text"
                    placeholder="Cari “Kota Surabaya” atau “Sidosermo”">
                {{-- <a class="btn bg-white pe-3 d-flex justify-content-center align-items-center" type="button"
                    id="button-addon2" style="border-radius: 0 100px 100px 0;">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25 16C25 16.2652 24.8946 16.5196 24.7071 16.7071C24.5196 16.8946 24.2652 17 24 17H8C7.73478 17 7.48043 16.8946 7.29289 16.7071C7.10536 16.5196 7 16.2652 7 16C7 15.7348 7.10536 15.4804 7.29289 15.2929C7.48043 15.1054 7.73478 15 8 15H24C24.2652 15 24.5196 15.1054 24.7071 15.2929C24.8946 15.4804 25 15.7348 25 16ZM29 9H3C2.73478 9 2.48043 9.10536 2.29289 9.29289C2.10536 9.48043 2 9.73478 2 10C2 10.2652 2.10536 10.5196 2.29289 10.7071C2.48043 10.8946 2.73478 11 3 11H29C29.2652 11 29.5196 10.8946 29.7071 10.7071C29.8946 10.5196 30 10.2652 30 10C30 9.73478 29.8946 9.48043 29.7071 9.29289C29.5196 9.10536 29.2652 9 29 9ZM19 21H13C12.7348 21 12.4804 21.1054 12.2929 21.2929C12.1054 21.4804 12 21.7348 12 22C12 22.2652 12.1054 22.5196 12.2929 22.7071C12.4804 22.8946 12.7348 23 13 23H19C19.2652 23 19.5196 22.8946 19.7071 22.7071C19.8946 22.5196 20 22.2652 20 22C20 21.7348 19.8946 21.4804 19.7071 21.2929C19.5196 21.1054 19.2652 21 19 21Z"
                            fill="#343330" />
                    </svg>
                </a> --}}
            </div>

            <div class="category-group border border-2 border-black p-2 w-100 d-flex justify-content-around align-items-center text-center"
                style="border-radius: 70px; margin: 6rem 0;">
                <button class="btn-category active">Surabaya</button>
                <button class="btn-category">Jakarta</button>
                <button class="btn-category">Bandung</button>
                <button class="btn-category">Denpasar</button>
            </div>

            <div style="margin-bottom: 10rem">
                <h4 class="fw-bold text-danger mb-3" style="letter-spacing: .35rem;">
                    MARKAS
                </h4>
                <h2 class="header mb-4">{{ strtoupper("{$building->sublocation}, {$building->location}") }}</h2>

                <h5 class="m-0" style="color: #5A5A5A">{{ $building->full_address }}</h5>
            </div>

            <div class="row gx-4">
                <div class="col-8">
                    <img class="rounded w-100" src="{{ asset("assets/images/buildings/{$building->photos[0]}") }}"
                        alt="{{ $building->photos[0] }}">
                </div>
                <div class="col-4 d-flex justify-content-between align-items-center flex-column">
                    <img class="rounded w-100" style="height: 240px"
                        src="{{ asset("assets/images/buildings/{$building->photos[1]}") }}"
                        alt="{{ $building->photos[1] }}">
                    <img class="rounded w-100" style="height: 240px"
                        src="{{ asset("assets/images/buildings/{$building->photos[2]}") }}"
                        alt="{{ $building->photos[2] }}">
                    <div class="rounded w-100 border border-2 bg-transparent more-photos text-center border-black">
                        +{{ count($building->photos) - 3 }} Foto</div>
                </div>
            </div>

            <div class="building-detail d-flex align-items-center">
                <button class="building-item border border-black border-2 bg-transparent">Fasilitas Gedung</button>
                <button class="building-item border border-black border-2 bg-transparent">Detail Lokasi </button>
                <button class="building-item border border-black border-2 bg-transparent">Pilih Tipe Ruangan</button>
                <button class="building-item border border-black border-2 bg-transparent">Peraturan</button>
                <button class="building-item border border-black border-2 bg-transparent">FAQ</button>
                <button class="building-item border border-black border-2 bg-transparent">Testimoni</button>
            </div>

            <div class="facility-section" style="margin-bottom: 8rem;">
                <h2 class="section-title mb-5">Fasilitas Gedung</h2>
                <div class="row">
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Tempat Parkir</span>
                    </div>
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Rak Sepatu</span>
                    </div>
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Mini Kafe</span>
                    </div>
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Perpustakaan</span>
                    </div>
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Lounge</span>
                    </div>
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Petugas Teknisi</span>
                    </div>
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Air Conditioner</span>
                    </div>
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Toilet</span>
                    </div>
                    <div class="col-4 p-4" style="visibility: hidden">
                        <span class="facility-check">✅ Toilet</span>
                    </div>
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Dispenser Air</span>
                    </div>
                    <div class="col-4 p-4">
                        <span class="facility-check">✅ Internet</span>
                    </div>
                </div>
            </div>

            <div class="Location-section" style="margin-bottom: 8rem">
                <h2 class="section-title mb-5">Detail Lokasi</h2>
                <div class="card p-4 border border-1 border-black shadow-none" style="border-radius: 30px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 map">
                                <img src="{{ asset('assets/images/map/map.png') }}" alt="map.png">
                            </div>
                            <div class="col-6">
                                <h3 class="section-subtitle mb-3">
                                    Detail Alamat
                                </h3>
                                <p class="description-text">{{ $building->full_address }}</p>
                                <hr class="divider">
                                <h3 class="section-subtitle mb-3">
                                    Tempat Terdekat
                                </h3>
                                @foreach ($building->nearestPlaces as $item)
                                    <div class="d-flex name-places justify-content-between align-items-center">
                                        <b class="place-name">{{ $item->name }}</b>
                                        <span class="description-text">{{ $item->estimed_minute_to_arrive }} Menit</span>
                                    </div>
                                    <p class="description-text">{{ $item->description }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-section" style="margin-bottom: 20rem">
                <h2 class="section-title mb-5">Tipe Ruangan</h2>
                @foreach ($building->rooms as $item)
                    <div class="card p-3 border border-1 border-black shadow-none mb-5" style="border-radius: 30px">
                        <div class="card-body">
                            <h4 class="place-name mb-4">{{ strtoupper($item->type) }}</h4>
                            <div class="row">
                                <div class="col-6">
                                    <img class="w-100" src="{{ asset("assets/images/rooms/$item->thumbnail") }}"
                                        alt="{{ $item->thumbnail }}">
                                </div>
                                <div class="col-6">
                                    <h3 class="section-subtitle mb-3 primary-color" style="letter-spacing: .3rem">
                                        {{ strtoupper($item->name) }}
                                    </h3>
                                    <p class="description-text mb-3">{{ $item->description }}</p>
                                    <p class="primary-color">Fasilitas:</p>
                                    <ul class="facility-ul">
                                        @foreach ($item->facilities as $facility)
                                            <li>{{ $facility }}</li>
                                        @endforeach
                                    </ul>
                                <p class="primary-color">Kapasitas Maksimal: {{$item->max_person}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="row gy-5">
                @foreach ($events as $item)
                    <div class="col-4">
                        <img src="{{asset("assets/images/events/flyer/$item->thumbnail")}}" alt="{{$item->thumbnail}}">
                    </div>
                @endforeach
            </div> --}}

            {{-- <div class="booking-hero">
                <h2 class="mb-5 header text-center primary-color">MARI BERKOLABORASI</h2>
                <button class="border-0 btn-booking d-block mx-auto" style="border-radius: 100px">BOOKING</button>
            </div> --}}


        </div>
    </div>
    {{-- end header section --}}
@endpush

@push('post-script')
    <script>
        $(document).ready(function() {
            $(".btn-category").click(function(e) {
                e.preventDefault();
                $(this).toggleClass('active');

                $(this).siblings().removeClass('active');

            });
        });
    </script>
@endpush
