<?php
require_once './config.php';

// getters

function getArticle($id) {
    global $db;
    $stmt = $db->query("SELECT * FROM articles WHERE id=$id");
    return json_encode($stmt->fetch());
}

function getArticleList() {
    global $db;
    $stmt = $db->query("SELECT * FROM articles");
    $out = [];

    while($row = $stmt->fetch()) {
        array_push($out, $row);
    }
    return json_encode($out);
}


// setters 

function setNewArticle($author, $title, $summary, $published, $create_at, $update_at, $published_at, $content) {
    global $db;
    $sql = "INSERT INTO articles (authorId, title, summary, published, create_at, update_at, published_at, content) VALUES (?, ?, ?)";
    $sth = $db->prepare($sql);
    $sth->execute([
        $author,
        $title,
        $summary,
        $published,
        $create_at,
        $update_at,
        $published_at,
        $content
    ]);
}
