@extends('layouts.master')
@section('title', 'Profile')
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
                                                    <h4 class="m-0">{{ auth()->user()->name }}</h4>
                                                    <p class="text-muted"><i>{{ auth()->user()->major }}</i></p>
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
                                                <a href=""
                                                    class="btn btn-primary btn-sm waves-effect waves-light">Update Photo</a>
                                            </div>
                                        </div>
                                </form>

                                <form class="needs-validation" action="{{ route('lecturer.profile.update') }}" method="post" novalidate>
                                    @csrf
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="validationCustom01"
                                            placeholder="{{ auth()->user()->name }}" name="name"/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">NIM</label>
                                        <input type="text" class="form-control" id="validationCustom03"
                                            placeholder="{{ auth()->user()->nim }}" name="nim" readonly />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationCustom04"
                                            placeholder="{{ auth()->user()->email }}" name="email" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom05" class="form-label">Major</label>
                                        <input type="text" class="form-control" id="validationCustom05"
                                            placeholder="{{ auth()->user()->major }}" name="major" readonly />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom05" class="form-label">Number</label>
                                        <input type="text" class="form-control" id="validationCustom05"
                                            placeholder="{{ auth()->user()->number }}" name="number"/>
                                    </div>
                                    <a href="{{ route('lecturer.profile.update') }}"
                                                    class="btn btn-primary btn-sm waves-effect waves-light">Update Profile</a>
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
