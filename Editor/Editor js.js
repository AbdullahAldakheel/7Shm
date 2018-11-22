  
       $(document).ready(function(){
            $(".area").hide();
             $(".cancel").hide();
            $(".sub").hide();
             

           $(".com").click(function() {
        $(this).next(".area").show();
        $(this).next().next().next().next(".cancel").show();
        $(this).next().next().next(".sub").show();
        $(this).hide();
        $(this).next().next(".app").hide();
                   

    });    


             $(".cancel").click(function() {
                     $(this).hide();
                     $(this).prev().prev().prev(".area").hide();
                     $(this).prev(".sub").hide();
                     $(this).prev().prev(".app").show();
                     $(this).prev().prev().prev().prev(".com").show();
                     

                    });    

         });

