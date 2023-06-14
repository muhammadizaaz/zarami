@extends('layouts.master')
@section('title', 'Upload File')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- file preview template -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">File Upload</h4>
                            <p class="sub-header">
                                Override your input files with style. Your so fresh input file — Default version.
                            </p>

                            <input type="file" data-plugins="dropify" data-height="300" />

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
            <!-- end row -->  
            
        </div> <!-- container -->

    </div> <!-- content -->
</div>

@endsection