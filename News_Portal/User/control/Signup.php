<?php 
    $message ='';
    $error = '';

    $fname="";
	$err_fname="";
    $lname="";
	$err_lname="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$pass="";
	$err_pass="";
	$conpass="";
	$err_conpass="";
	
	$hasError=false;

	

if ($_SERVER["REQUEST_METHOD"]== "POST")
    {
	if(empty($_POST["fname"])){
	$hasError=true;	
	$err_fname="Frist Name Required";}
	else if (strlen($_POST["fname"]) <=1){
		$hasError = true ;
		$err_fname = "name must be greater than 1 character";
	}
	else
	{
		$fname=$_POST["fname"];
	}
	
	
	if(empty($_POST["lname"])){
	$hasError=true;	
	$err_lname="Last Name Required";}
	else if (strlen($_POST["lname"]) <=1){
		$hasError = true ;
		$err_lname = "name must be greater than 1 character";
	}
	else
	{
		$lname=$_POST["lname"];
	}
	
	if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		
    if(empty($_POST["email"])){
			$hasError=true;
			$err_email="Email Required";
		}
		elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
             $hasError=true;
			$err_email ="invalid email";
    }
       else
		{
			$email = $_POST["email"];
		}		
	
	if(empty($_POST["phone"])){
			$hasError=true;
			$err_phone="Phone number Required";
		}
		elseif (!is_numeric($_POST["phone"])){
			$hasError = true;
			$err_phone = "Number must be numeric";
		}
		else
		{
			$phone = $_POST["phone"];
		}

	if(empty($_POST["address"])){
			$hasError = true;
			$err_address = "Address Required";
		}
		else{
			$address = $_POST["address"];
		}
	
	
	
	
	if(empty($_POST["pass"])){
	$hasError=true;	
	$err_pass="password Required";}
	else if (strlen($_POST["pass"]) <=4){
		$hasError = true ;
		$err_pass = "password must be greater than 4 character";
	}
	else
	{
		$pass=$_POST["pass"];
	}
	
	
	
	if(empty($_POST["conpass"])){
		$hasError=true;
		$err_conpass="Confirm password Required";
	}
    elseif( $_POST["pass"] != $_POST["conpass"]){
		$hasError=true;
		$err_conpass=" Password not macthed  ";
	}
	else
	{
		$conpass = $_POST["conpass"];
	}

    if(file_exists('User_data.json'))
    {
        $current_data = file_get_contents('User_data.json');
        $array_data = json_decode($current_data,true);
        $extra = array(
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'gender' => $_POST['gender'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'pass' => $_POST['pass'],
            'conpass' => $_POST['conpass']

        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data);
        if(file_put_contents('User_data.json',$final_data))
        {
            $message ="<label class='text-success'>File Signup Successfully</p>";
        }
    }
    else
    {
        $error='Json file not exists' ;
    }
	
	
}
	
	?>