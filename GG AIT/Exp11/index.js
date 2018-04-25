isRotate = false;
isScale = false;

function rotateOrScaleImage(condition){
    let image = document.getElementById("image");
    let skewVar = " skew(20deg, 0deg)",
        translateVar = " translate(200px, 0px)"
    switch(condition){
        case "skew":
            isRotate = !isRotate;
            if(isRotate) {
                image.style.transform += skewVar
                // image.className += " rotate";
            } else {
                image.style.transform = image.style.transform.replace(skewVar, "")
            }
            break;
        case "translate":
            isScale = !isScale;
            if(isScale) {
                image.style.transform += translateVar
            } else {
                image.style.transform = image.style.transform.replace(translateVar, "")
            }
            break;
        default:
            break;
    }
}