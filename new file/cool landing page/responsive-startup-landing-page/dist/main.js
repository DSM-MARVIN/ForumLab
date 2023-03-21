(function() {

    "use strict";
  
    window.onload = function() {
  
      var images = document.querySelectorAll(".media-images.media-images--config-dynamic .media-images__image");
  
      function adjustImageWidth(image) {
        var widthBase   = 50;
        var scaleFactor = 0.525;
        var imageRatio  = image.naturalWidth / image.naturalHeight;
  
        image.width = Math.pow(imageRatio, scaleFactor) * widthBase;
      }
  
      images.forEach(adjustImageWidth);
  
    };
  
  }());

  // counter

  const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerText = "0";

  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const c = +counter.innerText;

    const increment = target / 200;

    if (c < target) {
      counter.innerText = `${Math.ceil(c + increment)}`;
      setTimeout(updateCounter, 1);
    } else {
      counter.innerText = target;
    }
  };

  updateCounter();
});
