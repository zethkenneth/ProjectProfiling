@extends('layouts.admin')

@section('content')

     <!--navbar-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">

            <!--offcanvas trigger-->
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
            </button>
            <!--offcanvas trigger-->

            <a class=" navbar-brand fw-bold text-uppercase me-auto" href="#">Computer Service Division</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex ms-auto" action="/admin/usersearch" method="get">
                    <div class="input-group my-3 my-lg-0">
                        <input type="text" name="search" class="form-control" placeholder="Search..."
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                    class="fas fa-search"></i>
                            </button>
                    </div>
                </form>

                <ul class="navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                          
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <!-- <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li> 
                            <li>
                                <hr class="dropdown-divider">
                            </li>-->
                            <li><a class="dropdown-item" href="/logout">Logout</a>
                        </ul>

                    </li>

                </ul>

            </div>

        </div>
    </nav>
    <!--navbar-->


    

    <h2 class="col-md-123 fw-bold">Overview for Projects</h2>

    

    <h2 class="col-md-12 fw-bold"></h2>
    <div class="cardbox">
        <div class="card">
            <div>
                <div class="numbers">1,023</div>
                <div class="cardname">Total Projects</div>

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


    <section class="recent">

        <h3 class="col-md-1234 fw-bold">Projects</h3>

     
        
        <!-- Button trigger modal -->
        <button type="button" class="m-2 btn btn-success" data-bs-toggle="modal"  data-bs-target="#modalCreateProject">
            <span><i class="fas fa-user-plus"></i></span>
            Create
        </button>
    
        <!-- Modal -->
        <div class="modal fade" id="modalCreateProject" data-bs-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Create Project</strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form class="row g-3" method="POST" enctype="multipart/form-data" action="/users/submit-form">
                            @csrf

                            <div class="form-floating form-group col-6">
                                <input type="text" class="form-control" id="projectname" name="projectname" placeholder=" " >
                                <label for="firstName" >Project Name <span class="text-danger">*</span> </label>
                            </div>
                            <div class="form-floating form-group col-6">
                                <input type="text" class="form-control" id="datestarted" name="datestarted" placeholder=" " >
                                <label for="firstName" >Date Started <span class="text-danger">*</span> </label>
                            </div>
                            <div class="form-floating form-group col-6">
                                <input type="date" class="form-control" placeholder=" " name="duedate">
                                <label>Due Date (dd/mm/yyyy) <span class="text-danger">*</span> </label>
                            </div>

                         

                       

                         
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

           <!-- Modal -->
           <div class="modal fade" id="modalUpdateProject" data-bs-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Update Project</strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form class="row g-3" method="POST" enctype="multipart/form-data" action="/users/submit-form">
                            @csrf

                            <div class="form-floating form-group col-6">
                                <input type="text" class="form-control" id="projectname" name="projectname" placeholder=" " >
                                <label for="firstName" >Project Name <span class="text-danger">*</span> </label>
                            </div>
                            <div class="form-floating form-group col-6">
                                <input type="text" class="form-control" id="datestarted" name="datestarted" placeholder=" " >
                                <label for="firstName" >Date Started <span class="text-danger">*</span> </label>
                            </div>
                            <div class="form-floating form-group col-6">
                                <input type="date" class="form-control" placeholder=" " name="duedate">
                                <label>Due Date (dd/mm/yyyy) <span class="text-danger">*</span> </label>
                            </div>

                         

                       

                         
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="recent-table-card">
            <div class="table-responsive">
              
                <table class="table table-striped table-hover text-center table-sm">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Project Name</th>
                            <th>Date Started</th>
                         
                            <th>Due Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
    
                    <tbody>
                    
                            <tr class="striped">
                                <td></td>
                                <td></td>
                                <td></td>
                                
                                <td>                    
                                 
                                </td>
                                <td>
                                    <a href="{{ url('/admin/project/view/') }}" class="btn btn-outline-warning">View</a> 
                                    <a button type="button" class="m-2 btn btn-success" data-bs-toggle="modal"  data-bs-target="#modalUpdateProject">Edit</a> 

                                

                                </td>
                            </tr>
                     
                    </tbody>
                </table>
    
            </div>
        </div>
    </section>

@endsection