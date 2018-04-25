let hamState = false;

function clickHam(event) {
    let x = document.getElementById("main-nav");
    let lines = document.getElementsByClassName("line");
    if (x.className == "") {
        event.target.color = "white";
        x.className += "visible";
        for (let i = 0; i < lines.length; i++){
            lines[i].className += " line-white"
        }
    } else {
        event.target.color = "black";
        x.className = "";
        for (let i = 0; i < lines.length; i++){
            lines[i].className = "line";
        }
    }
}