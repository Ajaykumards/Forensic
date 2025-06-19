<?php

if(isset($_POST['caseNumber'])){
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "CaseEntry";

$con = mysqli_connect($server,$user,$pass,$dbname);
if(!$con)
{
    echo "Database is not Connected".mysqli_connect_error();
}

else
{
    echo "<font color:red>Database is Connected";
}
$number = $_POST['caseNumber'];
$casetitle = $_POST['caseTitle'];
$des = $_POST['caseDescription'];
$assign = $_POST['assignedTo'];
$date = $_POST['dateOpened'];
$status = $_POST['status'];


$sql = "INSERT INTO `CaseEntry`.`CaseData` (`CaseNumber`, `CaseTitle`, `CaseDescription`, `Date`, `Status`, `Assigned To`) VALUES ('$number', '$casetitle', '$des', '$date', '$status', '$assign')";
if($con->query($sql))
{
    echo "SucessFully Inserted";
}

else
{
    "ERROR :";
}

$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Entry Form</title>
    <style>
        body {
         font-family: Arial, sans-serif;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         margin: 0;
         background-image: url("national-cancer-institute-XknuBmnjbKg-unsplash.jpg");
         background-size: cover;
        }

.form-container {
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    border:4px solid white;
}

form {
    display: flex;
    flex-direction: column;
}

h2 {
    margin-bottom: 20px;
    text-align: center;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="date"],
textarea,
select {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}
textarea {
    resize: vertical;
}

button {
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #218838;
}

    </style>
</head>
<body>
    <div class="form-container">
        <form action="submitcase.php" method="post">
            <h2 style="color: white;" >Case Entry Form</h2>
            <label for="caseNumber" style="color:white">Case Number</label>
            <input type="text" id="caseNumber" name="caseNumber" required>

            <label for="caseTitle"  style="color:white">Case Title</label>
            <input type="text" id="caseTitle" name="caseTitle" required>

            <label for="caseDescription"  style="color:white">Case Description</label>
            <textarea id="caseDescription" name="caseDescription" rows="4" required></textarea>

            <label for="dateOpened"  style="color:white">Date Opened</label>
            <input type="date" id="dateOpened" name="dateOpened" required>

            <label for="status"  style="color:white">Status</label>
            <select id="status" name="status" required>
                <option value="open">Open</option>
                <option value="in_progress">In Progress</option>
                <option value="closed">Closed</option>
            </select>

            <label for="assignedTo"  style="color:white">Assigned To</label>
            <input type="text" id="assignedTo" name="assignedTo"  required>

            <button type="submit">Submit Case</button>
        </form>
    </div>
</body>
</html>