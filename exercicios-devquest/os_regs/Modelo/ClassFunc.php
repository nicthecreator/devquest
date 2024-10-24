<?php
class ClassFunc
{
    private $idFunc;
    private $loginFunc;
    private $senhaFunc;

    // GETTERS 
    function getIdFunc()
    {
        return $this->idFunc;
    }

    function getLoginFunc()
    {
        return $this->loginFunc;
    }

    function getSenhaFunc()
    {
        return $this->senhaFunc;
    }

    //SETTERS
    function setIdFunc($idFunc)
    {
        $this->idFunc = $idFunc;
    }

    function setLoginFunc($loginFunc)
    {
        $this->loginFunc = $loginFunc;
    }

    function setSenhaFunc($senhaFunc)
    {
        $this->senhaFunc = $senhaFunc;
    }
}
