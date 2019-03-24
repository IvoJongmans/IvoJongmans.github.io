<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bestaat mijn baan straks nog?</title>

    <div id="logocontainer">
            <div id="header">
                <h2>Contact</h2>
            </div>   
            <div id="logo">
                <img src="zlogo1.png">         
            </div> 
       </div>

    <link rel="stylesheet" href="contact.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

<body>
    <div id= "navcontainer">

        <div class="topnav">
                <a href="index.html">Home</a>
                <a href="link.html">Test</a>
                <a href=link.html>Resources</a>
                <a class="active" href="contact.html">Contact</a>
              </div>
              
            </div> 

        <div id="formulier">
        <?php
            $naam = $_POST["name"];
            $mail = $_POST["mail"];
            echo "<p id='formzin'>Bedankt $naam voor je bericht. We zullen zo spoedig mogelijk een bericht terug sturen naar $mail."
        ?>
        </div>

      

            
            <div class="footer">
            <footer>
                <div class="topnav">
                     <a href="http://www.facebook.com/" class="fa fa-facebook"></a>
                     <a href="http://www.twitter.com/" class="fa fa-twitter"></a>
                     <a href="http://www.instagram.com/" class="fa fa-instagram"></a>
                     <a href="http://www.linkedin.com/" class="fa fa-linkedin"></a>
                </div>
                </footer>             
            </div> 
            

</body>
</html>