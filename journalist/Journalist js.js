
function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}
function myFunction() {
    document.getElementById("myP").contentEditable = true;
    document.getElementById("myP1").contentEditable = true;
    document.getElementById("myb").hidden = false;
    document.getElementById("bt3").hidden = false;
    document.getElementById("bt1").hidden = true;
    document.getElementById("bt2").hidden = true;
}
function myFunction1() {
    document.getElementById("myP").contentEditable = false;
    document.getElementById("myP1").contentEditable = false;
     document.getElementById("myb").hidden = true;
    document.getElementById("bt3").hidden = true;
    document.getElementById("bt1").hidden = false;
    document.getElementById("bt2").hidden = false;
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

