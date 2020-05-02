<?php

function insertText($textPath,$title,$script){
  if (!file_exists($textPath)){
    echo "...no such file....";
  } else {
      $text = file_get_contents($textPath);
      $text=str_replace("%title_replace%",$title, $text);
      $text=str_replace("%js_replace%",$script,$text);
      echo $text;
    };
  };


  insertText("texts/intro_header.txt","Miscellaneous Videos","script.js");

 ?>

 <body>
   <?php
    $path="http://d1ua7ibh28zfpl.cloudfront.net/video/";
    $showList = json_decode(file_get_contents("json/showInfo.json"),TRUE);
      foreach($showList as $show ){
        if ($show['clip_basename']){
          echo "<section class='clipSection'>";
          echo "<a  class='videoLinks' href='".$path.$show['clip_basename']."_".$show['short_name']. ".mp4'>".$show['clip_basename']."</a>";
          echo "<p class='clip_headline'>".$show['clip_headline']."</p>";
          echo "</section>";
          echo "</br>";
        }
      }
    ?>
  </body>
</html>
