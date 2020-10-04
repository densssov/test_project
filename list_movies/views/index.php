<table border="1">
  <tr>
    <td onclick="sort('name');">Название</td>
    <td onclick="sort('styles');">Жанры</td>
    <td onclick="sort('description');">Описание</td>
    <td>Постер</td>
    <td onclick="sort('releases');">Дата премьеры</td>
    <td></td>
    <td></td>
  </tr>
  <? while($film = mysqli_fetch_assoc($films)) { ?>
    <tr>
      <td onclick="show_film(<?= $film['id'] ?>);"><?= $film["name"] ?></td>
      <td><?= $film["styles"] ?></td>
      <td><?= $film["description"] ?></td>
      <td><?= $film["image"] ?></td>
      <td><?= $film["releases"] ?></td>
      <td onclick="update_film(<?= $film['id'] ?>);">Изменить</td>
      <td onclick="destroy_film(<?= $film['id'] ?>);">Удалить</td>
    </tr>
  <? } ?>
</table>
<div>Фильтр по жанру <input type="text" id="style_filter"/> <input type="button" value="Фильтровать" onclick="filter();"/></div>
<?= $links ?>