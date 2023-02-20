<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;




Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-cliente', function (Request $informacoes) {
    Cliente::create([
        'nome' => $informacoes->nome_cliente,
        'telefone' => $informacoes->telefone_cliente
    ]);
    echo "Cliente Criado com Sucesso!";
});

Route::get('mostrar-cliente/{id_do_cliente}' , function ($id_do_cliente) {
    $cliente = Cliente::findOrFail($id_do_cliente);
    echo $cliente->nome;
    echo "<br />";
    echo $cliente->telefone;
});

Route::get('/editar-cliente/{id_do_cliente}', function ($id_do_cliente) {
    $cliente = Cliente::findOrFail($id_do_cliente);
    return view('editar_cliente', ['cliente' => $cliente]);
});

Route::put('/atualizar-cliente/{id_do_cliente}', function (Request $informacoes, $id_do_cliente) {
    $cliente = Cliente::findOrFail($id_do_cliente);
    $cliente->nome = $informacoes->nome_cliente; 
    $cliente->telefone = $informacoes->telefone_cliente;
    $cliente->save();
    echo "Cliente Atualizado com Sucesso!";
});

Route::get('/excluir-cliente/{id_do_cliente}' , function ($id_do_cliente) {
    $cliente = Cliente::findOrFail($id_do_cliente);
    $cliente->delete();
    echo "Cliente excluido com Sucesso";
});