<!Doctype html>

<html>
    
    <head></head>

    <body>
        
        <?php
    
            session_start();

    $username = htmlentities($_POST["username"]);
    $password = htmlentities($_POST["password"]);

$conn = new PDO("mysql:host=localhost;dbname=gurungr;", "gurungr","yoocoera");

$results = $conn->query("SELECT * from Project_database where username = '$username' and password = '$password'");
	$row=$results->fetch();

    if ($row == false)
    {
        echo "Invalid username or password";
        
        // Redirect to the main menu
        header ("Location: homepage.php");
    }
    else 
    {
        $_SESSION["gatekeeper"] =$username;
        
        if ($row["isadmin"] == 1)
        {
            $_SESSION["admin"] =$username;
        }
        
        header ("Location: homepage.php");
    }
        ?>
        
    </body>

</html>