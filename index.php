<?php
// Exemplo de XSS e RCE
if (isset($_GET['name'])) {
    echo "Hello, " . $_GET['name']; // <- XSS detectado por Horusec/Semgrep
}

if (isset($_GET['cmd'])) {
    system($_GET['cmd']); // <- Remote Code Execution
}
?>
