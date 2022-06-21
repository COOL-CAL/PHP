<div>
    <h1 align="center">Edit</h1>
    <form action="modProc.php" method="post">
        <input type="hidden" name="i_board" value="<?=$this->data->i_board?>">
        <div align="center">Title : <input type="text" name="title" value="<?=$this->data->title?>"></div>
        <div align="center">Content : <textarea name="ctnt" cols="30" rows="10"><?=$this->data->ctnt?></textarea></div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
</div>