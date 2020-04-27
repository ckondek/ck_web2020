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


  insertText("texts/intro_header.txt","Assorted Video Notes","script.js");

 ?>
 <body>
   <article class="textHeader">
     <header>
       <p class="boxTitle headerText">
         <?php
         insertText("texts/videoNotes.txt","","");
         ?>
       </P>
     </header>

</article>

 </body>
</html>
