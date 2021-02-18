<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Selamat Datang</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
</head>

<body style="background:rgb(0, 132, 255)">

    <div style="background:rgb(255, 255, 255)" class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"
        fixed-top>
        <h3>MATEMATIKA SMK WIKRAMA</h3>
    </div>
    <div class="container" style="margin-top: 50px; margin-bottom:50px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <p style="text-align:justify;"><img src="{{ asset('assets/img/animasi_matematika.jpg') }}"
                                class="img-fluid" alt="" style="width: 500px;height:325px;float:left;">
                            <h2 style="color: cornflowerblue;margin-bottom:15px">Apa itu Matematika ?</h2>
                            <h6 style="line-height: 1.5">Secara etimologi, matematika berasal dari bahasa Yunani Kuno
                                (Ancient Greek) yaitu máthēma yang berarti pengetahuan, ilmu pengetahuan, dan belajar.
                                Matematika adalah ilmu pengetahuan tentang kuantitas, struktur, ruang, dan perubahan.
                            </h6>
                            <h6 style="line-height: 1.5">Disini kita bisa belajar 15 Materi Matematika yang tertera
                                dibawah. Silahkan melakukan pembelajaran ataupun mengerjakan soal, dengan mengklik materi
                                yang telah tersedia dibawah ini...</h6>
                        </p>
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 50px;">
            <section class="section">
                <div class="section-body">
                    <div class="row">
                    @foreach( $materis as $materi)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                            <?php
                                $logo = array("a"=>"fa fa-superscript text-white",
                                                "b"=>"far fa-chart-bar text-white",
                                                "c"=>"fas fa-square-root-alt text-white",
                                                "d"=>"fas fa-sort-numeric-up",
                                                "e"=>"fas fa-arrows-alt-h text-white",
                                                "f"=>"fas fa-chart-line text-white",
                                                "g"=>"fas fa-ruler-combined text-white",
                                                "h"=>"fas fa-shapes text-white",
                                                "i"=>"fab fa-accusoft text-white",
                                                "j"=>"fas fa-adjust text-white",
                                                "k"=>"fas fa-dice-five text-white",
                                                "l"=>"fas fa-chart-pie text-white",
                                                "m"=>"fas fa-infinity text-white",
                                                "n"=>"fas fa-calculator text-white",
                                                "o"=>"fab fa-figma text-white");

                                shuffle($logo);
                                $logos = $logo[0];
                            ?> 
                            <?php
                                $warna = array("a"=>"success",
                                                "b" => "warning",
                                                "c" => "danger",
                                                "d" => "info");
                                shuffle($warna);
                                $warnas = $warna[0];
                            ?>
                                <div class="card-icon bg-{{$warnas}}">
                                    <i class="{{$logos}}" style="font-size: 2rem;"></i>
                                </div>
                                <div class="card-wrap mx-auto">
                                    <div class="card-header">
                                        <a href="{{ url('/materi/'.$materi->id) }}">
                                            <h4>{{ $materi->title }}</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div> 
    
    <!-- Copyright -->
    <footer style="bottom:0;">
        <div style="background:rgb(255, 255, 255)" class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-dark" href="#">RPL WIKRAMA</a>
        </div>
    </footer>
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>