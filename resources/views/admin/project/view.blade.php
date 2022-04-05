@extends('layouts.admin')

@section('content')

    <header>
        
    </header>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{'/admin/users'}}">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">View</li>
        </ol>
    </nav>
    
    <div class="row g-2 justify-content-center">
        <div class=" col-xs-12 col-sm-12 col-lg-2 mt-3">
            <div class="p-3 border bg-light">
                <div class="profile-image">
                    <img src="{{asset('img/default-avatar.jpg')}}" alt="avatar"> 
                </div>
            </div>
        </div>

        <div class=" col-xs-12 col-sm-12 col-lg-5 mt-3">
            <div class="p-3 border bg-light">

                <div class="profile-head">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                            <h2>
                                Arquiza, Aldrich
                            </h2>
                            <h4>
                                Medical Officer IV
                            </h4>

                             <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUpdateUser">
                                <span><i class="fas fa-user-edit"></i></span>
                                Update
                            </button>
                        </div>

                         <!-- Modal -->
                        <div class="modal fade" id="modalUpdateUser">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Update User</strong></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form>
                                            <div class="form-row">

                                                <div class="col-12">
                                                    <label>User Image</label>
                                                    <input type="file" class="form-control" placeholder="">
                                                </div>

                                                <div class="mt-2 col-6">
                                                    <label>Civil Status</label>
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="civilStatus">
                                                        <option selected="">Select Civil Status</option>
                                                        <option value="Male">Single</option>
                                                        <option value="Female">Married</option>
                                                        <option value="Female">Widowed</option>
                                                        <option value="Female">Annuled</option>
                                                        <option value="Female">Separated</option>
                                                    </select>
                                                </div>

                                                <div class="mt-2 col-6">
                                                    <label>Street Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Street">
                                                </div>

                                                <div class="mt-2 col-6">
                                                    <label>Barangay</label>
                                                    <input type="text" class="form-control" placeholder="Enter Barangay">
                                                </div>

                                                <div class="mt-2 col-6">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="Enter City">
                                                </div>

                                                <div class="mt-2 col-6">
                                                    <label>Contact Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter Contact Number">
                                                </div>

                                                <div class="mt-2 col-6">
                                                    <label>email</label>
                                                    <input type="email" class="form-control" placeholder="Enter Email">
                                                </div>

                                                <div class="mt-2 col-6">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Enter User Name">
                                                </div>

                                                <div class="mt-2 col-6">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Enter Password">
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
  
            </div>
        </div>
    </div>

    <div class="row g-2 justify-content-center">
        
        <div class="col-xs-12 col-sm-12 col-lg-2 mt-3">
            <div class="p-3 border bg-light">

                <h6 class="mt-4"><strong>CONTACT INFORMATION</strong></h6>
                <div class="form-row container mt-2">

                    <div class="col-12">
                        <span><strong> Contact Number</strong></span>
                    </div>

                    <div class="col-12">
                        <span><strong>Email Address</strong></span>
                    </div>
                </div>

                <h6 class="mt-4"><strong>STATUS INFORMATION</strong></h6>
                <div class="form-row container mt-2">

                    <div class="col-12">

                        <span class="badge badge-success"><strong> ACTIVE</strong></span>
                    {{-- @if ($user->status==1)
                                
                    @else
                        <span><strong> NOT ACTIVE</strong></span>
                    @endif --}}
                        
                    </div>
                </div>

            </div>
        </div>

        <div class=" col-xs-12 col-sm-12 col-lg-5 mt-3">
            <div class="p-3 border bg-light">
                {{-- <div class="row">
                    <div class="col-md-6">
                        <label>Age</label>
                    </div>
                    <div class="col-md-6">
                        <p><strong>30</strong></p>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-md-6">
                        <label>Date of Birth</label>
                    </div>
                    <div class="col-md-6">
                        <p><strong> Date Of Birth</strong></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Gender</label>
                    </div>
                    <div class="col-md-6">
                        <p><strong> Gender</strong></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Civil Status</label>
                    </div>
                    <div class="col-md-6">
                        <p><strong> Civil Status</strong></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Citizenship</label>
                    </div>
                    <div class="col-md-6">
                        <p><strong> Citizenship</strong></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Street</label>
                    </div>
                    <div class="col-md-6">
                        <p><strong> Street</strong></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Barangay</label>
                    </div>
                    <div class="col-md-6">
                        <p><strong> Barangay</strong></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>City</label>
                    </div>
                    <div class="col-md-6">
                        <p><strong> City</strong></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection