@extends('layouts.frontend')
<style>

/* home section styling */
.home{
    display: flex;
    background-color: black;
    height: 50vh;
    color: #fff;
    min-height: 500px;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Ubuntu', sans-serif;
}
.home .max-width{
  width: 100%;
  display: flex;
}
.home .max-width .row{
  margin-right: 0;
}
.home .home-content .text-1{
    margin-top: 30px;
    font-size: 27px;
    margin-left: -100px;
}
.home .home-content .text-2{
    font-size: 50px;
    font-weight: 600;
    margin-left: 0px;
}
.home .home-content .text-3{
    font-size: 40px;
    margin: 5px 0;
    margin-left: -50px;
}
.home .home-content .par{
    padding-left: 0px;
    padding-bottom: 25px;
    font-family: Arial, Helvetica, sans-serif;
    letter-spacing: 1.2px;
    line-height: 30px;
}
.home .home-content .text-3 span{
    color: rgb(57, 20, 220);
    font-weight: 500;
}
.home .home-content a{
    display: inline-block;
    background: rgb(57, 20, 220);
    color: #fff;
    font-size: 25px;
    padding: 12px 36px;
    margin-top: 20px;
    font-weight: 400;
    border-radius: 6px;
    border: 2px rgb(57, 20, 220);
    transition: all 0.3s ease;
}
.home .home-content a:hover{
    color: crimson;
    background: none;
}

.left img{
    width: 45%;
    position: absolute;
    left: 650px;
    top: 50px;
}
.left img{
   
    height: 400px;
    width: 400px;
    object-fit: cover;
    border-radius: 6px;
}

</style>
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12 mt-4 text-center">
        <div class="card card--body">
  <!-- home section start -->
 <!-- home section start -->
 <section class="home" id="home">
    <div class="max-width">
        <div class="home-content">
            <div class="text-1">Hello, my name is</div>
            <div class="text-2">Abdulrahman Adekeye</div>
            <div class="text-3">And I'm a <span class="typing">Web Developer</span></div>
            <p class="par">Lorem ipsun dolar sit amet consestetur adip <br> quiz nesciunt. Quos nulla vero consequantur, fugit<br> a quar totan ipsa 
                illum minus laudantium
            </p>
            <div class="column left">
                <img src="images/walex.jpg" alt="">
            </div>
            <a href="#">Hire me</a>
        </div>
    </div>
</section>
        </div>
    </div>
    </div>
</div>

@endsection