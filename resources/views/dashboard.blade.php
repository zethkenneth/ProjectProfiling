@extends('layouts.admin')

@section('content')

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-dark" >

        <div class="container-fluid">

            <!--offcanvas trigger-->
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
            </button>
            <!--offcanvas trigger-->

            <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">Computer Service Division</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="d-flex ms-auto navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                          
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                           
                            <li><a class="dropdown-item" href="/logout">Logout</a>
                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </nav>
    <!--navbar-->

    
    <div class="mt-5 bg-light container-fluid rounded">
        <nav aria-label="breadcrumb" class="">
            <!-- <ol class="breadcrumb ">
                <li class="breadcrumb-item active p-2" aria-current="page">Dashboard</li>
            </ol> -->
        </nav>
    </div>

    

    <h2 class="col-md-12 fw-bold"></h2>
    <div class="cardbox">
        <div class="card">
            <div>
                <div class="numbers">1,023 </div>
                <div class="cardname">Total Employees </div>
               
            </div>

            <div class="iconbox">
          
            </div>

        </div>

        <div class="card">
            <div>
                <div class="numbers">1,023</div>
                <div class="cardname">Total Project</div>

            </div>

            <div class="iconbox">
               <i></i>
            </div>

        </div>
        <div class="card">
            <div>
                <div class="numbers">1,023</div>
                <div class="cardname">Ongoing Projects</div>

            </div>

            <div class="iconbox">
               <i></i>
            </div>

        </div>
        <div class="card">
            <div>
                <div class="numbers">1,023</div>
                <div class="cardname">Completed Projects</div>


            </div>

            <div class="iconbox">
               <i></i>
            </div>

        </div>


    </div>

    

@endsection