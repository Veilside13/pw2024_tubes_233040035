const searchButton = document.querySelector(".search-button");
const keyword = document.querySelector(".keyword");
const movie = document.querySelector(".movie");

keyword.addEventListener("keyup", function () {
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      movie.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", "ajax/search_movie.php?keyword=" + keyword.value, true);
  xhr.send();
});