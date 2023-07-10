<?php
include "database.php";
include "StaticVariables.php";

// IMPORTANT  run "php databaseInit.php" in terminal to create database 
//and make  sure that you are in correct folder 

Database::migrate("users", StaticVariables::$user,StaticVariables::$dataForUsers);
Database::migrate("products", StaticVariables::$products,StaticVariables::$dataForProducts);