<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hybrid Site</title>
<style>
  /* Styles here */
</style>
</head>
<body>

<div id="sidebar">
  <a href="javascript:void(0)" onclick="loadContent('articles')">Artigos</a>
  <a href="javascript:void(0)" onclick="loadContent('files')">Arquivos</a>
  <a href="javascript:void(0)" onclick="loadContent('about')">About</a>
</div>

<div id="main-content">
  <!-- Content will be loaded here -->
</div>

<script>
function loadContent(section) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("main-content").innerHTML = this.responseText;
  }
  xhttp.open("GET", section + ".php");
  xhttp.send();
}
</script>

</body>
</html>
