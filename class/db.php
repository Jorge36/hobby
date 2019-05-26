<?php  

class DB  {  

    protected $connection;

    function __construct($namedb) {

        if ($namedb == "hr") {

            $host = '52.50.23.197:3306';
            $username = 'johnstudent';
            $password = 'cct19';
            $database = 'human_resources';

        }
        else {    
            
            $host = 'localhost';
            $username = 'id9592484_root';
            $password = 'password';
            $database = 'id9592484_user';
        
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