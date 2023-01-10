@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($title) }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{$route}}">
                        @method($method)
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="title">Title</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$blog ? $blog->title : old('title')}}" autocomplete="false">
                                @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="body">Body</label>
                            </div>
                            <div class="col-md-12">
                                <textarea type="text" name="body" class="form-control" id="summernote_1">
                                    {!! $blog ? $blog->body : '' !!}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">{{$btn}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection