<?php

class database
{// DB credentials
    public $host = "localhost";
    public $user = "root";
    public $pass = "A@#345_abcd1";
    public $db = "Protofolio";
    public $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db);
        return $this->link;
    }

    public function select($query)
    {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
}

?>
