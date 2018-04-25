isTranslate = false;

function translateImage(condition){
    let image = document.getElementById("image");
    let translate3d = " perspective(300px)"
    switch(condition){
        case "translate":
            isTranslate = !isTranslate;
            if(isTranslate) {
                image.style.transform = image.style.transform.replace(/^/,'perspective(300px) ');
            } else {
                image.style.transform = image.style.transform.replace("perspective(300px) ", "")
            }
            break;
        default:
            break;
    }
}