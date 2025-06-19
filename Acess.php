<html>
<head>
    <title>PHP Background Color</title>
    <style>
        body {
              
             background-image: url("/img/fron.jpg");
             background-size:cover;
             opacity:0.89;  
          }
       div h1
       {
          color:blue;
          font-weight:1000px;
          font-style:italic;
       }
 
       body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #1a1a1a;
    color: #ffffff;
    font-family: Arial, sans-serif;
}

.animated-heading {
    font-size: 3em;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    overflow: hidden;
    white-space: nowrap;
    font-style:italic;
    border-right: 0.15em solid #ffffff;
    animation: typing 4s steps(40, end), blink-caret 0.75s step-end infinite;
}

@keyframes typing {
    from { width: 0; }
    to { width: 100%; }
}

@keyframes blink-caret {
    from, to { border-color: transparent; }
    50% { border-color: #ffffff; }
}

    </style>
</head>
<body>
 <h1 class="animated-heading">Welcome to Forensic Department</h1>
</body>
<?php
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['pass'];
 if(($a=="" || $b=="") && ($b=="" || $c=="") && ($c=="" || $a==""))
{
echo"<center><font color= blue><h1>Fill up the login Form</h1></center>";
}
 else if($a=="")
{
echo"<center><font color = red><h1>Enter your name</h1></center>";
}
else if($b=="")
{
echo"<center><font color = red><h1>Enter your email</h1></center>";
}
else if($c=="")
{
echo"<center><font color = red><h1>Enter valid password</h1></center>";
}
else if($c=="9535")
{
echo"<font background= brown>";

echo"<center><font color = red><h1>ACESS GRANTED</h1></center>";
 $page = "Dataentry.php";
    $text = "Data Entry";
    echo"<center><h1><a href='$page'>$text</a></h1></center>";
}

else
{
echo"<center><font color = red><h1>ACESS NOT GRANTED<br>PASSWORD IS INCORRECT</h1></center>";
}
?>
<?php
$back = "index.php";
$page = "GO BACK";
echo"<center><a href='$back'<font color=red><h1>$page</h1></a></center>"; 
?>
</html>