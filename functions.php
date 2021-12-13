<?php

function connectToDb()
{
    try {
        return new PDO("mysql:host=localhost; dbname=users", 'root', 'root');
    } catch (PDOException $e) {
        die("Could not connect to the database " . $e->getMessage());
    }
}

function fetchAllTask($pdo)
{
    $sql = "SELECT * FROM userlist";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, "Tasks");
}
