<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vsga Input</title>
  </head>
  <body>
    <form action="simpan.php" method="post">
      <table>
        <tr>
          <td>NIM</td>
          <td><input type="text" onkeyup="isi_otomatis()" name="nim" /></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" /></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <input type="radio" name="jenis_kelamin" value="L" />Laki laki
          </td>
          <td>
            <input type="radio" name="jenis_kelamin" value="P" />Perempuan
          </td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>
            <select name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Kimia">Teknik Kimia</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat" /></td>
        </tr>
        <tr>
          <td colspan="2"><button type="submit" value="Simpan"></button></td>
        </tr>
      </table>
    </form>
  </body>
</html>
