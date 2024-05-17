@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" type="css" href="/public/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <div class="col-md-12 mb-4">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ url('img/home3.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Berbagai Varian Roti</h5>
                            <p>Setiap roti memiliki karakteristik yang unik, mulai dari rasa yang lezat, tekstur yang
                                lembut, aroma yang menggoda, hingga tampilan yang menggiurkan. </p>
                            <p><a href="#" class="btn  mt-3">Selengkapnya</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('img/home6.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Donat Lucu dan Lezat</h5>
                            <p>Manis bukan hanya ditampilan tapi hingga ke gigitan terakhir.</p>
                            <p><a href="#" class="btn  mt-3">Selengkapnya</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('img/home7.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Aneka Jajanan Tradisional</h5>
                            <p>Cita rasa khas Indonesia yang kaya akan rempah-rempah.</p>
                            <p><a href="#" class="btn  mt-3">Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    {{-- <span class="visually-hidden">Previous</span> --}}
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    {{-- <span class="visually-hidden">Next</span> --}}
                </button>
            </div>
            <section id="about" class="about section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="" class="img-fluid">

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                            <div class="about-text">
                                <h2>Selamat datang di Bund's Bakery, sumber kelezatan bakery terbaik di Madura!</h2>
                                
                                <p> Kami  menyajikan berbagai pilihan produk bakery yang lezat dan berkualitas tinggi, mulai dari roti segar, kue-kue istimewa, hingga pastry yang menggoda selera. </p>

                                <p> Namun, perlu diperhatikan bahwa saat ini kami hanya melayani pembelian untuk daerah Madura. Dengan penuh antusiasme, kami siap membawa kelezatan kami langsung ke rumah Anda di Madura. Dengan kualitas yang tak tertandingi dan cita rasa yang memukau, setiap produk bakery kami akan memberikan pengalaman tak terlupakan bagi Anda dan keluarga.
                                    
                                    Kunjungi toko fisik kami di Madura dan temukan berbagai pilihan bakery istimewa kami. Jadikan momen istimewa dan acara spesial Anda lebih berkesan dengan kelezatan dari Bund's Bakery.</p>
                                {{-- <p><a href="#" class="btn btn-warning mt-3">Selengkapnya</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="services ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center pb-5">
                                <h2>Rasa Cinta Untukmu</h2>
                                <p>Kami selalu mengutamakan kualitas dan rasa disetiap gigitannya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="card text-white text-center pb-2" id="card1">
                                <div class="card-body">
                                    <img src="img/konten.jpg" alt="" class="img-fluid1">
                                    <h3 class="card-title">Bahan Premium</h3>
                                    <p class="lead">Adonan dibuat dengan menggunakan bahan premium, memberikan hasil luar biasa dalam setiap gigitannya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="card text-white text-center pb-2" id="card1">
                                <div class="card-body">
                                    <img src="img/konten3.jpg" alt="" class="img-fluid1">
                                    <h3 class="card-title">Proses</h3>
                                    <p class="lead">Dipanggang menggunakan oven dengan tingkat kepanasan yang pas, sehingga matang merata.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="card text-white text-center pb-2" id="card1">
                                <div class="card-body">
                                    <img src="img/konten5.jpg" alt="" class="img-fluid1">
                                    <h3 class="card-title">Produk Berkualitas</h3>
                                    <p class="lead">Disetiap suapnya terdapat rasa dan tekstur yang luar biasa, memberikan pengalaman yang tak terlupakan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/c6d8f06459.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    </div>
@endsection
