
function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}
function myFunction() {
    document.getElementById("myP").contentEditable = true;
    document.getElementById("myP1").contentEditable = true;
    document.getElementById("myb").disabled = false;
}
function clic(element){
 var x = confirm("Are you sure you want to delete");
    var txt;
       if (x == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
