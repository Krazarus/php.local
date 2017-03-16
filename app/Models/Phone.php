<?php
namespace App\Models;

use App;
use Connection;
use PDO;
Class Phone
{
    public function update($table, $id, $fields) {
        $set = '';
        $x = 1;
        foreach($fields as $name => $value) {
            $set .= "{$name} = ?";
            if($x < count ($fields)) {
                $set .= ', ';
            }
            $x++;
        }

        $pdo = Connection::make(App::get('config')['database']);

        $statement = $pdo->prepare("UPDATE {$table} SET {$set} WHERE id = {$id}");

        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public static function getTable()
    {
        $pdo = Connection::make(App::get('config')['database']);
        $statement = $pdo->prepare("SELECT c.*, u.first_name, u.last_name FROM phones c, persons u WHERE c.person_id=u.id");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }
}

