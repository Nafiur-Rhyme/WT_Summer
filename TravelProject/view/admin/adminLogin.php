<?php
require ("../../control/admin/adminLoginprocess.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Admin Login </h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>Employee ID:</td> 
                        <td><input type = 'text' name = 'empID'></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type='text' name='password' value =></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'Submit'></td>
                        <td><a href = 'adminregister.php'>Not registered yet?</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>