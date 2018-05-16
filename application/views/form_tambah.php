<div class="container">
  <?php echo validation_errors(); ?>
      <?php
        echo form_open('blog/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value="<?php echo set_value('input_content') ?>"></td>
        </tr>
        <tr>
          <label>Kategori : </label>
          <select name="id_kategori" class="form_control" required>
            <option value="">Pilih Kategori</option>
            <?php foreach($kategori as $kategori): ?>
              <option value="<?php echo $kategori->id_kategori; ?>"><?php echo $kategori->cat_name; ?></option>
            <?php endforeach; ?>
          </select>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="date" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td>Penerbit </td>
          <td>:</td>
          <td><input type="text" name="input_penerbit" value=""></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="input_sumber" value=""></td>
        </tr>
        <tr>
          <td>Penulis </td>
          <td>:</td>
          <td><input type="text" name="input_penulis" value=""></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>