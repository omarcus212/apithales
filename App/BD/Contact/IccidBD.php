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
            ->query("SELECT * FROM tbl_iccid a INNER JOIN tbl_Arquivo;")
            ->fetchAll(\PDO::FETCH_ASSOC);
        return $estoques;

    }



}

?>