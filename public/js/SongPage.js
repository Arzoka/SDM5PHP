document.addEventListener("DOMContentLoaded", function () {
  const audio = document.getElementById("duration-audio");
  const durationElement = document.getElementById("duration");

  audio.addEventListener("loadedmetadata", function () {
    audio.play();
    let duration = Math.floor(audio.duration);

    let minutes = Math.floor(duration / 60);
    let seconds = duration % 60;

    let formattedDuration = `${minutes.toString().padStart(2, "0")}:${seconds
      .toString()
      .padStart(2, "0")}`;

    durationElement.textContent = formattedDuration;

    durationElement.innerHTML = "Duration: " + formattedDuration;
  });

  audio.addEventListener("playing", function () {
    document.getElementById("playing-div").style.display = "block";
    document.getElementById("vinyl").classList.add("vinyl-animation");
    animateIcon("start");
  });
  audio.addEventListener("pause", function () {
    document.getElementById("playing-div").style.display = "none";
    document.getElementById("vinyl").classList.remove("vinyl-animation");
    animateIcon("end");
  });
  audio.addEventListener("ended", function () {
    doSongChange("next");
  });
});

function animateIcon(arg) {
  if (document.getElementById("rect-1")) {
    if (arg == "start") {
      document.getElementById("rect-1").classList.add("r1anim");
      document.getElementById("rect-2").classList.add("r2anim");
      document.getElementById("rect-3").classList.add("r3anim");
      document.getElementById("rect-4").classList.add("r4anim");
    } else if (arg == "end") {
      document.getElementById("rect-1").classList.remove("r1anim");
      document.getElementById("rect-2").classList.remove("r2anim");
      document.getElementById("rect-3").classList.remove("r3anim");
      document.getElementById("rect-4").classList.remove("r4anim");
    }
  } else {
    console.log("svg IDs not found");
  }
}

function doSongChange(arg) {
  var currentURL = window.location.href;

  var urlParts = currentURL.split("?");
  if (urlParts.length === 2) {
    var queryString = urlParts[1];
    var queryParams = queryString.split("&");
    var newQueryString = "";

    for (var i = 0; i < queryParams.length; i++) {
      var param = queryParams[i].split("=");
      var paramName = param[0];
      var paramValue = param[1];

      if (paramName === "id") {
        if (arg == "next") {
          paramValue = parseInt(paramValue, 10) + 1;
        } else if (arg == "prev") {
          paramValue = parseInt(paramValue, 10) - 1;
        }
      }

      if (i > 0) {
        newQueryString += "&";
      }
      newQueryString += paramName + "=" + paramValue;
    }

    var newURL = urlParts[0] + "?" + newQueryString;
    window.location.href = newURL;
  }
}
