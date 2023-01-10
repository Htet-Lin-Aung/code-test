@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="mb-1">
                <a class="btn btn-info" href="{{ route('blog.create') }}">Add New Blog</a>
            </div>

            <div class="card">
                <div class="card-header">{{ __('Blog List') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('danger'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('danger') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th class="w-50">Title</th>
                                <th>Created At</th>
                                <th colspan="2">Actions</th>
                            </thead>
                            <tbody>
                                @foreach($blogs as $index=>$blog)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->created_at->format('d-m-Y')}}</td>
                                    <td><a class="btn btn-warning" href="{{route('blog.edit',$blog)}}">Edit</a></td>
                                    <td>
                                        <form method="POST" action="{{route('blog.destroy',$blog)}}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                            Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$blogs->links()}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
