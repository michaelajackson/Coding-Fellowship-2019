<?php
include('config/init.php');

echoHeader('Login');

if(isset($_REQUEST['attemptLogin'])){
    $userId = attemptLogin($_REQUEST['username'], $_REQUEST['password']);
    $_SESSION['userId'] = $userId;

echo "You are logged in as ".$userId['username']."
<a href='user_profile.php?'>Go to your profile</a>"
; 
exit; 

}


/*$username = '';
$password = '';
$username_err = '';
$password_err = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
}*/

?> 

<form action='' method='post'>
<div class='bordertop'>
<div class='divround'>
        <h2 class='center'> Login</h2>
        <div><p>Username</p></div>
                <input class='rcorners' type='text' name='username'/><br>
            <div><p>Password</p></div>
                <input class='rcorners' type='password' name='password'/><br>
                <input type='hidden' name='attemptLogin' value='true'/>
            <input type='submit' name='login' value='login'/>   
</div>
</form>
 
<div class='divbig'></div>

<div class='divbig'></div>

<?php
echoFooter();
