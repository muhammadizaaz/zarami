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
                                <h2 class="title">Add Activity</h2>
                                <p class="sub-header">Activity Information</p>
                                <form class="needs-validation" action="{{ route('lecturer.my-activity.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="validationCustom01"
                                            placeholder="Title" name="title" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustomUsername" class="form-label">Description</label>
                                        <div class="input-group">
                                            <textarea name="description" id="" class="form-control" cols="15" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Veneu</label>
                                        <input type="text" class="form-control" id="validationCustom03"
                                            placeholder="Veneu" name="veneu" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Company</label>
                                        <input type="text" class="form-control" id="validationCustom04"
                                            placeholder="Company" name="company" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Photo</label>
                                        <input type="file" class="form-control" id="validationCustom04"
                                        data-plugins="dropify" name="photo" placeholder="add here"/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom05" class="form-label">Category</label>
                                        <select name="category_id" id="validationCustom05" class="form-control">
                                            <option value="">Select Category</option>
                                            <option value="1">Community Service</option>
                                            <option value="2">Research</option>
                                            <option value="3">Competition</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Date Start</label>
                                        <input type="date" class="form-control" id="validationCustom05"
                                            placeholder="Industrial Engineering" name="date_start" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Date End</label>
                                        <input type="date" class="form-control" id="validationCustom05"
                                            placeholder="Industrial Engineering" name="date_end" required />
                                    </div>
                                    <button class="btn btn-primary" type="submit">Add Activity</button>
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
