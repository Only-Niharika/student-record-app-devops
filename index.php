<?php
include'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Records</title>
<link rel="stylesheet" href="style.css">
<script>
function submitForm(rollno) {
    document.form1.action = `code.php?mode=update&rollno=${rollno}`;
    document.form1.submit();
}
</script>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Student Records</h1>
        <p>Manage student details with a clean and modern interface</p>
	<p>Made By - Niharika Karkra </p>
   </div>

    <div class="card">
        <h2 class="card-title">Add New Student</h2>
        <form method="POST" action="code.php">
            <div class="form-grid">
                <div class="form-group">
                    <label>Name</label>
                    <input name="sname" placeholder="Enter student name" required />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <input name="class" placeholder="Enter class" required />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input name="address" placeholder="Enter address" required />
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input name="city" placeholder="Enter city" required />
                </div>
            </div>
            <div class="btn-row">
                <input type="submit" name="btnadd" value="Add Student" />
            </div>
        </form>
    </div>

    <div class="card">
        <h2 class="card-title">Student List</h2>
        <div class="table-wrapper">
            <table>
                <tr>
                    <th>S.no.</th>
                    <th>Rollno.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Address</th>
                    <th>City</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                $str = "SELECT rollno, name, class, address, city FROM stdrec";
                $result = mysqli_query($con, $str);
                $srno = 1;

                if (mysqli_num_rows($result) > 0) {
                    while (list($rollno, $name, $class, $address, $city) = mysqli_fetch_row($result)) {
                        echo "<tr>";
                        echo "<td>$srno</td>";
                        echo "<td>$rollno</td>";

                        if (isset($_GET["rollno"]) && $_GET["rollno"] == $rollno) {
                            echo "<form method='POST' name='form1'>";
                            echo "<td><input name='name' value='$name' required /></td>";
                            echo "<td><input name='class' value='$class' required /></td>";
                            echo "<td><input name='address' value='$address' required /></td>";
                            echo "<td><input name='city' value='$city' required /></td>";
                            echo "<td><a class='action-link update' href='javascript:submitForm($rollno)'>Update</a></td>";
                            echo "<td><a class='action-link cancel' href='index.php'>Cancel</a></td>";
                            echo "</form>";
                        } else {
                            echo "<td>$name</td>";
                            echo "<td>$class</td>";
                            echo "<td>$address</td>";
                            echo "<td>$city</td>";
                            echo "<td><a class='action-link edit' href='index.php?rollno=$rollno'>Edit</a></td>";
                            echo "<td><a class='action-link delete' href='code.php?mode=delete&rollno=$rollno' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a></td>";
                        }
                        echo "</tr>";
                        $srno++;
                    }
                } else {
                    echo "<tr><td colspan='8' class='empty-note'>No student records found.</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
