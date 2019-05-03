<?php
require 'simple_html_dom.php';
?>
    <!doctype html>

<?php
    session_start();
?>


    <html lang="en">

    <head>
        <meta charset="utf-8">

        <title>AutoRef - CiteNow</title>
        <meta name="description" content="current description">
        <meta name="author" content="current author">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/tabs.js"></script>

    </head>

    <body>
        
        <img src="images/Screenshot%202019-05-03%20at%2001.45.41.png" style="width:150px;height:100px;float:left;margin-bottom:5%;">
            <div class="topnav">
               
              <a href="logout.php" style="width: 10%;background-color: black;color:white;text-decoration:underline;" class="logout">LOGOUT</a>
              <a href="#" style="width:30%;border-right:2px solid white;"><form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search" style="width:70%;height:15%;">
                  <button type="submit"><i class="fa fa-search"></i>Search</button>
                </form></a>
                <a href="index.php" class="active" style="width: 15%;border-right:2px solid white;font-size:25px;">CITE NOW</a>
                <a href="homepage.php" style="width: 15%;border-right:2px solid white;font-size:25px;">HOME</a>
            </div>
        <br><br><br>
        <br>
        
        <h4>Choose your Harvard Citation Style:</h4>
        
        <div class="tab">
          <button class="tablinks" onclick="openCite(event, 'Website')">Website</button>
          <button class="tablinks" onclick="openCite(event, 'Books')">Books</button>
          <button class="tablinks" onclick="openCite(event, 'Journals')">Journals</button>
        </div>

        <div id="Website" class="tabcontent">
          <br>

        <form name="form" action="" method="post">
            <select id="website-select" name="website-select" style="margin-left:25%;width:50%;height:30px;">
    <option value="0">--Please choose an option--</option>
    <option value="1">Website from url</option>
    <option value="2">Website input</option>
  </select>
            <br><br><br>
            <input hidden type="text" name="subject" id="input-url" value="" placeholder="Insert URL here" class="weburl">
            <br><br>
            <input hidden type="text" name="website" id="input-web-author" value="" placeholder="Insert author (first last)" class="weburl">
            <br><br>
            <input hidden type="text" name="website" id="input-web-year" value="" placeholder="Insert year" class="weburl">
            <br><br>
            <input hidden type="text" name="website" id="input-web-title" value="" placeholder="Insert title" class="weburl">
            <br><br>
            <input hidden type="text" name="website" id="input-web-view" value="" placeholder="Insert date viewed" class="weburl">
            <br><br>
            <input hidden type="text" name="website" id="input-web-date" value="" placeholder="Insert todays date" class="weburl">
            <br><br>
            <input hidden type="text" name="website" id="input-web-url" value="" placeholder="Insert url" class="weburl">
            <br>
            <input hidden id="website-btn" type="submit" value="Generate Citation" class="generate" />

            <input hidden id="website-local" type="button" value="Generate Citation" />

        </form>
        </div>

        <div id="Books" class="tabcontent">
          
            <form name="auto-book" action="" method="post">
            <br>
            <br>
            <label  style="margin-left:8%;">Book Source:</label>
            <br>
            <input type="text" name="book-title-auto" id="auto-book-title" value="" placeholder="Insert title" class="weburl">
            <br><br>
            <input id="Book-btn-auto" type="submit" value="Generate Citation" class="generate" />
        </form>

        <form>
            <br>
            <br>
            <label style="margin-left:8%;">Book Source: </label>
            <br>
            <input type="text" name="book" id="input-book-author" value="" placeholder="Insert author" class="weburl">
            <br><br>
            <input type="text" name="book" id="input-book-year" value="" placeholder="Insert year" class="weburl">
            <br><br>
            <input type="text" name="book" id="input-book-title" value="" placeholder="Insert title" class="weburl">
            <br><br>
            <input type="text" name="book" id="input-book-publisher" value="" placeholder="Insert publisher" class="weburl">
            <br><br>
            <input type="text" name="book" id="input-book-place-publication" value="" placeholder="Insert place of publication" class="weburl">
            <br><br>
            <input id="Book-btn" type="button" value="Generate Citation" class="generate" />
        </form>

            
        </div>

        <div id="Journals" class="tabcontent">
          
           <form name="auto-journal" action="" method="post">
            <br>
            <br>
            <label style="margin-left:8%;">Journal Source:</label>
            <br>
            <input type="text" name="journal-title-auto" id="journal-book-title" value="" placeholder="Insert title" class="weburl">
            <br><br>
            <input id="journal-btn-auto" type="submit" value="Generate Citation" class="generate" />
        </form>

        <form>
            <br>
            <br>
            <label style="margin-left:8%;">Journal Source:</label>
            <br>
            <input type="text" name="journal" id="input-journal-author" value="" placeholder="Insert author" class="weburl" >
            <br><br>
            <input type="text" name="journal" id="input-journal-year" value="" placeholder="Insert year" class="weburl">
            <br><br>
            <input type="text" name="journal" id="input-article-title" value="" placeholder="Insert article title" class="weburl">
            <br><br>
            <input type="text" name="journal" id="input-journal-title" value="" placeholder="Insert journal title" class="weburl">
            <br><br>
            <input type="text" name="journal" id="input-journal-place-publication" value="" placeholder="Insert volume / issue number" class="weburl">
            <br><br>
            <input type="text" name="journal" id="input-journal-page-range" value="" placeholder="Insert page range">
            <br><br>
            <input id="journal-btn" type="button" value="Generate Citation" class="generate" />
        </form> 
            
        </div>

        

        

        <?php
           $option = isset($_POST['website-select']) ? $_POST['website-select'] : false;
   if ($option) {
$url = $_POST['subject'];
       
           
           $select_value = htmlentities($_POST['website-select'], ENT_QUOTES, "UTF-8");
   } else {
       $url = "0";
   }
        
        $option_book = isset($_POST['website-select']) ? $_POST['website-select'] : false;
   if ($option_book) {
           
           $input_title = $_POST['book-title-auto'];
   } else {
       $input_title = "0";
   }
        
                           $input_title_journal = $_POST['journal-title-auto'];
                
                
        function fullUrl_journal($input_title_journal) {
            $search_journal = "https://primo.tug-libraries.on.ca/primo_library/libweb/action/dlSearch.do?institution=GUELPH&vid=GUELPH&search_scope=articles_tab&tab=articles&indx=1&bulkSize=10&dym=true&highlight=true&displayField=title&query=any%2Ccontains%2C";
    $string_journal = strtolower($input_title_journal);
    $string_journal = preg_replace("/[^a-z0-9_\s-]/", "", $input_title_journal);
    $string_journal = preg_replace("/[\s-]+/", " ", $input_title_journal);
    $string_journal = preg_replace("/[\s_]/", "+", $input_title_journal);
            $total_string_journal = $search_journal .$string_journal;
            $html_journal = file_get_html($total_string_journal);
            

            
            echo "<div hidden id='journal-data'>";
            
            foreach($html_journal->find('div > div > h3.EXLResultAuthor') as $journal_data_h) {
            
            echo $journal_data_h;
            
            
        }
                     foreach($html_journal->find('div > div > span.EXLResultDetails') as $journal_data) {
            
            echo $journal_data;
            
            
        }
            
            
            
            echo "</div>";
            
            
            
        }
                
                        if (isset($input_title_journal)) {
            fullUrl_journal($input_title_journal);
}
       
        function fullUrl($input_title) {
            $search_google = "https://www.google.ca/search?ei=wpHEXO7jEMyp5wKe1ZmQAg&q=";
    $string = strtolower($input_title);
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $input_title);
    $string = preg_replace("/[\s-]+/", " ", $input_title);
    $string = preg_replace("/[\s_]/", "+", $input_title);
            $total_string = $search_google .$string ."+book";
            $html = file_get_html($total_string);
            
            foreach($html->find('div > div > div > span') as $publisher) {
                
                
                if ($publisher == '<span class="cC4Myd">Publishers: </span>') {
                    $publisher_span = $publisher->parent;
                    
                    
            $publisher_count = count($publisher_span->find('span a'));
                    
                    
                    
                    if($publisher_count > 1) {
                        
                        $publisher_one_href = $publisher_span->find('span a')[0]->href;
                        
                        
                        
                    } else {
                        $publisher_one_href = $publisher_span->find('span a')->href;
                    }
                    
                    
                    
                    
                    
                    $publisher_one_full_url = file_get_html("https://www.google.com" .$publisher_one_href);
                    
                    
                }
            }

