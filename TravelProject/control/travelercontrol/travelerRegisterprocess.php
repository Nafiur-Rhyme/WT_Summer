<?php

    
    $firstNameError = "";
    $lastNameError = "";
    $unameError = "";
    $ageError = "";
    $emailError = "";
    $passwordError = "";
    $phoneError = "";

    if(isset($_POST["submit"]))
    {
        $firstName = $_REQUEST["firstName"];
        $lastName = $_REQUEST["lastName"];
        $uname = $_REQUEST["uname"];
        $age = $_REQUEST["age"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $phone = $_REQUEST["phone"];


        if(empty($_REQUEST["firstName"]))
        {
            $firstNameError = "This fild is required";
        }
        else
        {
            $firstNameError = "Your first name is " . $firstName ."<br>";
        }

        if(empty($_REQUEST["lastName"]))
        {
            $lastNameError = "This fild is required"."<br>";
        }
        else
        {
            $lastNameError = "Your last name is " . $lastName ."<br>";
        }

        if(empty($_REQUEST["uname"]))
        {
            $unameError = "This fild is required"."<br>";
        }
        else
        {
            $unameError = "Your user name is " . $uname ."<br>";
        }

        if(empty($_REQUEST["age"]))
        {
            $ageError = "This fild is required";
        }
        else
        {
            $ageError = "Your age is " . $age ."<br>";
        }

        if(empty($_REQUEST["email"]))
        {
            $emailError = "Email should not be empty"."<br>";
        }
        else
        {
            $emailError = "Email is " . $email."<br>";
        }

        if(strlen($_REQUEST["password"]) <6)
        {
            $passwordError = "Password should be more than 6 characters" ."<br>";
        }
        else
        {
            $passwordError = "Password Saved" ."<br>";
        }  

        if(empty($_REQUEST["phone"]))
        {
            $phoneError = "This fild is required";
        }
        else
        {
            $phoneError = "Your user name is " . $phone ."<br>";
        }

        $file = "";
        if(empty($_FILES["myfile"]["name"]))
        {
            $fileError= "No file attached";
        }    
        else
        {
            if(move_uploaded_file($_FILES['myfile']['tmp_name'], "../upload/".$_FILES["myfile"]["name"])) 
            {  
                $file = "../Projects/".$_FILES["myfile"]["name"]; 
            } 
            else
            {  
                echo "Sorry, file not uploaded, please try again!" . "<br>";  
            }
        }
        
    }
?>