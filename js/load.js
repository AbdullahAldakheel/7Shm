//      <script>
//      $(".Logging")
//$(document).ready(function(){
//    $(".Logging").click(function(){
//        $(".LoggedIn").hide();
//    });
//});
//
//</script>

var second = 50;
var d = new Date();
function startTimer(){
    
   // document.getElementById("timeHead").innerHTML = Date();
     document.getElementById("timeHead").innerHTML = d;
    window.setInterval("updateTime()", 2000);
}

function updateTime(){

    document.getElementById("refreshTime").innerHTML = "Refresh in: "+second;
        second--;
   refreshCheck()
}
function refreshCheck(){
    if(second == 0){
        document.getElementById("refreshTime").innerHTML = "Refreshing ... ";
            location.reload(true); 
        
    }
}

window.addEventListener("load", startTimer, false);
    


