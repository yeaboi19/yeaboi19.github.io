var col = 0;

function changeColor() {
    if (col == 0) {
        document.getElementById("MainText").style.color = "green";
        col = 1;
    } else {
        document.getElementById("MainText").style.color = "gold";
        col = 0;
    }
}
setInterval(changeColor, 500);