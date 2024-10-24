<?php
class ClassCliente
{
    private $idCliente;
    private $email;
    private $senhaCliente;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $telefone;
    private $endereco;

    // GETTERS
    function getIdCliente()
    {
        return $this->idCliente;
    }

    function getEmail()
    {
        return $this->email;
    }
    
    function getSenhaCliente()
    {
        return $this->senhaCliente;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getSobrenome()
    {
        return $this->sobrenome;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function getTelefone()
    {
        return $this->telefone;
    }

    function getEndereco()
    {
        return $this->endereco;
    }

    //SETTERS
    function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setSenhaCliente($senhaCliente)
    {
        $this->senhaCliente = $senhaCliente;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    
    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
}
