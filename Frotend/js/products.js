

//Para cuando el mouse este encima la imagen se va agrandar
function OnMouseOver(id) {
    var img = document.getElementById(id)
    img.style.transform = 'translate(+1%,+1%) scale(2)'
}

//Para cuando el mouse este fuera la imagen se va estar en tamañano normal
function OutMouseOver(id) {
    var img = document.getElementById(id)
    img.style.transform = "translate(+0%,+0%) scale(1)"
}

function GetProduct(params) {
    
}
