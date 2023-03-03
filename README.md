# csci_6560
Banking Management Systems
ONLINE BANK MANAGEMENT SYSTEM using GCP:

The goal of this initiative is to keep the internet banking system, which enables both customers and employees to obtain personal information and manage their accounts.

Database : MySql
Web interface : HTML with PHP.

Requirements: mysql, Xampp server with mysql, php and phpmyadmin setup

Download link for Xampp:
https://www.apachefriends.org/download.html
After installing, xampp, in xampp control panel, start Apache and mysql and we are ready.

1. Create database and create different tables like employee, customer in mysql(phpmyadmin) using db table queries that we have in db file (banking.sql)
Link to access phpmyadmin  :  http://localhost/phpmyadmin/

2. In xampp path, there is working folder htdocs. Create a folder within htdocs and have two files inside
customer_creation.html customer_fetch_bal.html and contact_employee.php.

Ex:

C:\xampp\htdocs\banking\

Here, contact is the folder inside htdocs.

3. Next, run the html page using link : http://localhost/banking/customer_creation.html in any browser.

4. In page, enter customer details which employee need to add to database and click on submit.

5. Check table in phpmyadmin or mysql workbench to see if new customer got added to the table.
