@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <br>
    <div class="jumbotron bg-dark" style="margin-left: 20%; margin-top: 5%;">
        <div style="font-family: arial;" class="text-center">
            <h1 class="display-5 text-light" style=" font-family: fantasy; font-weight: bold;"><u>Manga Tu</u></h1>
            <h5 class="display-5" style="font-family: arial; font-weight: bold; margin: 0px; color: white;">Tempat Baca Manga GRATIS!</h5>
        </div>
    </div>
<br><br>
    <div class="card bg-dark text-white" style="width: 700px; height: 200px; margin-left: 27%;">
        <div class="card-img-overlay">
            <h2 class="card-title"><u>Naruto</u></h2>
            <p class="card-text"> Dikisahkan Naruto kecil merupakan seorang anak yatim piatu yang dikucilkan dan tidak memiliki teman karena terdapat rubah berekor sembilan yang disegel di tubuhnya. Ia sering berbuat onar di desanya agar diperhatikan banyak orang. Namun, pemikirannya berubah ketika ia beranjak dewasa.</p>
            <h5 class="display-5 text-light" style=" font-family: timesnewroman;"><u>Baca Selengkapnya</u></h5>
        </div>
    </div>

    <div class="card bg-dark text-white" style="width: 700px; height: 200px; margin-left: 27%; margin-top: 20px;">
        <div class="card-img-overlay">
            <h2 class="card-title"><u>Jujutsu Kaisen</u></h2>
            <p class="card-text">Jujutsu Kaisen fokus menceritakan seorang siswa bernama Yuuji Itadori. Ia tergabung dalam klub ilmu gaib, namun suatu hari klub tersebut mendapatkan benda terkutuk yang disegel.</p>
            <h5 class="display-5 text-light" style=" font-family: timesnewroman;"><u>Baca Selengkapnya</u></h5>
        </div>
    </div>

    <div class="card bg-dark text-white" style="width: 700px; height: 200px; margin-left: 27%; margin-top: 20px;">
        <div class="card-img-overlay">
            <h2 class="card-title"><u>Shingeki no Kyojin</u></h2>
            <p class="card-text">Shingeki no Kyojin atau yang sering disebut dengan Attack on Titan berkisah tentang suatu zaman dimana umat manusia menghadapi ancaman kepunahan akibat serangan para Titan (manusia raksasa). Yang mengerikan adalah para Titan ini benar-benar sengaja mengincar manusia untuk “dimakannya”.</p>
            <h5 class="display-5 text-light" style=" font-family: timesnewroman;"><u>Baca Selengkapnya</u></h5>
        </div>
    </div>
@endsection

@section('js')
    <script>
        console.log('Helo')
    </script>
@endsection
