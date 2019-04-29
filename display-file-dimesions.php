<?php

list($width, $height, $type, $attr) = getimagesize("images/Desert.png");

echo "Image width " .$width;
echo "<BR>";
echo "Image height " .$height;
echo "<BR>";
echo "Image type " .$type;
echo "<BR>";
echo "Attribute " .$attr;

?>