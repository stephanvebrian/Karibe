@extends('fe.layouts.app')

{{-- @section('title', $pageTitle) --}}

@section('content')

{{-- {{ dd($post) }} --}}
{{-- {{ dd($suggests) }} --}}
<div class="container mb-5">
    <div class="row mt-4">
        <div class="col-md-8">
            <h4>Post</h4>
        </div>
    </div>

    @if ($errors->any())
    <div class="row justify-content-center">

        <div class="card mr-2 mb-2 p-1" style="width: 65%;">
            <div class="card-body">
                <div class="row">
                    @foreach ($errors->all() as $error)
                    <div class="col-12 text-danger">
                        <li>{{ $error }}</li>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    @endif

    <div class="row justify-content-center">

        <div class="card mr-2 mb-2 p-1" style="width: 65%;">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h3 class="card-title m-0">
                            {{ $post->title }}
                        </h3>
                        <span class="text-muted">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            {{ \Carbon\Carbon::parse($post->created_at)->format('l, d F Y')}}
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
                    {{ $post->body }}
                </p>

            </div>
        </div>

    </div>

    @if ($response_available)
    <form method="POST" action="{{ route('fe.post.store.comment') }}">
        @csrf

        <div class="row justify-content-center">
            <div class="card mr-2 mb-2 p-1" style="width: 65%;">
                <div class="card-body" style="font-size: 1em;">

                    @for ($i = 0; $i < count($suggests); $i++)
                        @php
                            $suggest = $suggests[$i];
                            
                        @endphp    
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="suggest" value="{{ $suggest->value }}" {{ $i === 0 ? 'checked' : '' }}>
                                <span class="form-check-sign"></span>
                                {{ $suggest->text }}
                            </label>
                        </div>

                    @endfor

                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="card mr-2 mb-2 p-1" style="width: 65%;">
                <div class="card-body" style="font-size: 1em;">

                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
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
                                <input type="text" name="slug" id="slug" value="{{ $post->short_id }}" hidden>

                                <button class="btn btn-primary">
                                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                    Submit
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    @endif


    <div class="row justify-content-center">
        <div class="card mr-2 mb-2 p-1" style="width: 65%;">
            <div class="card-body text-center" style="font-size: 1.4em;">
                @forelse ($comments as $comment)
                    <p>{{ $comment->user->username }} : {{ $comment->body }}</p>
                    {{-- {{ dd($comment->postSuggest ) }} --}}
                @empty
                    <p>There is no comment currently</p>
                @endforelse
            </div>
        </div>
    </div>

</div>

@stop