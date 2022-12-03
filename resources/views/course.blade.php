<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    <style>
        #Tbody{
            color: rgb(0, 89, 255);
        }
    </style>
</head>
<body>
    @include('tool.sideNav')
    @include('tool.navBar')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
        <div id="divBgA" class="bg-secondary rounded h-100 p-4">
            {{-- <div id="divBg" class="owl-carousel testimonial-carousel"> --}}
                <div class="testimonial-item text-center"><br>
                    <img class="img-fluid rounded-circle mx-auto mb-4" src="img/image.jpg" style="width: 200px; height: 200px;">
                    <h2 class="mb-1">Courses</h2>
                    <p>Complete Coach Ltd </p>
                    <div class="text">
                        <h5 class="mb-0"> </h5><br>
                        <table class="table table-hover table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Course</th>
                                    <th>Time</th>
                                    <th>Teacher</th>
                                </tr>
                                </thead>
                                <tbody id="Tbody">
                                    <tr>
                                        <td scope="row">ICT</td>
                                        <td>10.30 am</td>
                                        <td>Max</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">English</td>
                                        <td>1.30 pm</td>
                                        <td>Kevin</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Sinhala</td>
                                        <td>8.00 am</td>
                                        <td>Ben</td>
                                    </tr>
                                </tbody>
                        </table>

                    </div>
                    </div>
            {{-- </div> --}}
        </div>
    </div>
        </div></div>
</div>
</div>

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
