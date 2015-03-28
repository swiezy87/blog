
<!--**
 * Created by PhpStorm.
 * User: ja
 * Date: 2015-03-23
 * Time: 19:37
 */-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
?>

<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=blogowa", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>
<?xml version="1.0" encoding="UTF-8"?>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="styl.css" />
</head>
<body>

<div id="container"> <!-- container div contains all the content divs -->

    <div id="navarea"><!-- Div containing the main navigation -->
        <ul id="nav">
            <li><a href="" title="Start">home</a></li>
            <li><a href="" title="about">about</a></li>
            <li><a href="" title="archive">archive</a></li>
            <li><a href="" title="contact">contact</a></li>
            <li><a href="" title="links">links</a></li>
        </ul> <!-- menu area -->
    </div> <!-- End of navarea -->


    <div id="hdr"> <!-- This is the banner/header area -->
        <span id="sitetitle"></span>
        <br />
        <span id="subtitle">funky blog template by</span>
    </div><!-- end of heading area -->

    <div id="lftcol"> <!-- left column -->

        <div class="leftcolbox"> <!-- left column item -->
            <div class="leftcolboxtop">
            </div> <!-- This div adds the top rounded corners of the box -->
            <h2>Left Column</h2>
            <p>This is a left column item.  You could put anything in here you like including images, text or links.</p>
        </div><!-- end of left column item -->

        <div class="leftcolbox"> <!-- left column item -->
            <div class="leftcolboxtop">
            </div> <!-- This div adds the top rounded corners of the box -->
            <h2>Useful links:</h2>
            <p>
                <a href="http://www.w3schools.com/">Go to School</a><br />
                <a href="http://www.oswd.org/">OSWD</a><br />
                <a href="http://www.oswd.org/userinfo.phtml?user=drd">The Author</a><br />
                <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Validate the CSS">CSS</a><br />
                <a href="http://validator.w3.org/check?uri=referer" title="Validate the XHTML">XHTML</a>
            </p>
            <br />   <!-- this line break fixes an IE bug when you mouse over the links -->
        </div><!-- end of left column item -->

        <div class="leftcolbox"> <!-- left column item -->
            <div class="leftcolboxtop">
            </div> <!-- This div adds the top rounded corners of the box -->
            <h2>Layout divs</h2>
            <p>
                Red = #navarea<br />
                Orange = #hdr<br />
                Grey = #lftcol<br />
                Blue = #maincol<br />
                Green = #bttmbar<br />
                <br />
                <!--<img src="images/divs.gif" alt="divs image" /> --><!-- Image showing overview of divs -->
            </p>
        </div><!-- end of left column item -->
    </div><!-- end of left column -->



    <div id="maincol"> <!-- Main column -->
        <h1>Blog
        </h1>
            <?php
                $stm = $conn->query('SELECT data, tresc FROM temat');
                foreach ($stm as $row) {
                    print '<p class="date">'. $row['data'].'</p>';
                    print '<h1>'.$row['tresc'].'</h1>';
                    print '<p><a href="" title="read more">Read more </a></p>';
                    print '<div class="rule"></div>'; //<!-- A div is used instead of the old <hr /> tag so that the rule works as an image -->
                }
            ?>

    </div> <!-- end of main column -->


    <div id="bttmbar"> <!-- Bottom bar for copyright and bottom navigation -->
        <span id="copyright"> jakiś tekst</span><!-- Add your copyright here -->
    </div>


</div> <!-- end of container div -->

</body>
</html>