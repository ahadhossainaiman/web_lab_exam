<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="maths">Maths(GPA):</label>
    <input type="number" id="maths" name="maths" min="0" max="100" step="0.01" required>
    <br>
    <label for="science">Science(GPA):</label>
    <input type="number" id="science" name="science" min="0" max="100" step="0.01" required>
    <br>
    <label for="english">English(GPA):</label>
    <input type="number" id="english" name="english" min="0" max="100" step="0.01" required>
    <br>
    <button type="submit">Submit</button>
</form>

</body>
</html>
