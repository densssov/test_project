<form action="" method="post" enctype="multipart/form-data"  multiple accept="image/*">
  <table align="center" class="film_add">
    <tr>
      <td>Название</td>
      <td><input type="text" name="film[name]" value="<?= $film['name']?>"></td>
    </tr>
    <tr>
      <td>Описание</td>
      <td><textarea rows="10" cols="45" name="film[description]" value="<?= $film['description']?>"><?= $film['description']?></textarea></td>
    </tr>
    <tr>
      <td>Жанры</td>
      <td><textarea  rows="10" cols="45" name="film[styles]" value="<?= $film['styles']?>" ><?= $film['styles']?></textarea></td>
    </tr>
    <tr>
      <td>Дата выхода</td>
      <td><input type="date" name="film[realese]" value="<?= $film['releases']?>" ></td>
    </tr>
    <tr>
      <td>Постер фильма</td>
      <td><input type="file" name="film[image]" value="<?= $film['image']?>" ></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Добавить фильм"></td>
      <td colspan="2"><input type="button" name="submit" value="Назад" onclick="window.history.back();"></td>
    </tr>
  </table>
</form>