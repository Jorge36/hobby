<?php  
session_start();
include_once('./class/db.php');
include_once('./class/departments.php');


// get the q parameter from URL
$emp_num = $_GET["emp_num"];

$db = new DB("hr");
$con = $db->get_connection();
$dep = new Departments();
$deps = $dep->get_emp_work_for_dept($con, $emp_num);
                                
foreach($deps as $x => $x_value) {
                                
    echo '<tr>';
        
    foreach($x_value as &$value) {

        echo '<td>'.$value.'</td>';  

    }
    echo '<tr>';
}
$db->close_connection();

?>

