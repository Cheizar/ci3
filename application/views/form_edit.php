<div class="container">
        <?php echo validation_errors(); ?>
    <?php foreach ($single as $key): ?>
      <?php echo form_open ('blog/edit/'.$key->id_blog, array('enctype'=>'multipart/form-data')); ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo $key->judul_blog ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value="<?php echo $key->content ?>"></td>
        </tr>
        <tr>
          <label>Kategori : </label>
          <select name="id_kategori" class="form_control" required>
            <option value="">Pilih Kategori</option>
            <?php
            foreach($kategori as $kategori):
              ?>
              <option value="<? php echo $kategori->id_kategori; ?>"><?php echo $kategori->cat_name; ?></option>
            <?php endforeach; ?>
          </select>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo $key->tanggal_blog ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td>Penerbit </td>
          <td>:</td>
          <td><input type="text" name="input_penerbit" value="<?php echo $key->penulis ?>"></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="input_sumber" value="<?php echo $key->sumber ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="edit"></td>
        </tr>
      </table>
      <?php endforeach ?>
    </div>