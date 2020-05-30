<?php
include_once('core/db.php');

function selectState () {
    $sql = "SELECT id, title FROM articles ORDER BY newTime DESC ";
    $data = dbQuery($sql, null);
    $data = $data->fetchAll();

    return $data;
}

function selectStateContent ($id) {
    $sql = "SELECT id, title, content FROM articles WHERE id = '$id'";
    $data = dbQuery($sql, null);
    $data = $data->fetchAll();

    return $data;
}

function insertState ($params) {
    $sql = "INSERT INTO articles (title, content) VALUES (:title, :content)";
    $data = dbQuery($sql, $params);

    return true;
}

function insertStateUpdate ($params, $id) {
    $sql = "UPDATE articles SET title = :title, content = :content, newTime = current_timestamp, redact = '1' WHERE id = '$id'";
    $data = dbQuery($sql, $params);

    return true;
}

function deleteState ($id) {
    $sql = "DELETE FROM articles WHERE id = '$id'";
    $data = dbQuery($sql, null);

    return true;
}

function validate (&$params) {
    $errors =[];
    if (mb_strlen($params['title'], 'UTF-8') < 3) {
        $errors[] = 'Слишком короткое название статьи';
    }

    if (mb_strlen($params['content'], 'UTF-8') < 10) {
        $errors[] = 'Слишком короткий текст статьи';
    }

    $params['title'] = htmlspecialchars($params['title']);
    $params['content'] = htmlspecialchars($params['content']);
    return $errors;
}

function thisState($id) {
    $sql = "SELECT id FROM articles WHERE id = '$id'";
    $data = dbQuery($sql, null);
    $data = $data->fetch();

    return $data;
}