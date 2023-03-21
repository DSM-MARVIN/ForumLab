(function() {

    "use strict";
  
    window.onload = function() {
  
      var images = document.querySelectorAll(".media-images.media-images--config-dynamic .media-images__image");
  
      function adjustImageWidth(image) {
        var widthBase   = 70;
        var scaleFactor = 0.525;
        var imageRatio  = image.naturalWidth / image.naturalHeight;
  
        image.width = Math.pow(imageRatio, scaleFactor) * widthBase;
      }
  
      images.forEach(adjustImageWidth);
  
    };
  
  }());

  //typing
  $(function () {
    $(".text").typed({
      strings:["What service can we offer you.","Web Development", "App Development", "Upgrading Laravel" , "Database Administration ", "API Integration", "CMS Systems", "E-Commerce"],
      typeSpeed: 80,
      backSpeed: 20,
      backDelay: 1500,
      showCursor: true,
      loop: true
    });
  });