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
    </header>


    <form action="add_employee.php" method="POST">
    
        <h1>Add Employee</h1>

        <label for="first_name">Employee Name:</label>
        <input type="text" id="first_name" name="first_name" placeholder="First Name" required>

        <label for="last_name">Hours Worked:</label>
        <input type="text" id="last_name" name="last_name" placeholder="Last Name" required> 

        <label for="company_name">Company's Name:</label>
        <input type="text" id="company_name" name="company_name" placeholder="Company's Name" required>

        <label for="hours_worked">Hours Worked:</label>
        <input type="text" id="hours_worked" name="hours_worked" placeholder="Hours Worked" required> 

        <br><br>

        <button type="submit">Add Employee</button>
    </form>

    <footer>
        &copy; <?php echo date("Y"); ?> Assignment 1 PHP | Regina Fruet | Student Nº 200552682 | 
    </footer>
</body>

</html>