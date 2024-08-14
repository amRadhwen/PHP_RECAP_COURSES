<pre>
<table>
    <tr>
        <td>KEY</td>
        <td>VAL</td>
    </tr>
    <tr>
        <?php
        
            foreach($_SERVER as $key => $val) {
                echo "<tr><td>$key</td><td>$val</td></tr>";
            }
        
        ?>
    </tr>
</table>
