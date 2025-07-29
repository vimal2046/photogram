<?php
//for take and give the database connection
//this is the only function happen and close throughout the session
class Database{
    public static $conn = null;
    public static function getConnection()
    {
        if(Database::$conn==null)
        {
                $servername = "mysql.selfmade.ninja";
                $username = "vimal";
                $password = "vimal2003@098"; // or wrong one for testing
                $dbname = "vimal_photogram_db";

                $connection = new mysqli($servername,$username,$password,$dbname);

                if($connection->connect_error)
                {
                  die("Connection Failed: ". $connection->connect_error); 
                }
                else{
                    printf("New connection Established");
                   Database::$conn = $connection;
                   return Database::$conn;
                }
        }else{
            printf("Returning Existing Connection");
            return Database::$conn; 
        }
        
    }
}