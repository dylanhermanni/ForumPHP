<?php
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>FIFA forum</title>
</head>
<body>
    <!--Header -->
<section id="header">
    <img id="FIFAa" src="img/FIFA_Flag.svg.png">
    <a id="menu"><a href="index.php">Home |</a> <a href="topic1.php">Pagina 1 |</a> <a href="Pagina2.php">Pagina 2 |</a> <a href="Pagina3.php">Pagina 3 |</a> <a href="Pagina4.php">Pagina 4</a>
    <section id="Login">
        <form>
            <input type="submit" value="Login"> <br>
            <input type="submit" value="Registreren">
        </form>
    </section>

     <!-- Twitter feed -->
 </section>

    <section id="Feed">
        <a class="twitter-timeline"  href="https://twitter.com/search?q=knvb" data-widget-id="872777043850801153">Tweets over knvb</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    </section>
</section>

    <!--Infoblok homepage -->
<section id="info">
    Dit forum gaat over de federale voetbal bond
</section>

    <!--Footer -->
<section id="Footer">
    <br>Copyright© Dylan Hermanni <br>2017/2018
</section>

</body>
</html>

