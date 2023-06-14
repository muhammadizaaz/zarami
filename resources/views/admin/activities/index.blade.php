@extends('layouts.master')
@section('title', 'My Activity')
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
                            <div class="float-end">
                                <a href="{{ route('lecturer.my-activity.create') }}" class="btn btn-primary btn-sm waves-effect waves-light" aria-expanded="false">
                                    Add Activity<i class="mdi mdi-dots-vertical"></i>
                                </a>
                            </div>
                            <h4 class="mt-0 header-title">My Activity</h4>
                            <p class="text-muted font-14 mb-3">
                                This is a list of all the activities you have.
                            </p>
                    
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Activity</th>
                                            <th>Description</th>
                                            <th>Categories</th>
                                            <th>Uploaded On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($activities as $activity)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $activity->title }}</td>
                                            <td>{{ $activity->description }}</td>
                                            <td>{{ $activity->category->name }}</td>
                                            <td>{{ $activity->created_at}}</td>
                                            <td>
                                                <a href="{{ route('lecturer.my-activity.edit', $activity->id) }}" class="btn btn-sm btn-warning"><i class="mdi mdi-pencil"></i></a>
                                                <form action="{{ route('lecturer.my-activity.destroy', $activity->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger"><i class="mdi mdi-trash-can"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->  
            
        </div> <!-- container -->

    </div> <!-- content -->
</div>

@endsection