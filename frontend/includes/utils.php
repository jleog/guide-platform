<?php

function createHTMLvideo($path, $width="720px", $height="480px") {
    echo "
    <player-chrome style='width: $width; height: $height'>
        <video
          slot='media'
          src='$path'
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
    ";
}

function curlget($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $_SERVER['SERVER_NAME'].$url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $out = curl_exec($ch);
  curl_close($ch);
  return $out;
}