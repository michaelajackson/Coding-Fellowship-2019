

<?php 

include('config/init.php');
echoHeader('Sign up');
if(isset($_REQUEST['newSignUp'])){
    insertUser(
        $_REQUEST['username'], $_REQUEST['password'], $_REQUEST['name'], $_REQUEST['email']

    );
}


?> 

<html>
 <div class='bordertop'></div>  
<form action='' method='post'>
        <div class='divround'>
        <h2 class='center'> Sign Up</h2>
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
<div class='divbig'></div>
<div class='footer'>
    <h3>Sign Up for our Newletters</h3>
 <form action='' method='post'>
    Email:
    <input type='text' name='email'/><br/>
    <input type='submit' name='newEmail' value='Submit'/>
</form> 
</div>
        </form>
   