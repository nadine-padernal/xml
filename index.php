<!DOCTYPE html>
<html>
<body onload="loadXMLDoc()">

<h2>Using the XMLHttpRequest Object</h2>

<div id="rss">
</div>

<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("rss").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "rss-cnn.php", true);
  xhttp.send();
}
</script>
</body>
</html>
