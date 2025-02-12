<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <style>
        body {
            background-color:rgb(41, 30, 32); 
            color:rgb(98, 163, 206); 
            font-size: 1.5rem; 
        }
        .container {
            background-color: #F5F5DC; 
            margin-top: 3rem; 
            padding: 3rem; 
            box-shadow: 0 0 0.5rem rgba(0, 183, 255, 0.1); 
        }
        h2 {
            font-size: 2rem; 
        }
        label {
            display: block;
            margin-top: 1rem;
        }
        input[type="number"], input[type="text"] {
            display: block;
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.5rem;
        }
        input[type="submit"] {
            background-color:rgb(230, 247, 4); 
            color:rgb(228, 9, 9);
            font-size: 1.5rem; 
            font-weight: bold; 
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            margin-top: 1rem;
        }
        input[type="submit"]:hover {
            background-color:rgb(131, 153, 52); 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Your Data</h2>
        <form action="process.php" method="post">
            <label for="number">Enter a number (e.g., birth year):</label>
            <input type="number" name="number" required><br><br>

            <label for="text">Enter a text message:</label>
            <input type="text" name="text" required><br><br>

            <input type="submit" value="Solve the Puzzle">
        </form>
    </div>
</body>
</html>