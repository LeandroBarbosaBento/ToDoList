<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
        INSERÇÃO DE ARQUIVOS DO BOOTSTRAP
    -->

    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">
    <!--
        INSERÇÃO DE ARQUIVOS DO FONTAWESOME
    -->
    <link rel="stylesheet" href="{{asset('assets/fontawesome/all.min.css')}}">

    <title>TODO LIST</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center display-1" >TODO LIST</h1>
        <hr>
        <a href="{{route('new_task_form')}}" class="btn btn-primary mb-2">Create New Task</a>
        <a href="{{route('home')}}" class="btn btn-primary mb-2">List all tasks</a>
        
        <hr>

        <div class="my-2">
            Contexts: 
            <a href="{{route('context_home')}}" class="btn btn-outline-primary mb-2">Home</a>
            <a href="{{route('context_work')}}" class="btn btn-outline-primary mb-2">Work</a>
            <a href="{{route('context_computer')}}" class="btn btn-outline-primary mb-2">Computer</a>
            <a href="{{route('context_shopping')}}" class="btn btn-outline-primary mb-2">Shopping</a>
            
            
        </div>

<hr>
        @yield('content')
    </div>
    

    <script src="{{asset('assets/bootstrap/bootstrap.bundle.js')}}"></script>
    
</body>
</html>