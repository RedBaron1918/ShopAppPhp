<?php
include "database.php";
include "StaticVariables.php";


Database::migrate("users", StaticVariables::$user,StaticVariables::$dataForUsers);
Database::migrate("products", StaticVariables::$products,StaticVariables::$dataForProducts);