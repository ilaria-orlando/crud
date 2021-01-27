<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $name;
    private $password;
    private $DBname;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $database;

    public function __construct(string $host, string $name, string $password, string $DBname)
    {
        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
        $this->DBname = $DBname;
    }

    public function connect()
    {
        // TODO: make the connection to the database
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->database = new mysqli($this->host, $this->name, $this->password, $this->DBname);
    }
}