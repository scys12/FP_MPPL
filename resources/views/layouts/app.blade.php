<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Square - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/css/style.css')}}">
  </head>
    <body>
        @auth
            @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('superadmin'))
                @include('layouts.useradmin')
            @elseif(Auth::user()->hasRole('teacher'))
                @include('layouts.userteacher')
            @else
                @include('layouts.userlayout')
            @endif
        @endauth
        @guest
            @include('layouts.userlayout')
        @endguest    
        <footer class="ftco-footer ftco-section">
            <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Primalangga</h2>
                    <p>Website kursus terbaik di Indonesia.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                </div>
                <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
                </div>
                <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Products</h2>
                    <ul class="list-unstyled">
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Belajar Mandirit</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Kelas Private</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Freemalangga</a></li>
                    </ul>
                </div>
                </div>          
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
    
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
            </div>
        </footer>
        
        
    
        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    
    
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/aos.js')}}"></script>
        <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('js/scrollax.min.js')}}"></script>        
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
