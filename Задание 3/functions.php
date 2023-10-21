<?php
function generateTable($days) {
    echo '<tr> <th>№</th> <th>Дни недели</th> </tr>';
    
    foreach ($days as $key => $value) {
        echo '<tr> <td>' . $key . '</td> <td>' . $value . '</td> </tr>';
    }
}
?>
