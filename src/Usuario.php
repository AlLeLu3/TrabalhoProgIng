<?php

class Usuario implements ActiveRecord{

    private int $idUsuario;
    private int $admin;
    
    public function __construct(private string $email,private string $senha){
    }

    public function setIdUsuario(int $idUsuario):void{
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario():int{
        return $this->idUsuario;
    }

    public function setadmin(int $admin):void{
        $this->admin = $admin;
    }

    public function getadmin():int{
        return $this->admin;
    }
    public function setSenha(string $senha):void{
        $this->senha = $senha;
    }

    public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function getSenha():string{
        return $this->senha;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function save():bool{
        $conexao = new MySQL();
        //$this->senha = password_hash($this->senha,PASSWORD_BCRYPT); 
        if(isset($this->idUsuario)){
            $sql = "UPDATE usuario SET Email = '{$this->email}',Senha = '{$this->senha}' WHERE idUsuario = {$this->idUsuario}";
        }else{
            $sql = "INSERT INTO usuario (Email,Senha,admin) VALUES ('{$this->email}','{$this->senha}',0 )";
        }
        return $conexao->executa($sql);
    }

    public static function find($idUsuario):Usuario{
        $conexao = new MySQL();
        $sql = "SELECT * FROM usuario WHERE idUsuario = {$idUsuario}";
        $resultado = $conexao->consulta($sql);
        $u = new Usuario($resultado[0]['Email'],$resultado[0]['Senha']);
        $u->setIdUsuario($resultado[0]['idUsuario']);
        $u->setadmin($resultado[0]['admin']);
        return $u;
    }

    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM usuario WHERE idUsuario = {$this->idUsuario}";
        return $conexao->executa($sql);
    }

    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM usuario";
        $resultados = $conexao->consulta($sql);
        $usuarios = array();
        foreach($resultados as $resultado){
            $u = new Usuario($resultado['email'],$resultado['senha']);
            $u->setIdUsuario($resultado['idUsuario']);
            $usuarios[] = $u;
        }
        return $usuarios;
    }

    public function authenticate():bool{
        $conexao = new MySQL();
        $sql = "SELECT idUsuario,Senha FROM usuario WHERE Email = '{$this->email}'";
        $resultados = $conexao->consulta($sql);
        //if(password_verify($this->senha,$resultados[0]['Senha'])){
        if($this->senha == $resultados[0]['Senha']){
            session_start();
            $_SESSION['idUsuario'] = $resultados[0]['idUsuario'];
            $_SESSION['email'] = $resultados[0]['Email'];
            return true;
        }else{
            return false;
        }
    }
}
