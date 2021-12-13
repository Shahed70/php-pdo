<?php
    require "Tasks.php";
    require "functions.php";

$pdo = connectToDb();    

$tasks = fetchAllTask($pdo);

var_dump($tasks);

include "index.view.php";