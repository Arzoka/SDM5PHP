const clickMusicCard = (row) => {
  console.log(row);
};

const searchResult = (search) => {
  let music_grid = document.getElementById("music-grid");
  let cards = music_grid.getElementsByClassName("music-card");

  for (let i = 0; i < cards.length; i++) {
    if (
      cards[i]
        .getAttribute("data-keywords")
        .toLowerCase()
        .includes(search.toLowerCase())
    ) {
      cards[i].style.display = "block";
    } else {
      cards[i].style.display = "none";
    }
  }
};
