<?php

require_once 'Conexao.php';
class ClassFuncDAO
{
    public function cadastrarFunc(ClassFunc $cadastrarFunc)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO login_funcionario (login_func, senha_func) values (?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarFunc->getLoginFunc());
            $stmt->bindValue(2, $cadastrarFunc->getSenhaFunc());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// Login
    public function loginFunc(ClassFunc $loginFunc) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM funcionario WHERE login_func=:login_func, senha_func=:senha_func";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':login_func', $loginFunc->getLoginFunc());

            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
}
// Fim do Login

?>