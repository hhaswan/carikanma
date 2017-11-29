<?php
if (isset($files) && count($files))
{
    ?>
        <ul>
            <?php
            foreach ($files as $file)
            {
                ?>
                <li class="image_wrap">
                    <a href="#" class="delete_file_link" data-file_id="<?php echo $file->id_produk?>">Delete</a>
                    <strong><?php echo $file->nama_produk?></strong>
                    <br />
                    <?php echo $file->foto_produk?>
                </li>
                <?php
            }
            ?>
        </ul>
    </form>
    <?php
}
else
{
    ?>
    <p>No Files Uploaded</p>
    <?php
}
?>
