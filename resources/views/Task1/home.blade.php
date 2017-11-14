@extends('Task1.layout')

@section('content')
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/img/batagor.jpg" alt="First Slide">
                <div class="carousel-caption">
                    Batagor
                </div>
                </div>
            <div class="item">
                <img src="/img/cilok.jpg" alt="Second Slide">
                <div class="carousel-caption">
                    Cilok
                </div>
            </div>
            <div class="item">
                <img src="/img/tahu.jpg" alt="Third Slide">
                <div class="carousel-caption">
                    Tahu Bulat
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

<br>
<div class="col-sm-4">
<p>Hello saya Riku dan saya saat ini akan lulus dari kuliah, salam kenal ya. Berikut contoh dari hasil foto yang saya ambil :)</p>
</div>

<div class="col-sm-4">
<p></p>
</div>

<div class="col-sm-4">
<p>Facebook : riku@mail.com<br>Twitter : riku@mail.com<br>Telepon : 022-232392<br>Alamat : Jl. Harapan Bangsa no. 23, Bandung, Indonesia</p>
</div>

@endsection