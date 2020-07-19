$(window).on("load", function() {

      function pageFromId(e){
        var name=e.slice(0,-3);
        return name;
      }

      var $clicker=$(".clicker")
      $clicker.on('click',function(){
        console.log('clicked on id-> '+this.id);
        if (this.id === 'proceed1'){
                document.getElementById('startScream').play();
                $('.fade1').delay(2000).fadeOut(800, function() {
                  document.getElementById('startScream').pause();
                  window.location='main.php';


                });
              }
        else if (this.id.slice(-3)==="Art" || this.id.slice(-3)==="Tit"){
            window.location=this.id.slice(0,-3)+".php";
        }
        else if (this.id.slice(-3)==="Pos"){
          window.location="#"+this.id.slice(0,-3)+"Sec";

            }
          })


});
