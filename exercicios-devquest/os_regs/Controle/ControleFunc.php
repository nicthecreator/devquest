<?php
include '../Modelo/ClassFunc.php';
include '../Modelo/DAO/ClassFuncDAO.php';

//$id =@$_POST['idex'];
$loginFunc = @$_POST['loginFunc'];
$senhaFunc = @$_POST['senhaFunc'];
$acao = $_GET['ACAO'];


$novoFunc = new ClassFunc();
$novoFunc->setLoginFunc($loginFunc);
$novoFunc->setSenhaFunc($senhaFunc);

$classFuncDAO = new ClassFuncDAO();
switch ($acao) {
	case "cadastrarFunc":
        $funcionario = $classFuncDAO->cadastrarFunc($novoFunc);
	    if($funcionario >= 1){
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;
 }
