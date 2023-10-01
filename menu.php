<?php
function display_menu() {
    echo '<ul>';
    for ($i = 1; $i <= 10; $i++) {
        echo "<li><a href='exercice$i.php'>Exercice $i</a></li>";
    }
    echo '</ul>' ;
}
?>