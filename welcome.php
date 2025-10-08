<?php include 'header.inc'; ?>
<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome, " . $_SESSION['user'];
} else {
    header('Location: login.html');
}
?>
<?php include 'footer.inc'; ?>