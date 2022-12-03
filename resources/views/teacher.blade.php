<!DOCTYPE html>
<html lang="en">
    @include('tool.sideNav')
@include('tool.navBar')

            <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12" id="myDIV1">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Teacher Registation Forme</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Name"
                            placeholder="Supun">
                        <label for="Name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Age"
                            placeholder="21">
                        <label for="Age">Age</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Address"
                            placeholder="****">
                        <label for="Address">Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="University"
                            placeholder="*****">
                        <label for="University">University</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Subjects"
                            placeholder="Technology">
                        <label for="Subjects">Subjects</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Phone"
                            placeholder="0776685719">
                        <label for="Phone">Phone Number</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="Email"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="Work"
                            aria-label="Floating label select example">
                            <option value="" selected>Open this select menu</option>
                            <option value="Part time">Part time</option>
                            <option value="Full time">Full time</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                    </div>
                    <div class="form-floating mb-3">
                        @include('tool.date')
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="About" style="height: 150px;"></textarea>
                        <label for="About">About</label>
                    </div> <br>
                    <button type="submit" class="btn btn-primary" onclick="showForme()">Submit</button>
                </div>
            </div>


            <div class="col-sm-12 col-xl-6" id="myDIV2" style="visibility: hidden;">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Teacher Registation Show</h6>
                    <div class="form-floating mb-3">
                        <p>Name: <b><span id="display_Name"></span></b></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p>Age: <b><span id="display_Age"></span></b></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p>Address: <b><span id="display_Address"></span></b></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p>University: <b><span id="display_University"></span></b></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p>Subjects: <b><span id="display_Subjects"></span></b></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p>Phone: <b><span id="display_Phone"></span></b></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p>Email: <b><span id="display_Email"></span></b></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p>Work: <b><span id="display_Work"></span></b></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p>Date: <b><span id="display_Date"></span></b></p>
                    </div>
                    <div class="form-floating">
                        <p>About: <b><span id="display_About"></span></b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="../../code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../../cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script type="text/JavaScript">
        function showForme(){
            const element = document.getElementById("myDIV1");
            // const elements = document.getElementById("myDIV2");
            if (element.className == "col-sm-12 col-xl-12") {
                element.className = "col-sm-12 col-xl-6";
                document.getElementById("myDIV2").style.visibility = "visible";
            }
            var name = document.getElementById("Name").value;
            display_Name.innerHTML= name;

            var age = document.getElementById("Age").value;
            display_Age.innerHTML= age;

            var Address = document.getElementById("Address").value;
            display_Address.innerHTML= Address;

            var University = document.getElementById("University").value;
            display_University.innerHTML= University;

            var Subjects = document.getElementById("Subjects").value;
            display_Subjects.innerHTML= Subjects;

            var Phone = document.getElementById("Phone").value;
            display_Phone.innerHTML= Phone;

            var Email = document.getElementById("Email").value;
            display_Email.innerHTML= Email;

            var Work = document.getElementById("Work").value;
            display_Work.innerHTML= Work;

            var Date = document.getElementById("selectedValues").value;
            display_Date.innerHTML= Date;

            var About = document.getElementById("About").value;
            display_About.innerHTML= About;
        }
    </script>
    <script src="js/main.js"></script>
</body>
</html>
