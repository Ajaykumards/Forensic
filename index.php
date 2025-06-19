
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fronesic</title>
    <style>
       body
        {
           background-image: url("immo-wegmann-SYavdrX_doU-unsplash.jpg");
           background-size: cover;
        }
        .for
        {
        padding: 121px;
        margin: auto;
        width: 189px;
        height: 300px;
        margin-top: -20px;
        position: relative;
        opacity: 0.99;
        top: 200px;
        border-radius: 67px;
        border: 4px solid #ffffff;
    
    }
     
    .for input{
    height: 40px;
    width: 200px;
    border-radius: 20px;
    margin: 4%;
    color: rgb(181, 0, 0);
    border-style:ridge;
    background-size: 3px;
    position: relative;
    top: 55px;
    background-color: rgb(231, 231, 231);
     }

    .for input:hover{
    box-shadow: 5px 5px 5px rgb(145, 10, 122);
}

.sub input
{
width: 89px;
position: relative;
margin: 15px;
left: 45px;
}

.email input
{
  
    background-repeat: no-repeat;
    background-size: 88%;
    position: relative;
    bottom: 1%;   
}

#male
{
    width: 30px;
}

#female
{
    width: 30px;
}

#se
{
    position: relative;
    left: 19px;
}

#pass
{
    position: relative;
    top: 90px;
}

.for{
    animation: col 3s ease-in-out 1s infinite forwards;
}


@keyframes col {
    0%
    {
        background: radial-gradient(circle,#4c14b5,#ff0000);

    }
    25%
    {
       background: linear-gradient(to right,#1c9aff,#b55a0541);
    }
    50%
    {
        background: radial-gradient(circle,#0bd272,#59138c);
    }
    100%
    {
        background: linear-gradient(to right,#a105725b,#ff00ff);
    }
    
}

.h1{
    background-color: #d85364;
    height: 9vh;
    border: 2px solid black;
    border-radius: 50% 50%;
    text-align: center;
    margin: 10px;
    background: linear-gradient(to right,#e4e429,#2a115d84);
    
}

</style>
</head>
<body>
    <div class="h1">
    <h1>FORONESIC</h1>
</div>
    <form action="Acess.php" method="post">
    <div class="back">
    <div class="for">
        <h1 style="font-style: italic; text-decoration:underline;">Login Form</h1>
        <input type="text" placeholder="Enter the name" name="name" ><br>
        <div class="email">
        <input type="email" placeholder="Enter valid email" name="email"><br>
    </div>
    <div>
        <input type="password" name="pass" placeholder="Enter the password" id="pass">
    </div>
    <div>
        <select name="" id="se" name="g">
            <option value="">Select Gender</option>
            <option value="">Male</option>
            <option value="">Female</option>
        </select>
    </div>
        <div class="sub">
        <a href="fr.php"><input type="submit" name="login"></a>
    </div>
    </div>
</div>
</form>
</body>
</html>