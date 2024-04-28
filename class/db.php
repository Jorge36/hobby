<?php  

class DB  {  

    protected $connection;

    function __construct($namedb) {

        if ($namedb == "hr") {

            $host = 'XX.XX.XX.XX:YYYY';
            $username = 'user';
            $password = 'password';
            $database = 'human_resources';

        }
        else {    
            
            $host = 'localhost';
            $username = 'root';
            $password = 'password';
            $database = 'database';
        
        }

        if (!isset($this->conn)) {   

                // Create connection
                $conn = mysqli_connect($host, $username, $password, $database);
                
                // Check connection
                if (mysqli_connect_errno()) {
                    printf("Cannot connect to database server", mysqli_connect_error());
                    exit();
            }

        }
        $this->connection = $conn;  
    }

    public function get_connection() {
        return $this->connection;
    }

    public function close_connection() {

        $this->connection->close();
    }

}
?>
