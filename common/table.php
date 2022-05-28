<table>
    <tr>
        <th>رقم السوره</th>
        <th>اسم السوره</th>
        <th>إستماع</th>
    </tr>
    <?php foreach ($sour as $soura) { ?>
        <tr>
            <td><?php echo $soura['id'] ?></td>
            <td><?php echo $soura['name'] ?></td>
            <td><audio controls>
                    <source src=<?php echo $soura['url'] ?> type="audio/mpeg">
                </audio>
            </td>
        </tr>
    <?php } ?>
</table>