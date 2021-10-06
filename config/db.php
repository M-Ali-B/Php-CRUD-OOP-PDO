<?php
    Class db{
        
     protected function connect(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentdatabase";
        $port = "XXXX"; // please use port number(MYSQL port Number) for avoiding refusal of target machine 
        try {
            $conn = new PDO("mysql:host=$servername;port=$port dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
            return $conn;
            }
            
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
     }

    }
?>
