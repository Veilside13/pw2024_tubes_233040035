const searchButton = document.querySelector(".search-button");
const keyword = document.querySelector(".keyword");
const table = document.querySelector(".table");

keyword.addEventListener("keyup", function () {
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      table.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", "../ajax/search.php?keyword=" + keyword.value, true);
  xhr.send();
});