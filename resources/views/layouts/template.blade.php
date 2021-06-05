<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <title>Document</title>
       <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
              integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
              crossorigin="anonymous" />
       {!! htmlScriptTagJsApi() !!}
       <style>
              .collapse {
                     justify-content: flex-end;
              }

              .logo {
                     width: 100px;
                     height: 100%;
              }




              .navbar {
                     height: 92px;
              }

              .navbar-nav>li {
                     margin: 0 5px;
                     font-weight: 600;
              }

              .navbar-light .navbar-nav .nav-link {
                     color: rgba(0, 0, 0);
              }

              .navbar-light .navbar-nav .nav-link:hover {
                     color: rgba(0, 0, 0);
              }

              .dropdown-menu>a {
                     font-weight: 600;
              }

              .dropdown-menu>a:hover {
                     font-weight: 600;
              }

              .jumbotron .display-4 {
                     text-align: center;
                     font-size: 30px;
                     font-weight: 400;
                     margin-bottom: 20px;
              }

              .jumbotron .lead {
                     text-align: center;
                     font-size: 16px;
                     padding: 0 270px;
              }

              .jumbotron {
                     background-color: white;
              }

              .card {
                     text-align: center;
                     width: 100%;
                     border: none;
              }

              .card-img-top {
                     margin: 0 auto;
                     width: 40px;
                     height: 40px;
              }

              .img-bg {
                     background-color: #E0E7FF;
                     width: 80px;
                     height: 80px;
                     border-radius: 80px;
                     margin: 0 auto;
                     display: flex;
                     align-items: center;
                     justify-content: center;
              }

              .hr {
                     margin-top: 23px;
                     width: 5%;
                     border: 2px solid #6366F1;
                     border-radius: 5px;

              }

              .card-body .btn {
                     color: #6366F1;
              }

              .textarea {
                     display: flex;
                     align-items: center;
                     margin-bottom: 100px;
              }

              .textarea h2 {
                     font-size: 40px;
                     width: 400px;
                     font-weight: 400;
              }

              .textarea p {
                     font-size: 16px;
                     padding: 0 30px;
                     width: 80%;
              }

              .mt-200 {
                     margin-top: 200px;
              }

              .mt-100 {
                     margin-top: 100px;
              }

              .pt-200 {
                     padding-top: 200px !important;
              }
              .pt-100 {
                     padding-top: 100px !important;
              }

              .pb-100 {
                     padding-bottom: 100px !important;
              }

              .button button {
                     background-color: #4F46E5;
                     font-size: 18px;
              }

              .form .btn {
                     background-color: #4e46e5b9;
              }
              .form .btn:hover {
                     background-color: #4e46e5;
              }

              .containerSmall {
                     width: 60%;
                     margin-bottom: 100px;
              }


              .card-img-top2 {
                     width: 100%;
                     height: auto;
              }

              .bacc {
                     background-color: #F3F4F6;
              }

              .btncolor {
                     color: #6366F1;
              }

              .imgsize {
                     width: 80px;
                     height: 80px;
              }

              .img-bgsize {
                     width: 150px;
                     height: 150px;
              }

              .cardarea8 {
                     width: 90%;
                     margin-left: auto;
                     margin-right: auto;
              }
              .cardarea8 .card-text{
                     margin: 10px 0;
              }

              .card-deck .card {
                     padding: 0 !important;
              }

              .card-deck .card-body {
                     padding: 0 !important;
              }

              .icon .btn3 {
                     width: 20px;
                     height: 20px;
                     border-radius: 20px;
                     border: 2px solid gray;
              }

              .icon .btn3:nth-of-type(1) {
                     background-color: cornsilk;
              }

              .icon .btn3:nth-of-type(2) {
                     background-color: black;
              }

              .icon .btn3:nth-of-type(3) {
                     background-color: #6366F1;
              }
              .mapForm{
                     top: 20px;
                     right: 30px;
                     background-color: white;
                     padding: 30px;
                     border-radius: 10px;
              }
              #navbarNavDropdown .nav-item{
                     padding:5px 10px;
                     border-radius: 8px;
                     transition: all .5s;
              }
              #navbarNavDropdown .nav-item:hover{
                     background-color: #E5E7EB;
              }
              .sub-bar-img{
                     width: 30px;
                     height: 30px;
                     margin: 0 15px;
              }
              .sub-bar-area{
                     background-color: white;
                     width: 50px;
                     height: 50px;
                     border-radius: 50px;
              }

       </style>


       @yield('css')



</head>

