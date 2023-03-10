@extends('layouts.no-header-footer')

@section('content')
<style>
* {
  box-sizing: border-box;
}

html, body {
  height: 100%;
  padding: 0;
  width: 100%;
  margin: 0;
  font-family: "Lato", sans-serif;
}

body.error404 .wrap {
  padding: 0;
  max-width: 100%;
  width: 100%;
  overflow: hidden;
  height: 100%;
}

.page-404 {
  position: relative;
  height: 100vh;
  overflow: hidden;
  text-align: center;
  background: #050d0e;
}

.page-404 h1 {
  text-align: center;
  padding: 0;
  margin: 0;
  color: #fff;
  font-size: 70px;
  line-height: 100%;
  font-weight: 200;
}

@media (min-width: 720px) {
  .page-404 h1 {
    font-size: 200px;
  }
}

.page-404 h2 {
  color: rgba(255, 255, 255, 0.7);
  font-size: 48px;
  margin: 0;
  padding: 0;
  font-weight: 300;
}

.page-404 a {
  color: #4dbea4;
  text-transform: uppercase;
  text-decoration: none;
  font-weight: bold;
  font-size: 17px;
  margin-top: 40px;
  border-bottom: 0;
  display: inline-block;
}

.page-404 a:hover {
  text-decoration: underline !important;
}

.page-404 .text {
  top: 50%;
  position: absolute;
  left: 0;
  width: 100%;
  margin-top: -200px;
  z-index: 2000;
}

.page-404 .circle {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -250px;
  margin-left: -250px;
  height: 500px;
  width: 500px;
  background: rgba(18, 48, 52, 0.13);
  border-radius: 50%;
}

.page-404 .circle::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -350px;
  margin-left: -350px;
  height: 700px;
  width: 700px;
  background: rgba(18, 48, 52, 0.13);
  border-radius: 50%;
}

.page-404 .circle::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -500px;
  margin-left: -500px;
  height: 1000px;
  width: 1000px;
  background: rgba(18, 48, 52, 0.13);
  border-radius: 50%;
}

.page-404 .star {
  position: absolute;
  background: #9a9a9a;
  border-radius: 20px;
  display: block;
}

.page-404 .star-big {
  width: 16px;
  height: 16px;
}

.page-404 .star-med {
  width: 8px;
  height: 8px;
}

.page-404 .star-small {
  width: 4px;
  height: 4px;
  -webkit-animation: flicker 4s 1s infinite linear;
  animation: flicker 4s 1s infinite linear;
}

.page-404 #star1 {
  top: 20%;
  left: 30%;
}

.page-404 #star2 {
  top: 80%;
  left: 78%;
  -webkit-animation: flicker 2s 2s infinite linear;
  animation: flicker 2s 2s infinite linear;
}

.page-404 #star3 {
  top: 60%;
  left: 38%;
}

.page-404 #star4 {
  top: 26%;
  left: 78%;
  -webkit-animation: flicker 3s 1.5s infinite linear;
  animation: flicker 3s 1.5s infinite linear;
}

.page-404 #star5 {
  top: 42%;
  left: 89%;
}

.page-404 #star6 {
  top: 70%;
  left: 22%;
  -webkit-animation: flicker 5s 3.7s infinite linear;
  animation: flicker 5s 3.7s infinite linear;
}

.page-404 #star7 {
  top: 90%;
  left: 52%;
}

.page-404 #star8 {
  top: 50%;
  left: 22%;
  -webkit-animation: flicker 1s 1.2s infinite linear;
  animation: flicker 1s 1.2s infinite linear;
}

.page-404 #star9 {
  top: 30%;
  left: 32%;
}

.page-404 #star10 {
  top: 60%;
  left: 62%;
  -webkit-animation: flicker 6s 4.6s infinite linear;
  animation: flicker 6s 4.6s infinite linear;
}

.page-404 #star11 {
  top: 60%;
  left: 62%;
  -webkit-animation: flicker 4s 1s infinite linear;
  animation: flicker 4s 1s infinite linear;
}

.page-404 #star12 {
  top: 60%;
  left: 62%;
  -webkit-animation: flicker 3s 5s infinite linear;
  animation: flicker 3s 5s infinite linear;
}

.page-404 #star13 {
  top: 2%;
  left: 5%;
}

.page-404 #star14 {
  top: 88%;
  left: 12%;
}

.page-404 #star15 {
  top: 90%;
  left: 2%;
}

.page-404 .container-wrapper {
  width: 100%;
  height: 100%;
  -webkit-animation: rotate 125s infinite linear;
  animation: rotate 125s infinite linear;
}

.page-404 .container-wrapper img {
  -webkit-animation: rotate 55s infinite;
  animation: rotate 55s infinite;
  position: relative;
}

.page-404 .superfresh-outer {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0%;
  transform: rotate(80deg);
}

