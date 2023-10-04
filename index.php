<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.style.css">
    <title>Crud - Khushbu</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="./action/formAction.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" placeholder="Enter your first name...">
        <br><br>

        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="Enter your last name...">
        <br><br>

        <label for="contact">Contact</label>
        <input type="tel" name="contact" id="contact" placeholder="Enter your Contact...">
        <br><br>

        <label for="email">email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email...">
        <br><br>

        <button name="submit" value="submit">Submit</button>

        
    </form>
</body>
</html>