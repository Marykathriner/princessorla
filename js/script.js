function hidePopup () {
	var popup = document.getElementById('popup');
	popup.classList.add('show') 
}
function hideBlanket () {
    var blanket = document.getElementById('blanket');
    blanket.classList.remove('blanket')
}

function myFunction() {
    var element = document.getElementById("navi-list");
    element.classList.toggle("active");
}