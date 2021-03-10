<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "../../Utility/header.php";

session_destroy();
header("location:../../index.php");
