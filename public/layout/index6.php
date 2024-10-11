<?php
// Detectar el idioma del navegador
$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5);

// Detectar la localización (usando el valor de "es-CO" para Colombia)
if ($idioma == 'es-CO') {
  header("Location: /es-co/");  // Redirigir a la versión específica para Colombia
  exit();
}
?>
<!DOCTYPE html>
<html lang="es-CO">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include 'haed.php'; ?>
<?php include 'body6.php'; ?>

</html>
