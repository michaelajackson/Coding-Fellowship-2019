

<?php 

include('config/init.php');
echoHeader('Sign up');
$errors=array();
global $errors;
if(isset($_REQUEST['newSignUp'])){
    
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
   
    if(empty($username)){
        array_push($errors, 'Username is required');
    }
    if(empty($password)){
        array_push($errors, 'Password is required');
    }
    if(empty($name)){
        array_push($errors,'Name is required');
    }
    if(empty($email)){
        array_push($errors,'Email is required');
    }
if(count($errors) == 0){
        insertUser(
            $_REQUEST['username'], $_REQUEST['password'], $_REQUEST['name'], $_REQUEST['email']);
        header('location:signup.php');
        }
}
        


    
?> 

<html>
 <div class='bordertop'></div>  
<form action='' method='post'>
<?php echo displayErrors(); ?> 
        <div class='divround'>

       <div class='color'> <h2 class='center'> Create Account</h2></div>
        <p class='center'>Please fill this form to create an account</p>
            <div><p>Full Name</p></div>
                <input class='rcorners' type='text' name='name'/><br>
            <div><p> Email</p></div>
                <input class='rcorners' type='text' name='email'/><br>  
            <div><p>Username</p></div>
                <input class='rcorners' type='text' name="username"/><br>
            <div><p>Password</p></div>
                <input class='rcorners' type='password' name='password'/><br>
            <input type='submit' name='newSignUp' value='Sign up'/> 
             
</div>
<br>
<div class='divbig'></div>
<?php
echoFooter()
?>   