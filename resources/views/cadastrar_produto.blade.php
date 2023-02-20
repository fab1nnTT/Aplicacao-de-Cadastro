<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>

    <form action="/cadastrar-produto" method="POST">
        @csrf
    <label for="">Nome:</label>
    <input type="text" placeholder="Digite o nome do produto..." name="nome_produto">
    <br /> <br />
    <label for="">Preço:</label>
    <input type="text" placeholder="Digite o seu Preço do produto..." name="preco_produto">
    <br /> <br >
    <label for="">Quantidade:</label>
    <input type="text" placeholder="Digite a Quantidade..." name="quantidade_produto">
    <br /> <br >
    <button>Enviar Cadastro</button>
    
</body>
</html>