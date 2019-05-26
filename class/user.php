<?php  

//include_once('db.php');

class User  {  

    public function __construct() {  
    }  
  
    public function login($user, $pass, $con) {  

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $con->prepare('SELECT username, password FROM login WHERE username = ?')) {
            
            // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	        $stmt->bind_param('s', $user);
	        $stmt->execute();
	        // Store the result so we can check if the account exists in the database.
	        $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($username, $password);
                $stmt->fetch();
                // Account exists, now we verify the password.
                // Note: remember to use password_hash in your registration file to store the hashed passwords.
                if ($pass === $password) {
                    // Verification success! User has loggedin!
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['id'] = $username;
                    return true;
                } else {
                    return false; 
                }
            } else {
                return false; 
            }
            $stmt->close();

        }
    }  
    
    public static function session() {  
        if (isset($_SESSION['loggedin'])) {  
            return $_SESSION['loggedin'];  
        }  
    }  
  
    public static function logout() {  
        unset($_SESSION['loggedin']);
        unset($_SESSION['id']);  
        session_destroy();  
    }  

    public static function is_loggedin()
    {
       if(isset($_SESSION['loggedin']))
       {
          return true;
       }
    }

}  
  
?>