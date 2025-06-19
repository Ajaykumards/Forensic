<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forensic DBMS</title>
    <style>
       
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0px;
    background-color: #f4f4f4;
    background-image: url("img/DBMS.jpg");
    background-size:cover;
}
header {
    background-color: #333;
    color: #fff;
    padding: 1rem 0;
    text-align: center;
}
nav ul {
    list-style-type: none;
    padding: 0;
}
nav ul li {
    display: inline;
    margin-right: 10px;
}
nav ul li a {
    text-decoration: none;
    color: #fffbfb;
}
main {
    padding: 2rem;
   color: #fffbfb;
}
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
    position: fixed;
    width: 100%;
    bottom: 0;
}
    </style>
</head>
<body>
    <form action="fcr.php" method="post">
    <header>
        <h1>Forensic DBMS</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="caseentryform.php">Cases</a></li>
            <li><a href="Evidence.php">Evidence</a></li>
        </ul>
    </nav>
    <main>
        <h2>Welcome to the Forensic DBMS</h2>
        <p>Manage forensic cases and evidence efficiently.</p>
    </main>
    <footer>
        <p>&copy; 2024 Forensic DBMS</p>
    </footer>
    
</form>
</body>
</html>