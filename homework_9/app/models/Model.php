<?php

namespace app\models;

use PDO;
use Dotenv\Dotenv;

abstract class Model {

    private function connect() {
        // Load environment variables from the .env file
        if (file_exists(__DIR__ . '/../../.env')) {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();
        }

        // .env
        $host = getenv('DBHOST');
        $dbname = getenv('DBNAME');
        $user = getenv('DBUSER');
        $pass = getenv('DBPASS');

        $string = "mysql:hostname=$host;dbname=$dbname";
        $con = new PDO($string, $user, $pass);
        return $con;
    }

    public function query($query, $data = []) {
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }
}
?>
