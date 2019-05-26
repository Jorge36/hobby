function hideShow() {
    var table = document.getElementById("tabledep");
    for (var i = 1, row; row = table.rows[i]; i++) {
        if (row.style.display != "none") {
            row.style.display = "none";
        } else {
            row.style.display = "";
        }
    }
}


function getEmp() {
    var emp_num = document.getElementById("employee").value;
    if (emp_num == "") {
        //The user doesn't enter data
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "get_employees.php?emp_num=" + emp_num, true);
        xmlhttp.send();
    }
}