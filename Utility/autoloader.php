<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

// GREAT RESOURCE FOR AUTOLOADER
// https://www.youtube.com/watch?v=z3pZdmJ64jo
// Actually taught me what it is, how to make. Much better than GCU...

spl_autoload_register('autoloadModels');
spl_autoload_register("autoLoadDAO");

function autoloadModels($className) {
    // $_SERVER['DOCUMENT_ROOT'] to get to the root folder structure
    $path = $_SERVER['DOCUMENT_ROOT'] . "/BusinessServices/Model/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}


// TODO Should eventually load business layer, not DataAccess directly
function autoLoadDAO($className) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/DataAccess/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}