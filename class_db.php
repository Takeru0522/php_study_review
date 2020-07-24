<?php

class Model {
    public $dbh;

    public function __construct() {
        $this->dbconnect();
    }
    // DBに接続するためのメソッド
    public function dbconnect() {
        $host = 'localhost';
        // $dbname = "phpkiso";
        $dbname = "todo";
        $charset = "utf8mb4";
        $user = 'root';
        $password = '';
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        try {
            // db接続
            $this->dbh = new PDO($dsn, $user, $password);
            echo 'DBに接続されました';
        } catch (\PDOException $e) {
            echo 'DBに接続できませんでした';
            var_dump($e->getMessage());
            exit;
        }
    }
    public function getAll() {
        $stmt = $this->dbh->prepare('SELECT * FROM ' . 'tasks' . ' ORDER BY created DESC');
        // 準備したSQLを実行する
        $stmt->execute();
        // 実行結果を取得
        $tasks = $stmt->fetchAll();
        return $tasks;
    }

}
$model = new Model();
$tasks = $model->getAll();

var_dump($tasks);