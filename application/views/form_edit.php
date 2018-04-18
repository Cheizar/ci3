<div class="container">
        <?php echo validation_errors(); ?>
    <?php foreach ($artikel as $key): ?>
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
          <td><input type="text" name="input_penerbit" value=""></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="input_sumber" value=""></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_penulis" value=""></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="edit" value="edit"></td>
        </tr>
      </table>
      <?php endforeach ?>
    </div>