<?php
namespace App\Conexao;
use PDO;
use PDOException;

class Conexao
{
    private static $dsn = "mysql:host=localhost;dbname=produtos";
    private static $username = "root";
    private static $password = "";

    private static PDO $pdo;

 
    public static function conexao()   
    {
        if (!isset(self::$pdo)) {
            try {

                self::$pdo = new PDO(self::$dsn, self::$username, self::$password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                

            } catch (PDOException $e) {
                echo "erro ao conectar" . $e->getMessage();
            }
           

        }
        return self::$pdo;
    }

}

