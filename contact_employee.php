<?php
    $con = mysqli_connect('localhost', 'root', 'Kmit123$','bankingsystem');

    $txtId = $_POST['customerid'];
    $txtFirstname = $_POST['firstname'];
    $txtLastname = $_POST['lastname'];
    $txtCity = $_POST['city'];
    $txtContactnumber = $_POST['contactnumber'];
    $txtEmail = $_POST['email'];
    $txtpass=$_POST['pass_word'];
    $txtDateofbirth = $_POST['dateofbirth'];
    $txtZip = $_POST['Zip'];



    $sql = "INSERT INTO `customer` (`Cust_ID`, `F_Name`, `L_Name`, `City`, `Contact_Number`,`Email`, `Date_of_Birth`,`Zip`) VALUES ('$txtId' ,'$txtFirstname', '$txtLastname' , '$txtCity' ,
                                                '$txtContactnumber' , '$txtEmail' , '$txtDateofbirth' , '$txtZip')";


    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        echo "Contact Records Inserted";
    }

?>                                          

