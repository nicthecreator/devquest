<?php
include '../Modelo/ClassCliente.php';
include '../Modelo/DAO/ClassClteDAO.php';

$idCliente =@$_POST['idCliente'];
$email = @$_POST['email'];
$senhaCliente = @$_POST['senhaCliente'];
$nome = @$_POST['nome'];
$sobrenome = @$_POST['sobrenome'];
$cpf = @$_POST['cpf'];
$telefone = @$_POST['telefone'];
$endereco = @$_POST['endereco'];
$acao = $_GET['ACAO'];

$novoCliente = new ClassCliente();
$novoCliente->setEmail($email);
$novoCliente->setSenhaCliente($senhaCliente);
$novoCliente->setNome($nome);
$novoCliente->setSobrenome($sobrenome);
$novoCliente->setCpf($cpf);
$novoCliente->setTelefone($telefone);
$novoCliente->setEndereco($endereco);

$classClteDAO = new ClassClteDAO();
switch ($acao) {
	case "cadastrarClte":
        $cliente = $classClteDAO->cadastrarClte($novoCliente);
	    if($cliente >= 1){
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;
}
