<!DOCTYPE html>
<html lang="en">
<?php include_once "application/views/template/head.php"; ?>
<body>
    <h1>Detail</h1>
    <div><button id="btnDel" data-i_board="<?=$this->data->i_board?>">Delete</button></div>
        <div>No. : <?=$this->data->i_board?></div>
        <div>Title : <?=$this->data->title?></div>
        <div>Content : <?=$this->data->ctnt?></div>
        <div>Name : <?=$this->data->nm?></div>
        <div>Date : <?=$this->data->created_at?></div>
</body>
</html>