

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
    /*if(empty($email)){
        array_push($errors,'Email is required');*/
    
if(count($errors) == 0){
        insertUser(
            $_REQUEST['username'], sha1($_REQUEST['password']), $_REQUEST['name'], $_REQUEST['email']);
        header('location:signup.php');
        }
}
        


    
?> 

<html>
 <div class='bordertop'></div>  
<form action='' method='post'>
<?php echo displayErrors(); ?> 
        <div class='signupdiv'>
        <h2 class='center'> SIGN UP</h2>
       <div class='signupvector'> </div>
            <div><p class='inputnames'>Full Name</p></div>
                <input class='rcorners' type='text' name='name'/><br>
            <div><p class='inputnames'> Email</p></div>
                <input class='rcorners' type='text' name='email'/><br>  
            <div><p class='inputnames'>Username</p></div>
                <input class='rcorners' type='text' name="username"/><br>
            <div><p class='inputnames'>Password</p></div>
                <input class='rcorners' type='password' name='password'/><br>
            <input class='signupbtn' type='submit' name='newSignUp' value='SIGN UP'/> 
             
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='divbig'></div>
<?php
echoFooter()
?>   