function show_film(id) {
  location.href = "movie/"+id;
}

function sort(order) {
  location.href = "movies?page=1&order="+order;
}

function update_film(id) {
  document.location.href = "movie/"+id+"/edit";
}

function destroy_film(id) {

  $.ajax({
    type: "POST",
    url: "movie/"+id+"/destroy",
    success: function() {
      location.href = "movies";
    }
  });
}

function filter() {
  location.href = "movies?page=1&filter="+$("#style_filter").val();
}