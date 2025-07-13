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

## How to rin the project: 

1. Download and install [XAMPP](https://www.apachefriends.org/index.html)
2. Start `Apache` and `MySQL` from XAMPP Control Panel
3. Open `phpMyAdmin` from: http://localhost/phpmyadmin
4. Create a new database named `information`
5. Inside that database, create a table `employee` with the following structure:
   - `id` INT AUTO_INCREMENT PRIMARY KEY  
   - `name` VARCHAR(255)  
   - `age` INT  
   - `status` TINYINT (default 0)
6. Place the project folder inside `htdocs` (e.g., `C:\xampp\htdocs\your folder name`), for my project:`C:\xampp\htdocs\information`
7. Open your browser and go to: `http://localhost/your folder name/`, for my project:`C:\xampp\htdocs\information`
8. The site will appear as follows:
* Above is the connection success message
* A box to enter the employee's name and age with the Submit button next to it.
* A table containing the ID, name, age - entered from the previous boxes - and status with a toggle button to toggle 0 to 1 and vice versa
* You can see the results of the site and what it looks like from [here](Simple-php-Database-App/tree/main/Results%20Screenshots))


 
