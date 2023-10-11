<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Add Employee</title>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="images/logo.png" alt="Regina Fruet">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="view_employees.php">View Employees</a></li>
                </ul>
            </nav>
        </div>
        </div>
    </header>

    <body>
        <form>
            <h1>Employee List</h1>

            <?php
            include("db/db_connect.php");

            $sql = "SELECT * FROM employees";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Company's Name</th>
                        <th>Hours Worked</th>
                      </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo
                    "<tr>
                            <td>" . $row["first_name"] . "</td>
                            <td>" . $row["last_name"] . "</td>
                            <td>" . $row["company_name"] . "</td>
                            <td>" . $row["hours_worked"] . "</td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }

            $conn->close();
            ?>
        </form>
    </body>

    <footer>
        &copy; <?php echo date("Y"); ?> Assignment 1 PHP | Regina Fruet | Student Nº 200552682 |
    </footer>
</body>

</html>