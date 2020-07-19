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

  insertText("texts/intro_header.txt","designs for Theater","script.js");
?>
<body>
  <header>
    <p class="boxTitle headerText">
      <?php
      insertText("texts/intro_designs.txt",'','');
      ?>
    </p>
  </header>
  <main id="designsPageContainer">
    <?php

        $path="http://d1ua7ibh28zfpl.cloudfront.net/images/";
        $showList = json_decode(file_get_contents("json/showInfo.json"),TRUE);

        foreach($showList as $show ){
          if($show['include']){
            echo "<article id='".$show['short_name']."_Info' class='designPage size90 clicker'>";
            echo "<h2 class='whiteText centerText artTitle'>".$show['production']."</h2>";
              echo "<div class='mainbox'>";
                echo "<img id='".$show['short_name']."_mainPict' class='mainPict clicker'src='".$path.$show['doku_pics'][0]."'>";
                echo "<div class='whiteText sectionText'>";
                echo
                      "<p>".$show['production']." directed by ".$show['director'].
                      " premiered on ".$show['premiere_date']." at ".$show['where']."</p>";
                echo "<br>";
                echo "<p class='descriptionText'>".$show['description']."</p>";
                echo "<br>";
                if (! $show['video_co_design']==""){
                  echo "<p>Co Video Design by ".$show['video_co_design']."</p>";

                }

                if (! $show['video_mitarbeit']==""){
                  echo "<p>Video Mitarbeit ".$show['video_mitarbeit']."</p>";

                }


                echo "<p>Stage Design by ".$show['set_designer']."</p>";
                echo "<p>Costume Design by ".$show['costume_designer']."</p>";

                echo "<a class='showLink' rel='external' href='".$show['link']."'>".$show['production']." at ".$show['where']."</a>";


              echo "</div>";
              echo "</div>";

              echo "<div class='thumbbox'>";
                echo "<img id='".$show['short_name']."_thumb1' class='thumbs clicker' src='".$path.$show['doku_pics'][1]."'>";
                echo "<img id='".$show['short_name']."_thumb2' class='thumbs clicker' src='".$path.$show['doku_pics'][2]."'>";
              echo "</div>";


              echo "<br>";
              echo "<p class='whiteText centerText bottom20'>++++++++++++++++++++</p>";
              echo "<br>";



            echo "</article>";

          }
        }



    ?>


  </main>
</body>
</html>
