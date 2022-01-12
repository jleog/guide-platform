<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes

// GET
$router->get("/getVideo", function() {
    require_once __DIR__ . '/controller/videos.controller.php';
    $id = $_REQUEST['id'];
    die(getVideo($id));
});

$router->get("/getVideoList", function() {
    require_once __DIR__ . '/controller/videos.controller.php';
    die(getVideoList());
});

$router->get("/getArticleList", function() {
    require_once __DIR__ . '/controller/articles.controller.php';
    die(getArticleList());
});

// POST

$router->post("/setArticle", function() {
    require_once __DIR__ . '/controller/articles.controller.php';
    $data = $_REQUEST;
    setNewArticle($data['author'], $data['title'], $data['summary'], $data['published'], time(), time(), time(), $data['content']);
});

$router->post("/setVideo", function() {
    require_once __DIR__ . '/controller/videos.controller.php';
    $name = $_REQUEST['video_name'];
    $title = $_REQUEST['video_title'];
    $desc = $_REQUEST['video_description'];
    die(setVideo($name, "/frontend/static/videos/$name", "anonymous", $title, $desc));
});

// Run it!
$router->run();