<?php

class MySQLConnection {
    private $pdo;

    public function __construct() {
        $host = 'localhost';
        $dbname = 'php_test';
        $username = 'root';
        $password = '';

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $this->pdo = new PDO($dsn, $username, $password, $options);
    }

    public function listRecipes() {
        $stmt = $this->pdo->query("SELECT * FROM recipes");
        return $stmt->fetchAll();
    }

    public function createRecipe($data) {
        $stmt = $this->pdo->prepare("INSERT INTO recipes (name, prep_time, difficulty, vegetarian) VALUES (?, ?, ?, ?)");
        $stmt->execute([$data['name'], $data['prep_time'], $data['difficulty'], $data['vegetarian']]);
        return $this->pdo->lastInsertId();
    }

    public function getRecipe($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM recipes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateRecipe($id, $data) {
        $fields = [];
        $values = [];

        foreach ($data as $key => $value) {
            $fields[] = "$key = ?";
            $values[] = $value;
        }

        $values[] = $id;

        $stmt = $this->pdo->prepare("UPDATE recipes SET " . implode(', ', $fields) . " WHERE id = ?");
        return $stmt->execute($values);
    }

    public function deleteRecipe($id) {
        $stmt = $this->pdo->prepare("DELETE FROM recipes WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
