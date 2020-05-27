<?php
include_once ('db.php');

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

function insertStateUpdate ($params) {
    $sql = "UPDATE articles SET title = :title, content = :content, newTime = current_timestamp, redact = '1'";
    $data = dbQuery($sql, $params);

    return true;
}

function deleteState ($id) {
    $sql = "DELETE FROM articles WHERE id = :id";
    $data = dbQuery($sql, $id);

    return true;
}
