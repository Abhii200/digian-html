<html>
    <head>
        <title>Login</title>
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
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
    </head>
    <body>
    <div class="container">
        <h2>Login Page</h2>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br><br>
            
            <input type="submit" name="upload" value="Login to upload syllabus">
            <input type="submit" name="sub" value="Login to upload Notes">

        </form>
    </div>
        
        <?php
// Check if the form is submitted
if (isset($_POST['upload']) ){
    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // You should replace these with your actual user credentials validation logic
    $validUsername = "tej";
    $validPassword = "123";
    
    // Check if the provided username and password are valid
    if ($username === $validUsername && $password === $validPassword) {
        // Successful login, redirect to a protected page
        header("Location: adminsyllabus.php");
        exit;
    } else {
        // Invalid login, display an error message
        echo "Invalid username or password. Please try again.";
    }
}

if (isset($_POST['sub']) ){
    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // You should replace these with your actual user credentials validation logic
    $validUsername = "tej";
    $validPassword = "123";
    
    // Check if the provided username and password are valid
    if ($username === $validUsername && $password === $validPassword) {
        // Successful login, redirect to a protected page
        header("Location: adminnotes.php");
        exit;
    } else {
        // Invalid login, display an error message
        echo "Invalid username or password. Please try again.";
    }
}
?>
        
    </body>
</html>