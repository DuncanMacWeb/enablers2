<!DOCTYPE html>
<html>


<body>



<button onclick="openWin()">Open w3schools.com in a new window</button>
<button onclick="closeWin()">Close the new window (w3schools.com)</button>

<script>
var myWindow;

function openWin() {
    myWindow = window.open("http://www.w3schools.com", "_blank", "width=500, height=500");
}

function closeWin() {
    myWindow.close();
}
</script>

</body>
</html>

