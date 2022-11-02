<?php
$fileName =  $_FILES["fileToUpload"]["name"];
$fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);
echo $fileExtension;