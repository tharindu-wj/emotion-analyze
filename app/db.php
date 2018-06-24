<?php
class Database
{
    public $con;
    public function __construct()
    {
        $this->con = mysqli_connect("localhost","root","asdf1234","emotion_detection");
        if($this->con)
        {
            echo "Connected";
        }
        else
        {
            echo "Connection failed";
        }
    }
}

//$obj = new Database;
?>