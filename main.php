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


  insertText("texts/intro_header.txt","Video for Theater/doublelucky","script.js");

 ?>
  <body>
      <main id="homepage" class="flexContainer">
          <article id='designsArt' class='artBox size40 height45vh fade2 clicker'>
            <h2 class="boxTitle">Video for Theater</h2>
            <img src="http://d1ua7ibh28zfpl.cloudfront.net/images/DisconnectedChild.jpg">
          </article>
          <article id='introArt' class='artBox size15 height45vh fade2'>
            <div id='iContainer'>

                <div id="aboutTit" class="i_main clicker">Chris Kondek</div>
                <div id="i2" class='i_sub'>creates</div>
                <div id="designsTit" class="i_main clicker">-> Video for Theater</div>
                <div id="i4" class="i_sub">and works with</div>
                <div id="doubleluckyTit" class="i_main clicker">-> doublelucky productions</div>

            </div>

          </article>
          <article id='doubleluckyArt' class='artBox size25 height45vh fade2 clicker'>
            <h2 class="boxTitle">doublelucky productions</h2>
            <img src="http://d1ua7ibh28zfpl.cloudfront.net/images/HairsPoster_500.jpg">
          </article>
          <article id='a4' class='artBox size20 fade2'>bkj</article>
          <article id='a5' class='artBox size20 fade2'>yfdjtydd</article>
          <article id='a6' class='artBox size20 fade2'>zfdzfd</article>
          <article id='a7' class='artBox size20 fade2'>lih</article>
          <article id='a8' class='artBox size20 fade2'>dtd</article>
          <article id='a9' class='artBox size20 fade2'>vhvjhv</article>
      </main>
  </body>

</html>
