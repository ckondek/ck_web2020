$(window).on("load", function() {

      function pageFromId(e){
        var name=e.slice(0,-3);
        return name;
      }

      var $clicker=$(".clicker")
      $clicker.on('click',function(){
        if (this.id === 'proceed1'){
                document.getElementById('startScream').play();
                $('.fade1').delay(4000).fadeOut(800, function() {
                  document.getElementById('startScream').pause();
                  window.location='main.php';
                  console.log('here');

                });
              }
        else if (this.id.slice(-3,-1)==="Pos"){


        }
        else {
              window.location=this.id.slice(0,-3)+".php"
            }
          })


});
