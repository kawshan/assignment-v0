<?php

class CommonDao
{


    public static function getResult($query){
        $servername="localhost";
        $username="root";
        $password="kawshan6358";
        $dbname="circlebook";


        $dbconn=new mysqli($servername, $username, $password, $dbname);
        if(!$dbconn){
            die("Connection failed: " .$dbconn-> connect_error);
        }
        $result=$dbconn->query($query);

        return $result;


    }


}


?>