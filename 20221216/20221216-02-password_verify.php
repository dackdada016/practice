<?php
$pass = '123456';
$hash = '$2y$10$IuNXi4uCkIK4ZolnaGEOjuibsOJ9KlOnPE2py9iciLAPVhDMG4Pcm';
var_dump(password_verify($pass,$hash));

?>