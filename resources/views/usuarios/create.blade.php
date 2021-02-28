<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Create</title>
</head>
<body class="container-xl">
    <div class="row m-auto  mt-2">
        <h1 class="col-12 text-center mt-5 ">Esse é o Create</h1>
        <form method="POST" action="{{ route('usuario.store')}}" class=" col-12 bg-dark p-3 text-white">
            @csrf
            <!-- Esse CSRF ajuda evitando sql injection, valida o token entre outras coisas -->
            <div class="rowmt-2 m-0">
                <span class="form-label">Nome</span>
                <input type="text" class="form-control" name="nome" placeholde="Nome">
            </div>
            <div class="row mt-2 m-0">
                <span class="form-label">Endereço</span>
                <input type="text" class="form-control" name="endereco" placeholde="Endereço">
            </div>
            <div class="row mt-2 m-0">
                <span class="form-label">Email</span>
                <input type="email" class="form-control" name="email" placeholde="Email">
            </div>
            <div class="row mt-2 m-0">
                <span class="form-label">Celular</span>
                <input type="text" class="form-control" name="cell" placeholde="Celular">
            </div>
            <div class="row mt-3 m-0 justify-content-between">
                <button type="submit" class="btn btn-outline-success">Salvar</button>
                <a href="{{ route('usuario.index') }}" type="submit" class="btn btn-outline-warning">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>