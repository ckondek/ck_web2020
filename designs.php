<?php
function insertText($textPath){
  $title="Video for Theater";
  if (!file_exists($textPath)){
    echo "...no such file....";
  } else {
      $text = file_get_contents($textPath);
      echo str_replace("replace",$title, $text);
    };
  };
  insertText("intro_header.txt");
?>

<body>
  <header>
    <?php
      function insertText($textPath){
        if (!file_exists($textPath)){
          echo "...no such file....";
        } else {
            $text = file_get_contents($textPath);
            echo $text;
          };
        };
        insertText("texts/doublelucky_intro.txt");
    ?>


  </header>
