<?php

    include ('connectDB/config.php');

    session_start();

  
  

    

?>

<!DOCTYPE html>
<html>
<head>
	<title>Apply Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="cover.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
<form class = "" action="send.php" method="post"   enctype="multipart/form-data" >
    <div class="cont">
        <div class="form sign-in">
        <h2>Apply Form</h2>

        <label>
            <span>Your Name</span>
            <input type="text" name="name" value="" > 
        </label>

        <label>
            <span>Your Email</span>
            <input type="text" name="email" value="" > 
        </label>

        <label>
            <span>Subject</span>
            <input type="text" name="subject" value="" > 
        </label>

        <label>
            <span>Description</span>
            <!-- <input textarea="text" name="description" cols="40" rows="10"  value=""> -->
            <input type="text" name="message" value="" >
        </label>
            <button class="submit" type="submit" name="submit">Send</button>
        </div>

        <div class="sub-cont">
        <div class="img">
            <div class="img-text m-up">
            <h2>Do you have a CV?</h2>
            <p>Submit your CV and get the opportunity!</p>
            </div>
            <div class="img-text m-in">
            <h2>Don't have any CV?</h2>
            <p>Don't worry about it! Submit your mail and a little bit interest about the program.</p>
            </div>
            <div class="img-btn">
            <span class="m-up">Click Here</span> <br>

            <span class="m-in">Click Here</span>
            </div>
        </div>
        <div class="form sign-up">
            <h2>Apply Form</h2>
            <label>
                <span>Your Name</span>
                <input type="text" name="cvName" value=""> 
            </label> 

            <label>
                <span>Your Email</span>
                <input type="text" name="cvEmail" value=""> 
            </label>

            <label>
                <span>Subject</span>
                <input type="text" name="cvSubject" value="">
            </label>

            <label>
                <span>CV</span>
                <input type="file" class="form-control-file" id="image" name="file" accept=".pdf, .doc, docx">
            </label>

            <button class="submit" type="submit" name="submitt">Send</button>

        </div>
        </div>
    </div>
    <script type="text/javascript" src="scriptt.js"></script>
</form>
 
</body>
</html>