# Simple-php-Database-App
Connect a MySQL database with PHP and display it in a web page, with the ability to enter and update data, using XAMPP and php my admin.

## Explaining project files:
1. [db.php](Simple-php-Database-App/blob/main/db.php):This file is responsible for establishing the connection to the MySQL database using MySQLi.
It is included in the rest of the PHP files so that each script can execute its queries on the same connection.

2. [insert.php](Simple-php-Database-App/blob/main/insert.php): This script receives the data entered from the HTML form (name and age) and saves it to the database within the employees table where:
	- POST_$ is used to receive the data.
	- Checks that the data is not null.
	- Executes SQL INSERT queries to save the data.
	- Redirects the user to index.php after input.

3. [index.php](Simple-php-Database-App/blob/main/index.php):
   The main interface of the project where you view the model, view the data, and associate the toggle, through:
- Displays an input form for the employee's name and age.
- Displays all employee data stored in the database in a table.
- Each row is associated with a "Toggle" button that sends the employee's number to update their status between 0 and 1.

4. [toggle.php](Simple-php-Database-App/blob/main/toggle.php):Handles the "Toggle" button for each row, so that:
	- Receives the employee ID (id) from the URL via $_GET
	- Reads its current state (status).
	- Inverts it from 0 to 1 or from 1 to 0.
	- Updates the new value in the database.
	- It then redirects the user to index.php.

 
