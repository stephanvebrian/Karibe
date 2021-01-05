@extends('fe.layouts.app')

{{-- @section('title', $pageTitle) --}}

@section('style')
<style>
    .entry:not(:first-of-type) {
        margin-top: 10px;
    }

    .glyphicon {
        font-size: 12px;
    }
</style>
@stop

@section('script')

<script>
    $(function() {
        $(document).on('click', '.btn-add', function(e) {
            e.preventDefault();

            var dynaForm = $('.dynamic-wrap .container-suggest:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(dynaForm);

            newEntry.find('input').val('');
            dynaForm.find('.entry:not(:last) .btn-add')
                .removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="fa fa-minus"></span>');
        }).on('click', '.btn-remove', function(e) {
            $(this).parents('.entry:first').remove();

            e.preventDefault();
            return false;
        });
    });
</script>

@stop

@section('content')

<div class="container mb-5">
    <div class="row mt-4">
        <div class="col-md-8">
            <h4>Write a Post</h4>
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

    <form action="{{ route('fe.post.store') }}" method="POST">
        @csrf

        <div class="row justify-content-center">

            <div class="card mr-2 mb-2 p-1" style="width: 65%;">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="title" id="title"
                                    placeholder="type a title">
                            </div>
                        </div>
                        <div class="col-md-6 text-right px-3">

                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="description" id="description"
                            placeholder="Type a description" rows="3"></textarea>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="card mr-2 mb-2 p-1" style="width: 65%;">
                <div class="card-body">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="field1">
                            Suggestions
                        </label>
                        <div class="col-sm-10">
                            <div class="dynamic-wrap">
                                {{-- <form role="form" autocomplete="off"> --}}
                                <div class="container-suggest">
                                    <div class="entry input-group">
                                        <input class="form-control" name="suggest[]" type="text"
                                            placeholder="Type something" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-success btn-add" type="button">
                                                <span class="fa fa-plus"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                {{-- </form> --}}
                                <br>
                                <small>Press <span class="fa fa-plus gs"></span> to add another form field !</small>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

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

    </form>

</div>

@stop