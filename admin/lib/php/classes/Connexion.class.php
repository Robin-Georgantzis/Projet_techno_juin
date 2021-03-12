<?php

class Connexion
{
    private static $_instance = null;

    public static function getInstance($dsn,$user,$password)
    {
        // :: veut dire que c'est la manière d'atteindre une variable statique
        if(!self::$_instance)
        {
            try
            {
                self::$_instance = new PDO($dsn,$user,$password);
            }
            catch(PDOException $e)
            {
                print "Echec : ".$e->getMessage();
            }
        }
        return self::$_instance;
    }
}