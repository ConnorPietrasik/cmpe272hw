<table class="user-list">
    <tr class="col-names">
        <?php
            foreach($users[0] as $col => $val){
                echo "<th>";
                echo $col;
                echo "</th>";
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