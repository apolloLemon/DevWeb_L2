<?php

function js(string $code)
{
    echo "<script type=\"text/javascript\">$code</script>";
}

function console(string $str)
{
    js("console.log(\"" . htmlentities($str) . "\");");
}

function alert(string $str)
{
    js("alert(\"$str\");");
}

function displayException(PDOException $e)
{
    console("Fichier : " . $e->getFile());
    console("Ligne : " . $e->getLine());
    console($e->getMessage());
    alert("Code SQL : {$e->getCode()}");
}
?>