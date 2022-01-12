<?php
require_once './config.php';


function getVideo($id) {
    global $db;
    
    $stmt = $db->query("SELECT * FROM video_list WHERE id=$id");
    $out = $stmt->fetch();

    return json_encode($out);
}

function getVideoList() {
    global $db;
    $stmt = $db->query("SELECT * FROM video_list");
    $out = [];
    
    while($row = $stmt->fetch()) {
        array_push($out, $row);
    }
    return json_encode($out);
}

function setVideo($name, $path, $creator, $title="video", $description=" ") {
    global $db;
    $sql = "INSERT INTO video_list (title, path, creator, name, description) VALUES (?, ?, ?, ?, ?)";
    $sth = $db->prepare($sql);
    $out = [
        "success" => $sth->execute([
            $title,
            $path,
            $creator,
            $name,
            $description
        ])
        ];
    return json_encode($out);
}