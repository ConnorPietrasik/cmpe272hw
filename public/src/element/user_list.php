<table>
    <tr class="col-names">
        <?php
            foreach($users[0] as $col => $val){
                echo "<td>";
                echo $col;
                echo "</td>";
            }
        ?>        
    </tr>
    <?php
        foreach($users as $user){
            echo "<tr>";
            foreach($user as $col => $val){
                echo "<td>";
                echo $val;
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
</table>