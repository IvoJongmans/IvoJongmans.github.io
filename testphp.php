<!doctype html>
<html lang="en">
<head>


    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Uitslag</title>

    <link rel="stylesheet" href="testphp.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>

<div id="logocontainer">
     <div id="header">
         <h2>Test Uitslag</h2>
     </div>   
     <div id="logo">
         <img src="zlogo1.png">         
     </div> 
</div>

<!--Navigatiemenu -->

<div id= "navcontainer">
  <div class="topnav">
    <a href="index.html">Home</a>
    <a class="active" href="test.html">Test</a>
    <a href=link.html>Resources</a>
    <a href="contact.html">Contact</a>
  </div>        
</div> 

 
    <?php  
    
    if (isset($_POST["geslacht"])) {
        if ($_POST["geslacht"] === "1") {
            $x = 10;
        } else if ($_POST["geslacht"] === "2") {
            $x = 10;
        } else if ($_POST["geslacht"] === "3") {
            $x = 10;
        } 
    }      

    $leeftijd = $_POST["leeftijd"];

    if (isset($_POST["opleiding"])) {
        if ($_POST["opleiding"] === "1") {
            $y = 10;
        } else if ($_POST["opleiding"] === "2") {
            $y = 20;
        } else if ($_POST["opleiding"] === "3") {
            $y = 30;
        } else if ($_POST["opleiding"] === "4") {
            $y = 50;
        } 
    }
    
    if (isset($_POST["sector"])) {
        if ($_POST["sector"] === "1") {
            $z = 10;
        } else if ($_POST["sector"] === "2") {
            $z = 20;
        } else if ($_POST["sector"] === "3") {
            $z = 50;
        } else if ($_POST["sector"] === "4") {
            $z = 50;
        }
    } 

    $score = $x + $y + $z + $leeftijd;  
    $percentage = round(($score / 209) * 100);
      
     ?>
    
    <h1>SCORE ROBOTISERINGSTEST: <?php echo $percentage ?>%</h1>
    
    <div id="uitslagcontainer">
        
      <script type="text/javascript">
        var score = "<?php echo $percentage ?>";
        var container = document.getElementById("uitslagcontainer");
        
          
        if (score <= 50) {
            document.write("<p>Op basis van onze calculaties en mogelijkheid om in de toekomst te kijken hebben wij geconcludeerd dat u zich de komende jaren geen zorgen hoeft te maken om uw baan kwijt te raken aan vervelende robots.</p><p>Om deze positie ten opzichte van de robots te behouden raden wij u aan eens naar de volgende informatie te kijken die wij speciaal voor u geselecteerd hebben:</p><p><a href='linkgroen.html'>Mogelijkheden</a></p>");
            container.style.backgroundColor = "#99ffa3";
            var kleur = "groen";
        }
        else {
            document.write("<p>ERROR! ERROR! ERROR! Op basis van onze calculaties en mogelijkheid om in de toekomst te kijken hebben wij geconcludeerd dat u zich de komende jaren <b>WEL</b> zorgen moet maken om uw baan kwijt te raken aan vervelende robots.</p><p>Om u te helpen bij strijd tegen deze metalen werkafpakkers kunnen we u het volgende aanbieden:<p><a href='linkrood.html'>Mogelijkheden</a></p>");
            container.style.backgroundColor = "#ff8766";
            var kleur = "rood";
          }       
        
      </script>
    </div>
    
    <div id="gaterug">
        <a href="test.html"><button>Terug naar Test</button></a>
    </div>
    
    <footer>
            <div class="footer">
            
                <div class="topnav">
                     <a href="http://www.facebook.com/" class="fa fa-facebook"></a>
                     <a href="http://www.twitter.com/" class="fa fa-twitter"></a>
                     <a href="http://www.instagram.com/" class="fa fa-instagram"></a>
                     <a href="http://www.linkedin.com/" class="fa fa-linkedin"></a>
                </div>
                          
            </div> 
            </footer>
    
    
    
</body>
</html>