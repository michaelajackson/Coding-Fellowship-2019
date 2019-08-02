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
            echo "<p class='invalid'>Invalid Login<p>";
        }
}
?> 
<html>
 <div class='bordertop'></div>  
<form action='' method='post'>
        <div class='logindiv'>
        <h2 class='center'> LOGIN</h2>
       <div class='signupvector'> </div>
            <div><p class='inputnameslog'>Username</p></div>
                <input class='rcorners' type='text' name='username'/><br>
            <div><p class='inputnameslog'>Password</p></div>
                <input class='rcorners' type='password' name='password'/><br>
            <input class='signupbtn' type='submit' name='attemptLogin' value='LOGIN'/> 
             
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class='divbig'></div>
<?php
echoFooter()
?>   
