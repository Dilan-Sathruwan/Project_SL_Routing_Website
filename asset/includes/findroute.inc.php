<?php
if (isset($_POST["submit"])) {
    $selectedValues = $_POST['destinations'];
    $selectedValuee = $_POST['destinatione'];

    if ($selectedValues && $selectedValuee) {
        header("Location: ../userrootview.php?values=$selectedValues&&valuee=$selectedValuee");
    } else {
        echo "No value selected.";
    }
} else {
}
