<?php

$data = file_get_contents('data.json');
$request_method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$parts = parse_url($uri);


parse_str($parts['query'], $params);
// print_r($params);

$exploded_parts = explode('/', $parts['path']);
print_r($exploded_parts);

switch($request_method) {
    case 'GET':
        get_recipes();
        break;
    case 'POST':
        add_new_recipe();
        break;
    case 'PUT':
        update_recipe();
        break;
    case 'DELETE':
        remove_recipe();
        break;
    default:
        echo json_encode(array('message' => 'An error has occurred'));
        break;
}

function get_recipes() {
    if(!isset($GLOBALS['exploded_parts'][2])) {
        echo $GLOBALS['data'];
    } else {
        echo json_encode(array('recipe' => 'here is your recipe'));
    }
}

function add_new_recipe() {
    $new_recipe = array (
        "id" => $_POST['id'],
        "snackname" => $_POST['snackname'],
        "image" => $_POST['image'],
        "ingredients" => $_POST['ingredients'],
        "instructions" => $_POST['instructions']
    )
};

function update_recipe() {
    $updated_recipe = array (
        "id" => $_PUT['id'],
        "snackname" => $_PUT['snackname'],
        "image" => $_PUT['image'],
        "ingredients" => $_PUT['ingredients'],
        "instructions" => $_PUT['instructions']
    )
};

function remove_recipe() {
    $removed_recipe = array (
        "id" => $_DELETE['id'],
        "snackname" => $_DELETE['snackname'],
        "image" => $_DELETE['image'],
        "ingredients" => $_DELETE['ingredients'],
        "instructions" => $_DELETE['instructions']
    )
};

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';


?>