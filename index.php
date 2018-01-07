<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Aurum 2k17: The official Techno-Cultural Fest of GNDU, Amritsar</title>
    <meta name="description" content="Guru Nanak Dev University presents much awaited technical fest " />
     <meta name="keywords" content="Aurum,Gndu,GuruNanakDevUniversity,Guru Nanak Dev University,Tech-fest,">
  
    <meta name="author" content="CESS">
 
     
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <link rel="stylesheet" type="text/css" href="css/panel.css">
  

   


    <link href="css/templatemo_style.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">


  </head>
<body style= "background:url('01.svg'),black;background-repeat: no-repeat; background-attachment: fixed;
    background-position: 50% 50%; ">





    <?php include("nav.php"); ?>
    <div class="time" style='position:relatie;top:545px;'>

        <span id="days">12</span>(Days)
       
                <span id="hours">04</span>(Hours)
                <span id="minutes">12</span>(Min)
                <span id="seconds" style="color:#82dbff">22</span>(Seconds)
                <br>
                
                </div>




  <div class="ajax-load"  >



  </div>
              
        


    

   
    



 
<script 
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous" ></script>
<script async
  src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<script async src="js/script.js"></script> 
<!-- Latest compiled and minified JavaScript -->
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script async src="js/jquery.singlePageNav.min.js"></script>
<script async src='https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js'></script>
<script async src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
<script async src='https://cdnjs.cloudflare.com/ajax/libs/buzz/1.2.0/buzz.min.js'></script>
<script async src="js/slide.js"></script> 














<script type="text/javascript">
 function countdown(){
                var now = new Date();
                var eventDate = new Date(2017, 01, 24);

                var currentTiime = now.getTime();
                var eventTime = eventDate.getTime();

                var remTime = eventTime - currentTiime;

                var s = Math.floor(remTime / 1000);
                var m = Math.floor(s / 60);
                var h = Math.floor(m / 60);
                var d = Math.floor(h / 24);

                h %= 24;
                m %= 60;
                s %= 60;

                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
                s = (s < 10) ? "0" + s : s;

                document.getElementById("days").textContent = d;
                document.getElementById("days").innerText = d;

                document.getElementById("hours").textContent = h;
                document.getElementById("minutes").textContent = m;
                document.getElementById("seconds").textContent = s;

                setTimeout(countdown, 1000);
            }
            countdown();


</script>


</body>
</html>



