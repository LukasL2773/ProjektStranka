function zoomIn(element) {
    var overlay = document.getElementById("overlay");
    var zoomedInImage = document.getElementById("zoomed-in-image");
  
    zoomedInImage.src = element.src;
    overlay.style.display = "flex";
  }
  
  function zoomOut() {
    var overlay = document.getElementById("overlay");
    overlay.style.display = "none";
  }
  