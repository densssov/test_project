<table border="1">
  <tr>
    <td>Название</td>
    <td><?= $film["name"] ?></td>
  </tr>
  <tr>
    <td>Жанры</td>
    <td><?= $film["styles"] ?></td>
  </tr>
  <tr>
    <td>Описание</td>
    <td><?= $film["description"] ?></td>
  </tr>
  <tr>
    <td>Постер</td>
    <td><img src="<?= $film['image'] ?>" width="100px"/></td>
  </tr>
  <tr>
    <td>Дата премьеры</td>
    <td><?= $film["releases"] ?></td>
  </tr>
</table>
<input type="button" name="submit" value="Назад" onclick="window.history.back();">