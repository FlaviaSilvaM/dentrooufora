@extends('layouts.app')

@section('content')
<link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
                        <a href="{{ route('categoria.index') }}" class="btn btn-primary btn-block">Categorias</a>
                    </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Category') }}</div>

                <div class="card-body">
                   
                <form method="POST" action="{{ route('categoria.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name"> Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>

                      

                        <button type="submit" class="btn btn-primary">Criar Categoria</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
