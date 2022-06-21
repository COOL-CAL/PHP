<!DOCTYPE html>
<html lang="en">
<?php include_once "application/views/template/head.php"; ?>
<body>
    <h1>List</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->list as $item) { ?>
            <tr data-i_board="<?=$item->i_board?>">
                <td><?=$item->i_board?></td>
                <td><?=$item->title?></a></td>
                <td><?=$item->created_at?></td>
            </tr>
        </tbody>
    <?php } ?>
    </table>
</body>
</html>