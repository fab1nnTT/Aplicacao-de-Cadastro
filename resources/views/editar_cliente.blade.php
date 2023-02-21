<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Crud</title>
</head>
<body>

    <form action="/atualizar-cliente/{{ $cliente->id }}" method="POST">
        @csrf
        @method("PUT")
    <label for="">Nome:</label>
    <input type="text" placeholder="Digite o seu nome..." name="nome_cliente" value="{{ $cliente->nome }}">
    <br /> <br />
    <label for="">CPF</label>
    <input type="text" placeholder="Digite o seu CPF..." name="cpf_cliente" value="{{ $cliente->cpf }}">
    <br /> <br >
    <label for="">Email</label>
    <input type="text" placeholder="Digite o seu email..." name="email_cliente" value="{{ $cliente->email }}">
    <br /> <br >
    <button>Enviar Cadastro</button>
</form>

</body>
</html>