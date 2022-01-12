<?php

require_once './includes/lang.php';
require_once './includes/utils.php';

if($id = $_REQUEST['showVideo']) {
    $data = curlget("/backend/getVideo?id=$id");
    $data = json_decode($data);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['learn_page_title'] ?></title>
    <link rel="stylesheet" href="./static/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/player-chrome"></script> 
    
    
    
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                clifford: '#da373d',
            }
            }
        }
        }
    </script> 
</head>
<body> 
   
    <nav id="main-nav" class="fixed top-0 container text-center flex justify-between py-3">
    <div class="flex-initial w-48">
      <button class=" px-3 py-2 text-gray-500 text-bold text-2xl">Chapter 1</button>
    </div>
    <button id="open-mobile-learn-nav" class="w-8 h-8 my-2 mx-3 shadow-2xl">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="256" height="256" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_22"><rect width="256" height="256" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_22)"><g transform="matrix(1,0,0,1,115.61200714111328,209.5500030517578)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,58.95000076293945,10.949999809265137)"><path fill="rgb(49, 130, 246)" fill-opacity="1" d=" M48,10.699999809265137 C48,10.699999809265137 -48,10.699999809265137 -48,10.699999809265137 C-53.909000396728516,10.699999809265137 -58.70000076293945,5.908999919891357 -58.70000076293945,0 C-58.70000076293945,-5.909999847412109 -53.909000396728516,-10.699999809265137 -48,-10.699999809265137 C-48,-10.699999809265137 48,-10.699999809265137 48,-10.699999809265137 C53.909000396728516,-10.699999809265137 58.70000076293945,-5.909999847412109 58.70000076293945,0 C58.70000076293945,5.908999919891357 53.909000396728516,10.699999809265137 48,10.699999809265137z"></path></g></g><g transform="matrix(1,0,0,1,21.050003051757812,117.05000305175781)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,106.94999694824219,10.949999809265137)"><path fill="rgb(49, 130, 246)" fill-opacity="1" d=" M96,10.699999809265137 C96,10.699999809265137 -96,10.699999809265137 -96,10.699999809265137 C-101.90899658203125,10.699999809265137 -106.69999694824219,5.908999919891357 -106.69999694824219,0 C-106.69999694824219,-5.909999847412109 -101.90899658203125,-10.699999809265137 -96,-10.699999809265137 C-96,-10.699999809265137 96,-10.699999809265137 96,-10.699999809265137 C101.90899658203125,-10.699999809265137 106.69999694824219,-5.909999847412109 106.69999694824219,0 C106.69999694824219,5.908999919891357 101.90899658203125,10.699999809265137 96,10.699999809265137z"></path></g></g><g transform="matrix(1,0,0,1,21.050003051757812,21.050003051757812)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,58.95000076293945,10.949999809265137)"><path fill="rgb(49, 130, 246)" fill-opacity="1" d=" M48,10.699999809265137 C48,10.699999809265137 -48,10.699999809265137 -48,10.699999809265137 C-53.909000396728516,10.699999809265137 -58.70000076293945,5.908999919891357 -58.70000076293945,0 C-58.70000076293945,-5.909999847412109 -53.909000396728516,-10.699999809265137 -48,-10.699999809265137 C-48,-10.699999809265137 48,-10.699999809265137 48,-10.699999809265137 C53.909000396728516,-10.699999809265137 58.70000076293945,-5.909999847412109 58.70000076293945,0 C58.70000076293945,5.908999919891357 53.909000396728516,10.699999809265137 48,10.699999809265137z"></path></g></g><g style="display: none;"><g><path></path></g></g><g style="display: none;"><g><path></path></g></g><g style="display: none;"><g><path></path></g></g></g></svg>
    </button>

    </nav>
   <div class="flex">
   <nav id="navbar-learn" class="hidden  flex  z-50">
        <div class="shadow flex-initial w-full h-full text-left px-2 bg-white fixed md:static">
        <div class="text-end">
            <button id="close-mobile-learn-nav" class="p-3 bg-white text-blue-500 shadow-md">X</button>
        </div>
            <h1 class="text-blue-500 p-3 solid font-bold text-2xl">Lorem, ipsum.</h1>
            <?php
        $data = json_decode(curlget("/backend/getVideoList"));
        foreach($data as $value) {
            ?>
            <div class="m-3 p-3 rounded shadow-md text-gray-500 text-xs h-auto card-learn-nav">
                <div class="flex flex-row">
                    <div class="basis-1/4 contents">
                        <img class=" mx-3 my-auto w-12 h-12" src="./static/images/video.png" alt="dollar">
                    </div>
                    <div class="basis-3/4 px-6 text-left ">
                        <a href="?showVideo=<?php echo $value->id ?>" class="font-medium text-blue-500 text-xl"><?php echo $value->title ?></a>
                        <p class="text-xs text-gray-500 py-1"><?php echo $value->description ?></p>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
        </div>
    </nav>
    <section class="p-5 w-full my-16 flex md:basis-auto basis-0">
        <div class="mx-auto">
        
        
        <player-chrome class="rounded shadow player-learning">
        <video
          slot='media'
          src='<?php echo $data[0]->path; ?>'
          class="rounded shadow"
        ></video>
        <player-control-bar>
          <player-play-button>Play</player-play-button>
          <player-mute-button>Mute</player-mute-button>
          <player-volume-range>Volume</player-volume-range>
          <player-progress-range>Progress</player-progress-range>
          <player-pip-button>PIP</player-pip-button>
          <player-fullscreen-button>Fullscreen</player-fullscreen-button>
        </player-control-bar>
      </player-chrome>
        </div>
    </section>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="./static/js/script.js"></script>
    
</body>
</html>