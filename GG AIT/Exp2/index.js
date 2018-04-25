isRotate = false;
isScale = false;

function rotateOrScaleImage(condition){
    let image = document.getElementById("image");
    switch(condition){
        case "rotate":
            isRotate = !isRotate;
            if(isRotate) {
                image.style.transform += " rotate(45deg)"
                // image.className += " rotate";
            } else {
                image.style.transform = image.style.transform.replace(" rotate(45deg)", "")
            }
            break;
        case "scale":
            isScale = !isScale;
            if(isScale) {
                image.style.transform += " scale(2, 1)"
            } else {
                image.style.transform = image.style.transform.replace(" scale(2, 1)", "")
            }
            break;
        default:
            break;
    }
}