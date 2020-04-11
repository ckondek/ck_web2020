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

  insertText("texts/intro_header.txt","doublelucky productions","script.js");
?>
<body>
  <header>
    <p class="boxTitle headerText">
      <?php
      insertText("texts/intro_doublelucky.txt",'','');
      ?>
    </P>
  </header>
  <main id="dbPageContainer" class="flexContainer">
    <?php
        $path="http://d1ua7ibh28zfpl.cloudfront.net/images/";
        $showList = json_decode(file_get_contents("json/doubleluckyInfo.json"),TRUE);
        foreach($showList as $show ){
          echo "<article id='".$show['short']."Pos' class='dbpage clicker'>";
          echo "<div class='overlay'>";
          echo "<p class='dbTitle'>".$show['name']."</p>";
          echo "<img class='dbImg' loading='eager' src='".$path.$show["thumb"]."'>";
          echo "<p class='dbFooter'>".$show['slogan']."</p>";
          echo "</div>";
          echo "</article>";
        }
      foreach($showList as $show ){
        echo "<article id='".$show['short']."Sec' class='size80 i_main'>";
        echo "<h1>".$show['name']."</h1>";
        echo "<p id=' ".$show['short']."txt '>";
        echo file_get_contents("texts/".$show['short'].".txt");
        echo "</article>";


      }


    ?>


  </main>
</body>
</html>
