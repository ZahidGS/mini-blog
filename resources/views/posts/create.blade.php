@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear un nuevo Post</div>

                    @include("partials.errors")

                    <div class="card-body">
                        <form method="POST" action="{{ route("posts.store",["blogId" => request("blogId")]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Titulo</label>
                                <input type="text" class="form-control" name="title" />
                            </div>
                            <div class="form-group">
                                <label for="name">Contenido</label>
                                <input type="text" class="form-control" name="content" />
                            </div>
                            <input type="submit" class="btn btn-block btn-dark" value="Crear Post">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
