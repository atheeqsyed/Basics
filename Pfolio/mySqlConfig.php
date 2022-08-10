<?php

Class Database
{
    public $host ;
    public $uname;
    public $pwd;
    public $dbname;

    public $conn;

    public function OpenCon()
    {
        $host = "localhost";
        $uname = "root";
        $pwd = "A@#345_abcd1";
        $dbname = "Protofolio";
        // Creating a Connection

        $conn = new mysqli($host, $uname, $pwd,$dbname) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
        //Display the records
        $query = "SELECT project_name, project_desc FROM Projects";
        $result = $conn->query($query);

    }

    function CloseCon($conn)
    {
        $conn -> close();
    }

    function select($tableName)
    {
        $this->sqlQuery = 'SELECT * FROM ' . $this->dbname . '.' . $tableName;
        $this->dataSet = mysqli_query($this->sqlQuery, $this->connString);
        return $this->dataSet;

    }





}

