<?php

//set random name for the image, used time() for uniqueness

$filename =  'img-' . time() . '.jpg';
$filepath = '../saved_images/';

move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);

echo $filepath.$filename;
?>
