<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat);

html, body{
  height: 100%;
  width: 100%;
  font-weight: 800;

}
#bg{
    z-index: 9999;
    color: white;
    jsutify-content: center;
    align-items: center;
    margin: 0;
    text-shadow: 8px 8px 10px #0000008c;
    background-color: #343a40;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%239C92AC' fill-opacity='0.25' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"), linear-gradient(to right top, #343a40, #2b2c31, #211f22, #151314, #000000);

}
body{
  font-family: Arial;

}

svg {
    display: block;
    font: 5.5em 'Montserrat';
    width: 100%;
    height: 300px;
    margin: 0 auto;
}

.text-copy {
    fill: none;
    stroke: white;
    stroke-dasharray: 6% 29%;
    stroke-width: 5px;
    stroke-dashoffset: 0%;
    animation: stroke-offset 4.5s infinite linear;
}

.text-copy:nth-child(1){
  stroke: #ffae00;
  animation-delay: -1;
}

.text-copy:nth-child(2){
  stroke: #fbff00;
  animation-delay: -2s;
}

.text-copy:nth-child(3){
  stroke: #ffd900;
  animation-delay: -3s;
}

.text-copy:nth-child(4){
  stroke: #dfa400;
  animation-delay: -4s;
}

.text-copy:nth-child(5){
  stroke: #fbff00;
  animation-delay: -5s;
}


@keyframes stroke-offset{
  100% {stroke-dashoffset: -35%;}
}
h4{
    position: relative;
    top: 20px;
    padding-bottom: 20px
}
#divBg{

    /* background-color: rgba(0, 0, 0, 0.314); */
}
#divBgA{
    background-image: url('img/imgs.jpg');
    background-repeat: no-repeat;
background-size: 100% 100%;

    /* z-index: 99999999; */
}
.text{
    text-align: center;
    width: 60%;
    position: relative;
    align-items: center;
    margin: auto;
}
#h5, #h2{
    color: #ffffff;

}
.dark{
    background-color: #00000070;
    position: relative;
    padding-top: 10px;
    padding-bottom: 20px;
    border-radius: 20px;
}

    </style>
</head>
    <body class="antialiased" id="bg">
        @include('tool.sideNav')
        @include('tool.navBar')
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">

        <div class="col-sm-12 col-xl-12">
            <div id="divBgA" class="bg-secondary text-center rounded p-4">
                <div class="dark">
                    <svg viewBox="0 0 1960 200">
                        <symbol id="s-text">
                            <text text-anchor="middle" x="50%" y="80%">Complete Coach Ltd </text>
                            <text text-anchor="middle" x="50.3%" y="80%">Complete Coach Ltd </text>

                        </symbol>

                        <g class = "g-ants">
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                        </g>
                    </svg>
                    <div class="text">
                        <h2 id="h2" class="mb-1">Discover a limitless world of learning</h2><br>
                        <h5 id="h5" class="mb-0">Review important concepts and explore new topics—the options are endless with CompleteCoach Ltd Join for free today and browse 30,00+ courses and lesson plans and more.</h5><br>
                    </div>
                </div>
            </div>
        </div>
            </div></div>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h3 class="mb-0">Register with us <i class="fas fa-hand-point-right    "></i></h3>
                        </div>
                        <div class="nav-link">
                            <a href="{{ url('/teacher') }}">
                                <i class="fas fa-chalkboard-teacher" style="font-size:100px;"></i>
                                <h4>Teachers registation Forme</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h3 class="mb-0">Register with us <i class="fas fa-hand-point-right    "></i></h3>
                        </div>
                        <div class="nav-link">
                            <a href="{{ url('/student') }}">
                                <i class="fas fa-user-graduate" style="font-size:100px;"></i>
                                <h4>Students registation Forme</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript Libraries -->
    <script src="../../code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../../cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>
</html>
