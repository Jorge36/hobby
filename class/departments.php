<?php  

//include_once('db.php');

class Departments  {  

    public function __construct() {  
    }  
  
        
    public function get_departments($con) {  
        
        $sql = "SELECT * FROM departments";
        $result = $con->query($sql);
        $departments = array();

        if ($result ->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    $departments[$row["dept_no"]] = $row["dept_name"];
                }
        }
        return $departments; 
    }

    public function get_emp_work_for_dept($con, $emp) {  
        
        $sql = "SELECT * FROM human_resources.dept_emp WHERE emp_no = '$emp'";
        $result = $con->query($sql);
        $emp = array();

        if ($result ->num_rows > 0) {
                $i = 1;
                while($row = $result->fetch_assoc()) {
                    $emp[$i] = array($row["emp_no"], $row["dept_no"], $row["from_date"], $row["to_date"]);
                    $i++;
                }
        }
        return $emp; 
    }      

}  
  
?>