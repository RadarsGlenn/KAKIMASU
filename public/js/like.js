function changeImageLike(id) {
  var image = document.getElementById("like" + id);
  if (image.src.match("{{asset('images/lovely-heart.png')}}")) {
    image.src = "{{asset('images/red-heart.png')}}";
  } else if (image.src.match("{{asset('images/red-heart.png')}}")) {
    image.src = "{{asset('images/lovely-heart.png')}}";
  }
}

