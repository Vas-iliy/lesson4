<?php

function selectCat () {
    $sql = "SELECT id_cat,title_cat FROM cats ";
    $data = dbQuery($sql, null);
    $data = $data->fetchAll();

    return $data;
}

function insertCat ($params) {
    $sql = "INSERT INTO cats (title_cat) VALUES (:title_cat)";
    $data = dbQuery($sql, $params);

    return true;
}

//Все что ниже может делать только Админ

function deleteCat ($id) {
    $sql = "DELETE FROM cats WHERE id = '$id'";
    $data = dbQuery($sql, null);

    return true;
}

function insertCatUpdate ($params, $id) {
    $sql = "UPDATE cats SET title_cat = :title WHERE id = '$id'";
    $data = dbQuery($sql, $params);

    return true;
}
