  $(document).ready(function(){
             
              $(".area").hide();
              $(".cancel").hide();
             $(".sub").hide();
             $(".com").click(function(){
              $(".cancel").show();
                  $(".area").show();
                 $(".sub").show();
                  $(".com").hide();
                 $(".app").hide();
             });
             
             $(".cancel").click(function(){
                $(".area").hide();
              $(".cancel").hide();
                  $(".app").show();
                 $(".sub").hide();
                 $(".com").show();
                 
             });
             $(".can").blur().css("background-color","#cccccc");
         });