if ($html->find('div > div > div > span a.A1t5ne')) {
    echo "<script type='text/javascript'>" ."var name = '" .$html->find('div > div > div > span a.A1t5ne')[0]->plaintext ."';</script>";
    echo "<div hidden id='bookInfo'>";
        foreach($html->find('div > div > span') as $element) 
       echo $element;
    echo "<script type='text/javascript'>" ."var bookAutoTitle = '" .$input_title ."';</script>";
echo "</div>";
}  
            
}  
        if (isset($input_title)) {
            fullUrl($input_title);
}             
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "<script type='text/javascript'>" ."var givenURL = '" .$_POST['subject'] ."';</script>";
    echo "<script type='text/javascript'>" ."var selectValueEl = '" .$select_value ."';</script>";
    $html = file_get_html($_POST['subject']);
} else {
    $html = file_get_html("http://www.example.com/");
    echo "<script type='text/javascript'>" ."var authorFull;" ."</script>";
    echo "<script type='text/javascript'>" ."var title;" ."</script>";
    echo "<script type='text/javascript'>" ."var givenURL;" ."</script>";
    echo "<script type='text/javascript'>" ."var selectValueEl;" ."</script>";
}
        ?>
            <div hidden id="info-container">
                <?php
                        if($html->find('title')) {
                            
                            echo "<script type='text/javascript'>" ."var title = '" .$html->find('title')[0]->innertext ."';</script>";
} else {
                            echo "<script type='text/javascript'>" ."var title;" ."</script>";
                         
                        }
        
                if($html->find('meta[name=author]')) {
                    
                    echo "<script type='text/javascript'>" ."var authorFull = '" .$html->find('meta[name=author]')[0]->innertext ."';</script>";
} else {
                    
                   echo "<script type='text/javascript'>" ."var authorFull;" ."</script>";
                  echo "<div id='author-name-container'></div>";    
                }
        
        if($html->find('[class=author-name]')) {
            

           echo "<script type='text/javascript'>" ."var authorFull = '" .$html->find('[class=author-name]')[0]->innertext ."';</script>";
} else {
           echo "<script type='text/javascript'>" ."var authorFull;" ."</script>";
                  echo "<div id='author-name-container'></div>";   
            
                }
                

              if($html->find('[class=author-name]')) {
            


} else {
  
            
                }  
              
                
?>
            </div>
            
            <section>
                <h3>Results here:</h3>
                <p id="formatted">change me</p>
            </section>
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <script src="js/scripts.js"></script>
    </body>

    </html>
