@extends('fe.layouts.app')

{{-- @section('title', $pageTitle) --}}

@section('content')

<div class="container mb-5">
    <div class="row mt-4">
        <div class="col-md-8">
            <h4>Post</h4>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="card mr-2 mb-2 p-1" style="width: 65%;">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h3 class="card-title m-0">
                            Amazon Vs Google
                        </h3>
                        <span class="text-muted">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            Yesterday
                        </span>
                    </div>
                    <div class="col-md-6 text-right px-3">
                        <a class="px-2" href="#" style="cursor: default;">
                            <i class="fa fa-bookmark-o" aria-hidden="true" style="cursor: pointer;"></i>
                        </a>
                        <a class="px-2" href="#" style="cursor: default;">
                            <i class="fa fa-ellipsis-h" aria-hidden="true" style="cursor: pointer;"></i>
                        </a>
                    </div>
                </div>

                <p class="card-text mb-3">
                    Saya bekerja di Amazon sebagai SDE 2.

                    Saya hampir dipromosikan tetapi tidak terjadi, sudah setahun.
                    Saya mewawancarai untuk Google L5 dan bisa mendapatkan L4 atau L5.

                    Apa yang harus saya pilih.

                    Saham Amazon berkembang pesat dan Google tidak dapat memberikan kenaikan di Amazon.
                </p>

            </div>
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="card mr-2 mb-2 p-1" style="width: 65%;">
            <div class="card-body" style="font-size: 1em;">
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option1" checked>
                        <span class="form-check-sign"></span>
                        Tetap di amazon
                    </label>
                </div>

                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <span class="form-check-sign"></span>
                        Pindah ke google
                    </label>
                </div>


                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <span class="form-check-sign"></span>
                        Others
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="card mr-2 mb-2 p-1" style="width: 65%;">
            <div class="card-body" style="font-size: 1em;">

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comment</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="row justify-content-center">
        <div class="card mr-2 mb-2 p-1" style="width: 65%;">
            <div class="card-body text-center" style="font-size: 1.4em;">
                <div class="row">
                    <div class="col-md-6">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        Give Feedback
                    </div>
                    <div class="col-md-6">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                        Add a comment
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row justify-content-center">
        <div class="card mr-2 mb-2 p-1" style="width: 65%;">
            <div class="card-body text-center" style="font-size: 1.4em;">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form method="POST" action="{{ route('fe.post.store') }}">
                            @csrf
                            <button class="btn btn-primary">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="card mr-2 mb-2 p-1" style="width: 65%;">
            <div class="card-body text-center" style="font-size: 1.4em;">

                
            </div>
        </div>
    </div>

</div>

@stop