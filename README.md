# csci_6560
ONLINE BANK MANAGEMENT SYSTEM:

The goal of this initiative is to keep the internet banking system, which enables both customers and employees to obtain personal information and manage their accounts.

Database : MySql
Web interface : HTML with PHP.

Requirements: mysql, Xampp server with mysql, php and phpmyadmin setup

Download link for Xampp:
https://www.apachefriends.org/download.html
After installing, xampp, in xampp control panel, start Apache and mysql and we are ready.

1. Create database and create different tables like employee, customer in mysql(phpmyadmin) using db table queries that we have in db file (banking.sql)
Link to access phpmyadmin  :  http://localhost/phpmyadmin/

2. In xampp path, there is working folder htdocs. Create a folder within htdocs called bank.

Ex:

C:\xampp\htdocs\bank\

Here, bank is the folder inside htdocs.

3. Create a new database naming mybank.

4. Import the provided SQL file. The file is known as mybank.sql located inside the db folder.

5. Next, run the html page using link : http://localhost/bank/login.html in any browser.

6. In page, enter customer details which employee need to add to database and click on submit.

7. Check table in phpmyadmin or mysql workbench to see if new customer got added to the table.
