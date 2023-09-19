document.addEventListener("DOMContentLoaded", function () {
  const audio = document.getElementById("duration-audio");
  const durationElement = document.getElementById("duration");

  audio.addEventListener("loadedmetadata", function () {
    let duration = Math.floor(audio.duration);

    let minutes = Math.floor(duration / 60);
    let seconds = duration % 60;

    let formattedDuration = `${minutes.toString().padStart(2, "0")}:${seconds
      .toString()
      .padStart(2, "0")}`;

    durationElement.textContent = formattedDuration;

    durationElement.innerHTML = "Duration: " + formattedDuration;
  });
});
