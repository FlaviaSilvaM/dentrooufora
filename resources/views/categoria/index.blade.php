
@extends('layouts.app')


@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
   

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Categorias</title>
       
        <!-- Core theme CSS (includes Bootstrap)-->
       
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body id="page-top">
        <!-- Navigation-->
       
        <!-- Header-->
        <header>
      
      



        </header>

        <section id="about" class="p-2 m-2">
      

        
       

                <div class="table-responsive">

                
                
                   
                 
             
                    <table class="table">
                   
                    <a href="{{ route('home') }}">
                    <button class="btn btn-sm btn-secondary">Página Principal</button>
                </a>  
                
                <a href="{{ route('categoria.create') }}">
                    <button class="btn btn-sm btn-secondary">Nova categoria</button>
                </a>
                        <thead>
                        <tr>
                            <th scope="col">Categoria:</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->nome }}</td>
                       
                        <td>
                            <!-- Coloque aqui os botões de ação (editar, excluir, etc.) -->
                        </td>
                    </tr>
                @endforeach 
            </tbody>
                </div>
                @endsection
          
                        
        </section>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <link  rel="stylesheet" href="public/assets/js/artigo.js">        
    </body>
</html>
