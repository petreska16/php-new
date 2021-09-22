<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<p>";
echo "this is a paragraph";
echo "</p>";

$open_paragraph = "<p>";
echo $open_paragraph;
echo "open paragraph";
echo "</p>";
$name= "Ivana" ;
echo "Ivana" ;
echo $name;

echo "<p>" ;
echo "ivana petreska";
echo "</p>" ;

$open_paragraph ="<p>";
$content = "this is paragraph, and i am putting more text <br> to be more long to see what will happend" ;
$content1 = "one content more";
$close_paragraph = "</p>" ;
echo $open_paragraph . $content . "<br>" . $content1 . $close_paragraph


    ?>
</body>
</html>
<?php
//echo "hello" ;
//$name= "World";
//$name= "How are you?<br>";

//echo "World" . "How are you";
//echo $name.$name;


