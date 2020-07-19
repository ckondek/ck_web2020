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

  insertText("texts/intro_header.txt","Kondek Video Theater","script.js");

 ?>
  <body>
      <article id="startScreen" class="fade1">
          <h3 id="proceed1" class='clicker'>[ proceed ]</h3>
          <video id="startScream"  >
          <source src='http://d1ua7ibh28zfpl.cloudfront.net/video/video_scream_800.mp4' type="video/mp4">
          </video>
      </article>
    </body>
</html>