.page-404 .superfresh-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0%;
  transform-origin: 50% 50%;
  -webkit-animation: rotate 25s infinite linear;
  animation: rotate 25s infinite linear;
}

.page-404 .superfresh-wrapper img {
  position: relative;
  margin-top: 100px;
  -webkit-animation:
    rotate 25s infinite ease-in-out,
    scale 10s infinite ease-in-out;
  animation:
    rotate 25s infinite ease-in-out,
    scale 10s infinite ease-in-out;
}

.page-404 .planet1-wrapper {
  width: 140%;
  height: 140%;
  position: absolute;
  top: -20%;
  left: -20%;
  transform-origin: 50% 50%;
  -webkit-animation: rotate 15s 3s infinite linear;
  animation: rotate 15s 3s infinite linear;
}

.page-404 .planet1-wrapper img {
  position: relative;
  margin-top: -30px;
  -webkit-animation:
    rotate 25s infinite ease-in-out,
    scale 10s infinite ease-in-out;
  animation:
    rotate 25s infinite ease-in-out,
    scale 10s infinite ease-in-out;
}

.page-404 .planet2-wrapper {
  width: 140%;
  height: 140%;
  position: absolute;
  top: -20%;
  left: -20%;
  transform-origin: 50% 50%;
  -webkit-animation: rotate 25s 1s infinite linear;
  animation: rotate 25s 1s infinite linear;
}

.page-404 .planet2-wrapper img {
  position: relative;
  margin-top: 50px;
  -webkit-animation: rotate 7s 0s infinite linear;
  animation: rotate 7s 0s infinite linear;
}

.page-404 .planet3-outer {
  width: 180%;
  height: 180%;
  position: absolute;
  top: -40%;
  left: -40%;
  transform: rotate(270deg);
}

.page-404 .planet3-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: -0%;
  left: 0%;
  transform-origin: 50% 50%;
  -webkit-animation: rotate 25s 0s infinite linear;
  animation: rotate 25s 0s infinite linear;
}

.page-404 .planet3-wrapper img {
  position: relative;
  margin-top: 0;
  -webkit-animation: rotate 12s 0s infinite linear;
  animation: rotate 12s 0s infinite linear;
}

.page-404 .container2-outer {
  width: 120%;
  height: 120%;
  position: absolute;
  top: -10%;
  left: -10%;
  transform: rotate(170deg);
}

.page-404 .container2-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: -0%;
  left: 0%;
  transform-origin: 50% 50%;
  -webkit-animation: rotate 40s 0s infinite linear;
  animation: rotate 40s 0s infinite linear;
}

.page-404 .container2-wrapper img {
  position: relative;
  margin-top: 0;
  -webkit-animation: rotate 7s 0s infinite linear;
  animation: rotate 7s 0s infinite linear;
}

/** Animations */
@keyframes scale {
  0% {
    transform: scale(1);
  }

  50% {
    transform: scale(0.6);
  }

  100% {
    transform: scale(1);
  }
}

@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes flicker {
  0% {
    background: #9a9a9a;
    transform: scale(1);
  }

  25% {
    background: white;
    transform: scale(0.8);
  }

  50% {
    transform: scale(0.5);
    background: white;
  }

  75% {
    background: #9a9a9a;
    transform: scale(1);
  }
}
</style>
<div class="page-404">
  <div class="circle"></div>
  <div class="text">
    <h1>404</h1>
    <h2>Something went wrong</h2><a href="{{ site_url() }}">go to homepage</a>
    </div>
    <div id="star1" class="star star-big"></div>
    <div id="star2" class="star star-med"></div>
    <div id="star3" class="star star-small"></div>
    <div id="star4" class="star star-big"></div>
    <div id="star5" class="star star-med"></div>
    <div id="star6" class="star star-small"></div>
    <div id="star7" class="star star-med"></div>
    <div id="star8" class="star star-small"></div>
    <div id="star9" class="star star-med"></div>
    <div id="star10" class="star star-small"></div>
    <div id="star11" class="star star-small"></div>
    <div id="star12" class="star star-small"></div>
    <div id="star13" class="star star-small"></div>
    <div id="star14" class="star star-small"></div>
    <div id="star15" class="star star-small"></div>
    <div class="container-wrapper"><img id="container1" src="@asset('images/404/container.png')"></div>
    <div class="superfresh-outer">
      <div class="superfresh-wrapper"><img id="superfresh" src="@asset('images/404/superfresh.png')"></div>
    </div>
    <div class="planet1-wrapper"><img id="planet1" src="@asset('images/404/planet1.png')"></div>
    <div class="planet2-wrapper"><img id="planet1" src="@asset('images/404/planet2.png')"></div>
    <div class="planet3-outer">
      <div class="planet3-wrapper"><img id="planet1" src="@asset('images/404/planet3.png')"></div>
    </div>
    <div class="container2-outer">
      <div class="container2-wrapper"><img id="planet1" src="@asset('images/404/container2.png')"></div>
    </div>
  </div>
@endsection
