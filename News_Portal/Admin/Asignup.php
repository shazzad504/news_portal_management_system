<?php 
include 'Signup.php';
?>

<html>

    <head>
	     <title >Admin Sign up Form</title>
	</head>
	
	<body>
	<form  action=" " method="post">
        <?php 
        if(isset($error))
        {
            echo $error;
        }

        ?>
		<p align="right"><a href="../Homepage.php">Home Page</a></p>
	
		<table style="width:300px; height:500px;background-color:#7bbcc9; border:2px black solid;" align="center" >
            <tr>
                <caption><h2>Admin Signup Form </h2></caption>
				
            </tr>
            <tr>
                <td style="color:blue;">First Name  </td>
                <td ><input name="fname"  value="<?php echo $fname ?>" type="text"  placeholder="Enter Frist Name" >
                <br><span style="color:red;"><?php echo $err_fname; ?></span></td>
            </tr>
            <tr>
                <td style="color:blue;">Last Name  </td>
                <td ><input name="lname" value="<?php echo $lname ?>" type="text"  placeholder="Enter Last Name">
                <br><span style="color:red;"><?php echo $err_lname; ?></span></td>
            </tr>
            
            <tr>
                <td style="color:blue;" > Gender  </td>
                <td ><input type="radio" value= "Male" <?php if($gender=="Male") echo "checked" ;?> name="gender">Male 
                    <input type="radio" value="Female" <?php if($gender=="Female") echo "checked" ;?> name="gender">Female		<br>
                <span style="color:red;"><?php echo $err_gender; ?></span></td>
            </tr>
            
            
            <tr>
                <td style="color:blue;">Email</td>
                <td><input name="email" value="<?php echo $email;?>" placeholder="Email" type="text" ><br>
                <span style="color:red;"><?php echo $err_email;?> </span></td>
                    </tr>
                    
            <tr>
                <td style="color:blue;" >Phone</td>
                    <td> 
                        <input name="phone" value="<?php echo $phone;?>" type="text"  placeholder=" Phone Number"><br>
                    <span style="color:red;"><?php echo $err_phone;?></span>
                </td>
                    
             </tr>
            
            
            <tr>
                <td style="color:blue;">Address</td>
                    <td> <textarea name="address" placeholder="address"><?php echo $address;?></textarea>
                        <br><span style="color:red;"><?php echo $err_address;?></span>
                    </td>
                        
            </tr>
            
            
            <tr>
                <td style="color:blue;">Password</td>
                <td><input name="pass" placeholder="password" value="<?php echo $pass;?>" type="password"><br>
                    <span style="color:red;"><?php echo $err_pass;?></span></td>
            </tr>

            <tr>
                <td style="color:blue;" >Confirm Password</td>
                <td><input name="conpass" placeholder="confirm password" value="<?php echo $conpass;?>" type="password"><br>
                    <span style="color:red;"><?php echo $err_conpass;?> </span></td>
            </tr>
            
            
        
            
            <tr>
                <td  colspan="2" align="center">
                <input type="submit" name="submit" value="Sign Up" class="btn">
                </td>
            </tr>
            <tr>
                <td  colspan="2" align="center">
                <p>You have an account please <a href="Asignin.php">Login</a></p>
                </td>
            </tr>
            
        <?php 
        if(isset($message))
        {
            echo $message;
        }
            
        ?>

        </table>	
	</form>			
	</body>
</html>