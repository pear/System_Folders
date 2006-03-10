<?php
/**
*   Test application for System_Folders
*
*   @author Christian Weiske <cweiske@php.net>
*/
require_once 'System/Folders.php';

$sf = new System_Folders();

$arData = array(
'Username'         => $sf->getUserName(),
'Home'             => $sf->getHome(),
'Documents'        => $sf->getDocuments(),
'Shared documents' => $sf->getSharedDocuments(),
'Temp'             => $sf->getTemp(),
'Desktop'          => $sf->getDesktop(),
'AppData'          => $sf->getAppData(),
'Programs'         => $sf->getPrograms(),
'Windows'          => $sf->getWindows()
);

echo 'System: ' . $sf->getSys() . "\r\n";
var_dump($arData);
?>
