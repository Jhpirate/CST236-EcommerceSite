<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

echo "Document Root is: " . $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo "ScriptFIleName: " . $_SERVER["SCRIPT_FILENAME"];
echo "<br>";
echo "PATH INFO: " . $_SERVER["PATH_INFO"];
echo "<br>";
echo "REQUEST URI: " . $_SERVER["REQUEST_URI"];
echo "<br>";
echo "PHP_SELF: " . $_SERVER["PHP_SELF"];

echo "<br>";
echo "<br>";

$path = dirname(__FILE__) . DIRECTORY_SEPARATOR;
echo "Path: " . $path;
?>



<a href="/">whereugo</a>
