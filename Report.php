<?php 
  include_once 'header.php';
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="styleviewBlog.css">
</head> 
<body>
    <section class ="blog" id="blog">    
                <form method = "POST" action="addReport.php" id="formId"  required>
                   <div id = "blog">
                    <fieldset id="entry" >
                        <legend id="ask"> Report a Problem </legend>
                        
                        <p>
                          <input type="text" name="title" style='display:block; width:auto;' placeholder= "Title" size="100" required/>   
                        </p>
                      <p>
                        <textarea cols="96" rows="14" name ="text" style='display:block; width:auto;' placeholder="Enter your text here..." class ="text" required>  
                        </textarea>  
                      </p>                    
                      <p>                      
                      <input type="submit" onclick="return preventSubmit();">
                      <input type="reset" onclick="return confirm_reset();">
                      </p>  
                   </div>
                   <script src="clear.js"></script>
                   <script src="preventSubmit.js"></script>
        
                  </fieldset>
             
          </form>
       
                  </section>
               </body>
      </html>
      