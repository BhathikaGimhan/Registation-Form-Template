<style>
    #navbar{
        background-color:#2a3144;
    }
    code{
        position: relative;
        right: -45px;
        text-align: right;
        top: -35px;
    }
    #navHead{
        position: relative;
        left: -20px;
    }
</style>
<div class="container-fluid position-relative d-flex p-0">
    <div id="navbar" class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark" >
            <div class="navbar-nav w-100">
                <a href="{{ url('/') }}" class="navbar-brand mx-4 mb-3">
                    <div class="row">
                        <h3 id="navHead" class="text-primary">CompleteCoachLtd</h3>

                    </div>
                </a>
                <a href="{{ url('/') }}" class="nav-item nav-link active">
                    <i class="fa fa-home me-2"></i>Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link"><i class="fa fa-asterisk me-2"></i> About</a>

                <a href="{{ url('/course') }}" class="nav-item nav-link"><i class="fa fa-book-reader me-2"></i> Courses</a>
            </div>
        </nav>
    </div>
