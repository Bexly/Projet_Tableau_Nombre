<?php

    echo   '<table border style = "border-collapse: collaspe;">
        <tr>
            <th>Nombre</th>
            <th>Carré</th>
            <th>Racine</th>
        </tr> ';

             for($i = 1; $i <= 10; $i++) {

    echo     '<tr><td>'.$i.'</td>';
    echo     '<td>'.$i*$i.'</td>';
    echo     '<td>'.sqrt($i).'</td></tr>';
    echo     '<br />';

}

    echo     '</table>'; 


?>