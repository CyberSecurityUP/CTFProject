<?php
$dir = "path/to/articles"; // change this to the actual path
$files = scandir($dir);
echo '<div class="content-section">';
foreach ($files as $file) {
  if ($file !== "." && $file !== "..") {
    echo '<a href="'.$dir.'/'.$file.'">'.$file.'</a><br>';
  }
}
echo '</div>';
?>
