<?php
include('config/init.php');

echoHeader('Login');

if(isset($_REQUEST['attemptLogin'])){
    $userId = attemptLogin($_REQUEST['username'], $_REQUEST['password']);
    
        if ($userId > 0 ){
           $_SESSION['userId'] = $userId; 
           header('location:home.php');
        exit; 
        }
        else{
            echo 'Invalid Login';
        }
}

?> 

<form action='' method='post'>
<div class='bordertop'>
<div class='divround'>
        <div class='color'> <h2 class='center'> Login</h2> </div>
        <div><p>Username</p></div>
                <input class='rcorners' type='text' name='username'/>
                <br>
            <div><p>Password</p></div>
                <input class='rcorners' type='password' name='password'/><br>
                <input type='hidden' name='attemptLogin' value='true'/><br>
            <input type='submit' name='login' value='Login' />
</div>
</form>
<br>
<div class='divbig'></div>

<div class='divbig'></div>

<?php
echoFooter();
