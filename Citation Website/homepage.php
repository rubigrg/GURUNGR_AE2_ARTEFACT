<!Doctype html>
<?php
    session_start();
?>

<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    
    <title>AutoRef</title>
    
</head>

    <body>
        
        <div id="wrapper">
            
             <img src="images/Screenshot%202019-05-03%20at%2001.45.41.png" style="width:150px;height:100px;float:left;margin-bottom:5%;">
            <div class="topnav">
               
              <a href="logout.php" style="width: 10%;background-color: black;color:white;text-decoration:underline;" class="logout">LOGOUT</a>
              <a href="#" style="width:30%;border-right:2px solid white;"><form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search" style="width:70%;height:15%;">
                  <button type="submit"><i class="fa fa-search"></i>Search</button>
                </form></a>
                <a href="index.php" style="width: 15%;border-right:2px solid white;font-size:25px;">CITE NOW</a>
                <a href="homepage.php" class="active" style="width: 15%;border-right:2px solid white;font-size:25px;">HOME</a>
            </div>
            

            <br><br><br>
            
            <div class="personaldetails">
            
            <table style="border:2px solid black;" class="perstbl">
            
            <tr>
                <th>
                    <img src="" style="width:200px; height:200px;">
                </th>
                
                <th>
                    
                <table>
                    <tr>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Name: 
                    </th>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Jenna Smith
                    </th>
                    </tr>
                    
                    <tr>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        University:
                    </th>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Solent University
                    </th>
                    </tr>
                    
                    <tr>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Student ID: 
                    </th>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        1234567890
                    </th>
                    </tr>
                    
                    <tr>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Course:
                    </th>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Web Design and Development
                    </th>
                    </tr>
                    
                    <tr>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Start Date:
                    </th>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        24/09/2015
                    </th>
                    </tr>

                    <tr>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        End Date:
                    </th>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        31/07/2019
                    </th>
                    </tr>
                    
                    <tr>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Contact No:
                    </th>
                  <th style="border:2px solid black;width:40%;height:20px;">
                        07953686543
                    </th>
                    </tr>
                    
                    <tr>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Tutor:
                    </th>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Hayden John
                    </th>
                    </tr>
                    
                    <tr>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        Tutor Email:
                    </th>
                    <th style="border:2px solid black;width:40%;height:20px;">
                        johnhayden@solent.ac.uk
                    </th>
                    </tr>
                    
                    </table>    
                
                </th>
                
            </tr>
                
            </table>
            
            
            </div>
             
     
            
        </div>

        <br><br>
        
        <table style="margin-left:20%;width:60%;">
        
            <h2>CHOOSE YOUR REFERENCING STYLE:</h2>
            
        <tr style="">
        <th style="border-right:2px solid black;">
        <a href="index.php"><button style="width:180px;height:52px;border-right:2px solid white;" class="harvard">Harvard</button></a>
        </th>
            
        <th style="border-right:2px solid black;">
        <button style="width:180px;height:50px;border-right:2px solid white;" class="apa">APA</button>  
        </th>
            
        <th>
        <button style="width:180px;height:50px;" class="mla">MLA</button>    
        </th>
        </tr>
        </table>
        
    </body>
    

</html>