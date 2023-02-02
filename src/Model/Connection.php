<?php
namespace App\Model;

class Connection {

    private $HOST;
    private $USER;
    private $PASSWORD;
    private $NAME;

    private $con;

    public function __construct($I_HOST, $I_USER, $I_PASSWORD, $I_NAME)
    {
        $this->HOST = $I_HOST;
        $this->USER = $I_USER;
        $this->PASSWORD = $I_PASSWORD;
        $this->NAME = $I_NAME;

        # create connection
        $this->con = mysqli_connect(
            $this->HOST,
            $this->USER,
            $this->PASSWORD,
            $this->NAME
        );
    }
}

