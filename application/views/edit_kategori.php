<div class="container">
        <?php echo validation_errors(); ?>
    <?php foreach ($single as $key): ?>
      <?php echo form_open ('category/edit/'.$key->id_kategori, array('enctype'=>'multipart/form-data')); ?>
      <table>
        <tr>
          <td>Id Kategori</td>
          <td>:</td>
          <td><input type="text" name="id_kategori" readonly value="<?php echo $key->id_kategori ?>"></td>
        </tr>
        <tr>
          <td>Nama Kategori</td>
          <td>:</td>
          <td><input type="text" name="cat_name" value="<?php echo $key->cat_name ?>"></td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td>:</td>
          <td><input type="text" name="cat_description" value="<?php echo $key->cat_description ?>"></td>
        </tr>
        <tr>
    <tr>
        <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    <?php endforeach ?>
    </div>