<body>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container">
                     <a href="/">
                            <div class="logo"><img src="{{ asset('./IMG/logo.svg') }}" alt=""></div>
                     </a>
                     <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                   <li class="nav-item active">
                                          <a class="nav-link" href="/news">News
                                                 <span class="sr-only">(current)</span></a>
                                   </li>
                                   <li class="nav-item active">
                                          <a class="nav-link" href="/product">Product
                                                 <span class="sr-only">(current)</span></a>
                                   </li>
                                   <li class="nav-item active">
                                          <a class="nav-link" href="#">Portfolio
                                                 <span class="sr-only">(current)</span></a>
                                   </li>
                                   <li class="nav-item active">
                                          <a class="nav-link" href="#">About
                                                 <span class="sr-only">(current)</span></a>
                                   </li>
                                   <li class="nav-item active">
                                          <a class="nav-link" href="#">Contact
                                                 <span class="sr-only">(current)</span></a>
                                   </li>
                            </ul>
                     </div>
                     <div class="sub-bar d-flex">
                            <div class="m-1 sub-bar-area d-flex justify-content-center align-items-center">
                                   <img class="sub-bar-img" src="{{ asset('./IMG/e7bf.png') }}" alt="">
                            </div>
                            <div class="m-1 sub-bar-area d-flex justify-content-center align-items-center">
                                   <img class="sub-bar-img" src="{{ asset('./IMG/e77b.png') }}" alt="">
                            </div>
                     </div>
              </div>


       </nav>






       <main>
           @yield('main')
       </main>




       


        <!-- Footer -->
        <footer class="bg-light text-center text-lg-start">
            <!-- Grid container -->
            <div class="mt-5 p-4 pt-100 pb-100 bg-white">
                   <!--Grid row-->
                   <div class="row d-flex">
                          <!--Grid column-->
                          <div class="col-lg-3 col-md-12 mb-4 mb-md-0 text-left mr-auto ml-5">
                                 <img class="mr-2" src="{{ asset('./IMG/svgexport-19.svg') }}" alt="">
                                 <h5 class="text-uppercase d-inline">數位方塊</h5>
                                 <p class="mt-3 font-weight-light">
                                        Air plant banjo lyft occupy retro adaptogen indego
                                 </p>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-lg-2 col-md-6 mb-4 mb-md-0 text-left">
                                 <p class="text-uppercase mb-2 font-weight-light">CATEGORIES</p>

                                 <ul class="list-unstyled mb-0">
                                        <li>
                                               <a href="#!" class="text-dark">First Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Second Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Third Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Fourth Link</a>
                                        </li>
                                 </ul>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-lg-2 col-md-6 mb-4 mb-md-0 text-left">
                                 <p class="text-uppercase mb-2 font-weight-light">CATEGORIES</p>

                                 <ul class="list-unstyled">
                                        <li>
                                               <a href="#!" class="text-dark">First Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Second Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Third Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Fourth Link</a>
                                        </li>
                                 </ul>
                          </div>
                          <div class="col-lg-2 col-md-6 mb-4 mb-md-0 text-left">
                                 <p class="text-uppercase mb-2 font-weight-light">CATEGORIES</p>

                                 <ul class="list-unstyled">
                                        <li>
                                               <a href="#!" class="text-dark">First Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Second Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Third Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Fourth Link</a>
                                        </li>
                                 </ul>
                          </div>
                          <div class="col-lg-2 col-md-6 mb-4 mb-md-0 text-left">
                                 <p class="text-uppercase mb-2 font-weight-light">CATEGORIES</p>

                                 <ul class="list-unstyled">
                                        <li>
                                               <a href="#!" class="text-dark">First Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Second Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Third Link</a>
                                        </li>
                                        <li>
                                               <a href="#!" class="text-dark">Fourth Link</a>
                                        </li>
                                 </ul>
                          </div>
                          <!--Grid column-->
                   </div>
                   <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="Copyright p-3 d-flex" style="background-color:#F3F4F6">
                   <div class="text-center font-weight-light mr-auto">
                          © 2020 Tailblocks — @knyttneve
                   </div>
                   <img class="mx-2" src="{{ asset('./IMG/svgexport-14.svg') }}" alt="">
                   <img class="mx-2" src="{{ asset('./IMG/svgexport-15.svg') }}" alt="">
                   <img class="mx-2" src="{{ asset('./IMG/svgexport-22.svg') }}" alt="">
            </div>

            <!-- Copyright -->
     </footer>
     <!-- Footer -->





       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
              integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
              crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
              integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
              crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
              integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
              crossorigin="anonymous"></script>



        @yield('js')


</body>

</html>
