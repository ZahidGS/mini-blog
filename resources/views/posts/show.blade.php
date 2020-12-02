@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalle del Post</div>
                    <a href="{{ route("blogs.show", $blogId) }}" class="btn btn-info text-white">Volver al listado de Blogs</a>

                    <div class="card-body">
                        <form method="POST" action="{{ route("posts.store",["blogId" => request("blogId")]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Titulo: <b>{{ $post->title }}</b></label>
                            </div>
                            <div class="form-group">
                                <label for="name">Contenido:</label>
                                <p><b>{{ $post->content }}</b></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
