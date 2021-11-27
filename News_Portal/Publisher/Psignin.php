<?php 
include 'login.php';
?>

<html>
<body>

<form  action="" method="post">
<p align="right"><a href="../Homepage.php">Home Page</a></p>
    <table style="width:300px; height: 250px;background-color:#7bbcc9; border:2px black solid;" align="center">

        <caption><h2 align ="center">Publisher Sign In Form </h2><br></caption>
        <tr>
            <td style="color:blue;"> Email </td>
            <td><input name="email" id="email" placeholder="Enter Email" value="<?php echo $email;?>" type="text" ><br>
            <span style="color:red;"><?php echo $err_email;?> </span></td>
        </tr>
        <tr>
            <td style="color:blue;"> Password </td>
            <td><input type="password" name="pass" id="pass" placeholder="Enter Password" value="<?php echo $pass;?>" ><br>
            <span style="color:red;"><?php echo $err_pass;?> </span></td>

        </tr>
        <tr>
            <td colspan="2" align="left" style="color:green">
                <input type="checkbox" name="remember" value="1">Remember Me</input>  
            </td>
        </tr>
        <tr> 
            <td  colspan="2" align="center">
                <input type="submit" value="Login" name="login">
            </td>
        </tr> 
        <tr>
            <td  colspan="2" align="center">
                <p>You have no account Please <a href="Psignup.php">Signup</a></p>
            </td>
        </tr>
            
    </table>


</form>
</body>
</html>
