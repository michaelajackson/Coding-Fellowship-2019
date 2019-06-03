<?php

function echoHeader($pageTitle){
    echo"
   </head>
   <title>".$pageTitle."</title>
    </head> 
    <link rel='stylesheet' href'https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ'
    crossorigin='anonymous'> 

    <link rel='stylesheet' type='text/css' href='style.css'/>
    <body>
        <h1>COURTYARD COLLECTIVE</h1>
        <div class='dropdown'>
        <button class='dropbtn'>Menu</button>
        <div class='dropdown-content'>
        <a href='home'Home</a>
        </div>
    </div>
        <div class='topnav;topnav a; topnav a:hover;'>
             <ul>
                 <button type='submit' class='searchbutton'><i class='fa fa-search'></i></button>
                 <input class='topnav-right; searchbutton;' type='text' placeholder='Search...'>
                 <a href='home.php'>Home</a>
                 <a href='about.php'>About</a>
                 <a href='issuePage.php'>Issues</a>    
                 <a href='art.php'>Art</a>
                 <a href='Photography.html'>Photography</a>
                 <a href='writing.php'>Writing</a>
                 <a href='submissions.php'>Submissions</a>
             </ul>
                 </div> 
";
}