<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO(
                DB_CONNECTION.';dbname='.DB_NAME,
                DB_USERNAME,
                DB_PASSWORD,
                DB_OPTIONS
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}