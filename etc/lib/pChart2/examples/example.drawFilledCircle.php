<?php

/* CAT:Drawing */

/* pChart library inclusions */
include("../class/pDraw.class.php");
include("../class/pImage.class.php");

/* Create the pChart object */
$myPicture = new pImage(700, 230);

/* Draw the background */
$Settings = array("R" => 170, "G" => 183, "B" => 87, "Dash" => 1, "DashR" => 190, "DashG" => 203, "DashB" => 107);
$myPicture->drawFilledRectangle(0, 0, 700, 230, $Settings);

/* Overlay with a gradient */
$Settings = array("StartR" => 219, "StartG" => 231, "StartB" => 139, "EndR" => 1, "EndG" => 138, "EndB" => 68, "Alpha" => 50);
$myPicture->drawGradientArea(0, 0, 700, 230, DIRECTION_VERTICAL, $Settings);
$myPicture->drawGradientArea(0, 0, 700, 20, DIRECTION_VERTICAL, array("StartR" => 0, "StartG" => 0, "StartB" => 0, "EndR" => 50, "EndG" => 50, "EndB" => 50, "Alpha" => 80));

/* Add a border to the picture */
$myPicture->drawRectangle(0, 0, 699, 229, array("R" => 0, "G" => 0, "B" => 0));

/* Write the picture title */
$myPicture->setFontProperties(array("FontName" => "../fonts/Silkscreen.ttf", "FontSize" => 6));
$myPicture->drawText(10, 13, "drawCircle() - Transparency & colors", array("R" => 255, "G" => 255, "B" => 255));

/* Draw some filled circles */
$myPicture->drawFilledCircle(100, 125, 50, array("R" => 213, "G" => 226, "B" => 0, "Alpha" => 100));
$myPicture->drawFilledCircle(140, 125, 50, array("R" => 213, "G" => 226, "B" => 0, "Alpha" => 70));
$myPicture->drawFilledCircle(180, 125, 50, array("R" => 213, "G" => 226, "B" => 0, "Alpha" => 40));
$myPicture->drawFilledCircle(220, 125, 50, array("R" => 213, "G" => 226, "B" => 0, "Alpha" => 20));

/* Turn on shadow computing */
$myPicture->setShadow(TRUE, array("X" => 1, "Y" => 1, "R" => 0, "G" => 0, "B" => 0, "Alpha" => 20));

/* Draw a customized filled circles */
$CircleSettings = array("R" => 209, "G" => 31, "B" => 27, "Alpha" => 100, "Surrounding" => 30);
$myPicture->drawFilledCircle(480, 60, 19, $CircleSettings);

/* Draw a customized filled circles */
$CircleSettings = array("R" => 209, "G" => 125, "B" => 27, "Alpha" => 100, "Surrounding" => 30);
$myPicture->drawFilledCircle(480, 100, 19, $CircleSettings);

/* Draw a customized filled circles */
$CircleSettings = array("R" => 209, "G" => 198, "B" => 27, "Alpha" => 100, "Surrounding" => 30, "Ticks" => 4);
$myPicture->drawFilledCircle(480, 140, 19, $CircleSettings);

/* Draw a customized filled circles */
$CircleSettings = array("R" => 134, "G" => 209, "B" => 27, "Alpha" => 100, "Surrounding" => 30, "Ticks" => 4);
$myPicture->drawFilledCircle(480, 180, 19, $CircleSettings);

/* Render the picture (choose the best way) */
$myPicture->autoOutput("pictures/example.drawFilledCircle.png");
?>