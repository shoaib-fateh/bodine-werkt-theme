const adjectives = document.querySelectorAll('.rotatingText-adjective');
let currentIndex = 0;

function rotateAdjectives() {
  adjectives.forEach((adjective, index) => {
    adjective.classList.remove('active');
    if (index === currentIndex) {
      adjective.classList.add('active');
    }
  });

  currentIndex = (currentIndex + 1) % adjectives.length;
}

// Rotate every 3 seconds
setInterval(rotateAdjectives, 2000);



jQuery(document).ready(function($) {
  $(".hamburger").on("click", function() {
      if ($(".mobile-navbar").hasClass("active")) {
          $(".mobile-navbar").slideUp(500, function() {
              $(this).removeClass("active");
          });
      } else {
          $(".mobile-navbar").slideDown(500).addClass("active");
      }
  });
});
