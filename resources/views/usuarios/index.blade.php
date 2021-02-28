<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Index</title>

    <script>
        function remove(route){
            if(confirm('Voce deseja deletar esse usuário?'))
                window.location = route;
        }
    </script>

</head>
    <body class="container-xl">
        
        @if(session()->has('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row m-0 mt-3">
            <h2 class="col-12 text-center ">Tabela de Usuários</h2>
        
            <a class="btn btn-warning" href="{{ route('usuario.create')}}">Adicionar Usuário</a>
            <table class="table table-dark mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                        <th></th>
                    </tr>
                </thead>
    <!-- FOREACH PARA PEGAR A LISTA DO TOTAL DE USUÁRIOS DO BANCO E MOSTRAR NA LISTA -->
                <tbody>
                    @foreach($usuarios as $usu)
                        <tr>
                            <td scope="row">{{ $usu->id }}</td>
                            <td>{{ $usu->nome }}</td>
                            <td>{{ $usu->endereco }}</td>
                            <td>{{ $usu->email }}</td>
                            <td>{{ $usu->cell }}</td>
                            <td>
                                <div class="row m-0 justify-content-between">
                                    <a href="{{ route('usuario.edit', $usu->id ) }}" class="btn btn-success">Editar</a>
                                    <a onclick="remove('{{ route('usuario.delete', $usu->id ) }}');" class="btn btn-danger">Excluir</a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>
</html>