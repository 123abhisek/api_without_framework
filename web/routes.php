<?php

require __DIR__ . '/db.php';

$db = new MySQLConnection();

function listRecipes() {
    global $db;
    $recipes = $db->listRecipes();
    echo json_encode($recipes);
}

function display() {
    echo json_encode("abhishek");
}

function createRecipe() {
    global $db;
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['name']) || !isset($data['prep_time']) || !isset($data['difficulty']) || !isset($data['vegetarian'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid data']);
        return;
    }

    if (!in_array($data['difficulty'], [1, 2, 3])) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid difficulty level']);
        return;
    }

    $insertedId = $db->createRecipe($data);
    echo json_encode(['insertedId' => $insertedId]);
}

function getRecipe($vars) {
    global $db;
    $recipe = $db->getRecipe($vars['id']);
    echo json_encode($recipe);
}

function updateRecipe($vars) {
    global $db;
    $data = json_decode(file_get_contents('php://input'), true);

    if (empty($data)) {
        http_response_code(400);
        echo json_encode(['error' => 'No data to update']);
        return;
    }

    $db->updateRecipe($vars['id'], $data);
    echo json_encode(['message' => 'Recipe updated successfully']);
}

function deleteRecipe($vars) {
    global $db;
    $db->deleteRecipe($vars['id']);
    echo json_encode(['message' => 'Recipe deleted successfully']);
}

function rateRecipe($vars) {
    echo 'Rate recipe with ID: ' . $vars['id'];
}
