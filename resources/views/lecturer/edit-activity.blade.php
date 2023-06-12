@extends('layouts.master')
@section('title', 'Edit Activity')
@section('content')

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">My Profile</h4>
                                <p class="sub-header">User Information</p>
                                <form action="">
                                    <div class="card">
                                        <div class="bg-picture card-body">
                                            <div class="d-flex align-items-top">
                                                <img src="{{ asset('template') }}/images/users/user-1.jpg"
                                                    class="flex-shrink-0 rounded-circle avatar-xl img-thumbnail float-start me-3"
                                                    alt="profile-image">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h4 class="m-0">Muhammad Ammar Farras</h4>
                                                    <p class="text-muted"><i>Industrial Engineering Lecturer</i></p>
                                                    <p class="font-13">Hi I'm Alexandra Clarkson,has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown printer
                                                        took a galley of type.Contrary to popular belief, Lorem Ipsum is not
                                                        simply random text. It has roots in a piece of classical Latin
                                                        literature it over 2000 years to popular belief Ipsum is not
                                                        simplyrandom text.</p>

                                                    <ul class="social-list list-inline mt-3 mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);"
                                                                class="social-list-item border-purple text-purple"><i
                                                                    class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);"
                                                                class="social-list-item border-danger text-danger"><i
                                                                    class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);"
                                                                class="social-list-item border-info text-info"><i
                                                                    class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);"
                                                                class="social-list-item border-secondary text-secondary"><i
                                                                    class="mdi mdi-github"></i></a>
                                                        </li>
                                                    </ul>

                                                </div>

                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="pt-1 float-end">
                                                <a href="" class="btn btn-primary btn-sm waves-effect waves-light">Update Photo</a>
                                            </div>
                                        </div>
                                </form>

                                <form class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="validationCustom01"
                                            placeholder="First name" value="Muhammad Ammar Farras" required />
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustomUsername" class="form-label">Catergory</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustomUsername"
                                                placeholder="ammarfarras" aria-describedby="inputGroupPrepend" required />
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Veneu</label>
                                        <input type="text" class="form-control" id="validationCustom03"
                                            placeholder="1201204375" required />
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Date Start</label>
                                        <input type="text" class="form-control" id="validationCustom04"
                                            placeholder="ammarfarras@gmail.com" required />
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom05" class="form-label">Date End</label>
                                        <input type="text" class="form-control" id="validationCustom05"
                                            placeholder="Industrial Engineering" required />
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom05" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="validationCustom05"
                                            placeholder="Industrial Engineering" required />
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Profile</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

@endsection
