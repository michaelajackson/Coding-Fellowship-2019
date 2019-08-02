<?php
function echoHeader($pageTitle){
    echo"
   </head>
   <title>".$pageTitle."</title>
    </head> 
    <link rel='stylesheet' href=<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <link rel='stylesheet' type='text/css' href='style.css'/>
    <body>
    <div class='imgpost'> </div>   
        <h1>COURTYARD COLLECTIVE</h1>
        <a href='signup.php'><div class='signup '> Sign up</div></a>
        <a href='login_page.php'><div class='login '> Login</div></a>
   
        <div class='dropdown'>
        <button class='dropbtn'><i class='fas fa-bars'></i></button>
        <div class='dropdown-content'>
        </div>
    </div>
        <div class='topnav;topnav a; topnav a:hover;'>
           
    
                 
                 <a class= 'home' href='home.php'>Home</a>
                 <a class='about' href='about.php'>About</a>
                 <a class=' categories' href='issuePage.php'>Issues</a>
                 <a class= 'issue' href='category.php'>Categories</a>
                 <a class='submissions' href='submissions.php'>Submissions</a>
                 <a class='shop' href='https://courtyardcollective.bigcartel.com/'>Shop</a>
                
             
                 </div> 
";
}
