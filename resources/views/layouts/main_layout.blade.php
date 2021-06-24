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

        @yield('content')
    </div>
    

    <script src="{{asset('assets/bootstrap/bootstrap.bundle.js')}}"></script>
    
</body>
</html>