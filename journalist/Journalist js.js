
function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}
function myFunction() {
    document.getElementsByClassName("myP").contentEditable = true;
    document.getElementsByClassName("myP1").contentEditable = true;
    document.getElementsByClassName("myb").hidden = false;
    document.getElementsByClassName("bt3").hidden = false;
    document.getElementsByClassName("bt1").hidden = true;
    document.getElementsByClassName("bt2").hidden = true;
}
function myFunction1() {
    document.getElementsByClassName("myP").contentEditable = false;
    document.getElementsByClassName("myP1").contentEditable = false;
     document.getElementsByClassName("myb").hidden = true;
    document.getElementsByClassName("bt3").hidden = true;
    document.getElementsByClassName("bt1").hidden = false;
    document.getElementsByClassName("bt2").hidden = false;
}
function clic(element){
 var x = confirm("Are you sure you want to delete");
    var txt;
       if (x == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementsByClassName("demo").innerHTML = txt;
}

