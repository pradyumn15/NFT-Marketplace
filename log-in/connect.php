<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['logemail'];
    $PASSWORD = $_POST['logpass'];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>