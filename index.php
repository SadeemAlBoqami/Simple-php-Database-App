<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Table</title>
</head>
<body>

<h2>Add Employee</h2>
<form action="insert.php" method="POST">
    Name: <input type="text" name="name" required>
    Age: <input type="number" name="age" required>
    <input type="submit" value="Submit">
</form>

<hr>

<h2>Employee List</h2>
<table border="1">
    <tr>
        <th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th>
    </tr>

    <?php
    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            # $statusText = ($row['status'] == 1) ? "Active" : "Inactive";

            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['status']}</td>
                    <td><a href='toggle.php?id={$row['id']}'>Toggle</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
    ?>
</table>

</body>
</html>


