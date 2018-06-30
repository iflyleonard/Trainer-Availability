<?php
// This file contains the details of the Database. Fill in this to make the CMS work, else it wont.
// Added by Leonard, 12.05.2018
/* Database connection settings */
$host = 'localhost';
$user = 'designx_admin';
$pass = 'designx';
$db = 'ivao';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
