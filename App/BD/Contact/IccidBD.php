<?php

namespace App\BD\Contact;

class IccidBD extends connection
{

    public function __construct()
    {
        parent::__construct();

    }

    public function get_All()
    {
        $estoques = $this->pdo
            ->query("SELECT *
            FROM tbl_Arquivos a
            INNER JOIN tbl_ICCID c ON a.id = c.id;;")
            ->fetchAll(\PDO::FETCH_ASSOC);
        return $estoques;

    }



}

?>