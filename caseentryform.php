<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Entry Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
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
        <form action="StoragecaseEntrydata.php" method="POST">
            <h2>Case Entry Form</h2>
            <label for="caseNumber">Case Number</label>
            <input type="text" id="caseNumber" name="caseNumber" required>

            <label for="caseTitle">Case Title</label>
            <input type="text" id="caseTitle" name="caseTitle" required>

            <label for="caseDescription">Case Description</label>
            <textarea id="caseDescription" name="caseDescription" rows="4" required></textarea>

            <label for="dateOpened">Date Opened</label>
            <input type="date" id="dateOpened" name="dateOpened" required>

            <label for="status">Status</label>
            <select id="status" name="status" required>
                <option value="open">Open</option>
                <option value="in_progress">In Progress</option>
                <option value="closed">Closed</option>
            </select>

            <label for="assignedTo">Assigned To</label>
            <input type="text" id="assignedTo" name="assignedTo" required>

            <button type="submit">Submit Case</button>
        </form>
    </div>
</body>
</html>