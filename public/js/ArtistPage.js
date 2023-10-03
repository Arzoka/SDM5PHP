const setSongs = () => {
  let songs = document.getElementsByClassName("music-card");
  document.getElementById("artist-song-count").innerHTML =
    "Songs: " + songs.length;
};

setSongs();

setInterval(() => {
  setSongs();
}, 1000);
