<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        *{
            background-color: palevioletred;

        }
        .lab{
            font-size: xx-large;
            font-style: italic;
            font-weight: 1000;
            margin-right: auto;
            
        }
        .buttom{
            color: black;
        }
        </style>
</head>
<body>
    <center>
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label class="lab" for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label  class="lab" for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label  class="lab" for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <button type="submit">Register</button>
    </form>
</center>
</body>
</html>
