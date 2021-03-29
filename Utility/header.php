<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU Project
 */
$sessionPath = $_SERVER["DOCUMENT_ROOT"] . "/Utility/phpSessionTemp";
session_save_path($sessionPath);
session_start();
