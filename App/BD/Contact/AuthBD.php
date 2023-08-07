<?php

namespace App\BD\Contact;

use App\Models\UsuarioModel;

class AuthBD extends connection
{

    public function __construct()
    {
        parent::__construct();

    }

    public function Post_Login($email, $name, $pass): ?UsuarioModel
    {
        $statement = $this->pdo
            ->query("select email,nome,senha from tbl_Login where email = :a or nome = :b and senha = :c;");

        $statement->bindParam('a', $email);
        $statement->bindParam('b', $name);
        $statement->bindParam('c', $pass);

        $statement->execute();

        $users = $statement->fetchAll(\PDO::FETCH_ASSOC);

        if (count($users) === 0)
            return null;

        $usuario = new UsuarioModel();
        $usuario->setId($users[0]['id'])
            ->setEmail($users[0]['email'])
            ->setNome($users[0]['nome'])
            ->setSenha($users[0]['senha']);
        return $usuario;

    }



}

?>