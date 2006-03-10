<?php
require_once 'System/Folders/Cached.php';
$sf = new System_Folders_Cached();

//show the path of the config file
echo 'Config file: ' . $sf->getDefaultConfigFile() . "\r\n";

//load the stored settings from last time
$err = $sf->loadFromFile();

echo 'Home:      ' . $sf->getHome() . "\r\n";
echo 'Documents: ' . $sf->getDocuments() . "\r\n";

echo "\r\n";

$doc = $sf->getDocuments();
if (file_exists($doc)) {
    echo "Setting new Documents directory\r\n";
    //Set an own documents directory
    // and save the settings for next time
    $sf->setDocuments('/strange/path/to/MyDocuments/');
    $sf->saveToFile();
    echo 'New Documents directory: ' . $sf->getDocuments() . "\r\n";
    echo "Run this program again to reset the path to default\r\n";
} else {
    //unset the path
    echo "Unsetting the documents directory\r\n";
    $sf->setDocuments(null);
    $sf->saveToFile();
    echo 'New Documents directory: ' . $sf->getDocuments() . "\r\n";
}
?>