let borderDiv = document.getElementById("border-div")

function changeBorder(style){
    if (style == 'mixed') {
        borderDiv.style['border-style'] = 'dotted dashed solid double';
        return;
    }
    borderDiv.style['border-style'] = style;
}