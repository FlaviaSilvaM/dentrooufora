@extends('layouts.app')

@section('content')
<link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Estilo para as explicações */
.menu-description {
    font-size: 14px;
    color: #555;
}

/* Ajuste de margens e espaçamento */
.menu-item {
    margin-bottom: 20px;
}</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            
            <div class="mt-4">
                <h4>Menu:</h4>
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ route('candidato.create') }}" class="btn btn-primary btn-block">Create Candidate</a>
                        <p class="text-center mt-2">Create a new candidate profile.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('votacao.create') }}" class="btn btn-primary btn-block">Create Voting</a>
                        <p class="text-center mt-2">Start a new voting campaign.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('categoria.create') }}" class="btn btn-primary btn-block">Create Category</a>
                        <p class="text-center mt-2">Add a new category for candidates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
