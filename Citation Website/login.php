<!Doctype html>
<?php
    session_start();
?>

<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/main.js"></script>
    <script src="js/forgotpassword.js"></script>
    <script src="js/register.js"></script>
    
    <title>AutoRef</title>
    
</head>
<?php
    if ( isset ($_SESSION["gatekeeper"]))
    {
        echo "<li><a href='logout.php'> LOGOUT </a></li>";
    }
?>
    
    <body>
        <br><br>
        
        <img src="images/Screenshot%202019-05-03%20at%2001.45.41.png" style="width: 150px; height:100px; margin-left:45%;">
        
        
        <div id="wrapper">
    
            <br>
        
            <h1>Please Login to access this site:</h1>
            
            <br>

            <div class="loginform">
                <fieldset>
                    <br><br>
            <div class="login">
               <form method="post" action="loginsuccess.php" >
                <div class="formtext" >Username:</div><input name="username" required/><br>
                   <br>
                <div class="formtext">Password:</div><input name="password" type="password" required /><br>
                   <br>
                <input type="submit" value="Login!" class="logsub"/>
                </form>
                <br>
                <table>
                   <tr>
                    
                       <th style="width:70%;">
                       <div class="popup" onclick="myFunction()">Forgot Password?
                      <span class="popuptext" id="myPopup">Popup text...</span>
                        </div>
                        </th>
                       
                       <th style="width:80%;">
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="registerbtn">REGISTER</button>

                        <div id="id01" class="modal">

                          <form class="modal-content animate" action="/action_page.php">
                            <div class="imgcontainer">
                              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            </div>

                            <div class="container">
                              <label for="uname"><b>Username</b></label>
                              <input type="text" placeholder="Enter Username" name="uname" required>

                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="psw" required>

                              <button type="submit">Register!</button>
                            </div>

                            <div class="container" style="background-color:#f1f1f1">
                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

                            </div>

                            </form></div>
                       </th>
                       
                    </tr>
                </table>
                
            </div>
                </fieldset>
            </div>
            <br>
        </div>
    </body>
    

</html>