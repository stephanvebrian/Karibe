@extends('be.layouts.app')

{{-- @section('title', $pageTitle) --}}

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Post Management</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">

                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@stop

@section('content-main')
<section class="content">
    <div class="container-fluid">
        <!-- Action Button Top -->
        <div class="row mb-3">
            <div class="col-md-4">
                {{-- <button type="submit" class="btn btn-primary">Button 1</button> --}}
                {{-- <button type="submit" class="btn btn-danger">Button 2</button> --}}
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">

            </div>
        </div>
        <!-- /.action button top -->
        <!-- Main row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Posts Data</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Created</th>
                                    <th>View</th>
                                    <th>Comment</th>
                                    <th>Title</th>
                                    <th>Lock Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->user->username }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->view_count }}</td>
                                    <td>{{ $post->comment_count }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->post_lock ? 'Y' : 'X' }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@stop