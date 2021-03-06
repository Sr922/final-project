<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<form action="index.php?page=accounts&action=register" method="post">
    First name: <input type="text" name="fname" pattern=".{1,}" title="First name must have at least 1 character" required><br>
    Last name: <input type="text" name="lname" pattern=".{1,}" title="Last name must have at least 1 character" required><br>
    Email: <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid email id" required><br>
    Phone: <input type="text" name="phone" maxlength="10" pattern="[0-9]+$" title="Invalid Phone Number"><br>
    Birthday: <input type="date" name="birthday"><br>
    Gender: <!-- <input type="text" name="gender"><br> -->&nbsp;&nbsp;
    <input type="radio" name="gender" value="male" checked> Male&nbsp;&nbsp;
    <input type="radio" name="gender" value="female"> Female&nbsp;&nbsp;
    <input type="radio" name="gender" value="other"> Other<br>
    Password: <input type="password" name="password" pattern=".{6,}" title="Password must be at least 6 characters" required><br>
    <input type="submit" value="Submit form">
</form>


<script src="js/scripts.js"></script>
</body>
</html>
