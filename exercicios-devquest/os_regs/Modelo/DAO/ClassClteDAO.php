<?php

require_once 'Conexao.php';
class ClassClteDAO
{
    public function cadastrarClte(ClassCliente $cadastrarClte)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO tb_cliente (email, senha_cl, nome, sobrenome, cpf, telefone, endereco) values (?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarClte->getEmail());
            $stmt->bindValue(2, $cadastrarClte->getSenhaCliente());
            $stmt->bindValue(3, $cadastrarClte->getNome());
            $stmt->bindValue(4, $cadastrarClte->getSobrenome());
            $stmt->bindValue(5, $cadastrarClte->getCpf());
            $stmt->bindValue(6, $cadastrarClte->getTelefone());
            $stmt->bindValue(7, $cadastrarClte->getEndereco());

            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// Login
    public function loginClte(ClassCliente $loginClte) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM tb_cliente WHERE email=:email, senha_cl=:senha_cl";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':email', $loginClte->getEmail());

            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
}
// Fim do Login

?>