<?php
  $var = "Hello World!";

  define('CONSTANTE', $var);// escopo global

  const CONSTANTE2 = $var// escopo de uma variavel comum

?>
<!DOCTYPE html>
<html>
  <?php
  // include "layout/head.php";//varias vezes é possível, mas o navegador aceita só uma
  // include_once "layout/head.php";//só inclui uma única vez, menos no prompt
  // require "layout/head.php";//varias vezes é possível, e o navegador executa cada uma
  require_once "layout/head.php";//só incui uma única vez, incluindo no prompt

  require_once "layout/body.php"

  ?>
</html>
