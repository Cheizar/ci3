<div class="container">
  <?php echo validation_errors(); ?>
  
      <?php
        echo form_open('category/create', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Nama Kategori</td>
          <td>:</td>
          <td><input type="text" name="cat_name" value="<?php echo set_value('cat_name'); ?>"></td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td>:</td>
          <td><input type="text" name="cat_description" value="<?php echo set_value('cat_description'); ?>"></td>
        </tr>
        <tr>
    <tr>
        <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>