<?php

function echoHeader($pageTitle){
    echo"
   </head>
   <title>".$pageTitle."</title>
    </head> 
    <link rel='stylesheet' href=<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <link rel='stylesheet' type='text/css' href='style.css'/>
    <body>
    <div class='parent'>    
        <h1 class='child'>COURTYARD COLLECTIVE</h1>
        <a href='signup.php'><div class='child p1 rightborder '> Sign up</div></a>
        <a href='login_page.php'><div class='child p1 '> Login</div></a>
    </div>
        <div class='dropdown'>
        <button class='dropbtn'><i class='fas fa-bars'></i></button>
        <div class='dropdown-content'>
        </div>
    </div>
    
        <div class='topnav;topnav a; topnav a:hover;'>
             <ul>
                 <button type='submit' class='searchbutton'><i class='fa fa-search'></i></button>
                 <input class='topnav-right; searchbutton;' type='text' placeholder='Search...'>
                 <a href='home.php'>Home</a>
                 <a href='about.php'>About</a>
                 <a href='issuePage.php'>Issues</a>
                 <a href='category.php' class='dropdown dropbtn dropdown-content'>Categories</a>
                 <a href='submissions.php'>Submissions</a>
                
             </ul>
                 </div> 
";
}
