var modal = document.getElementById("modal");
var click = document.getElementById("confirm-button");
var exit = document.getElementById("modal-close");
var content = document.getElementById("modal-content");
click.onclick = function() {
    modal.style.display = "block";
    content.style.marginTop = "120px";
}
exit.onclick = function() {
    modal.style.display = "none";
}