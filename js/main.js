// Rotating adjectives every 2 seconds
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

// Rotate adjectives every 2 seconds
setInterval(rotateAdjectives, 2000);


// jQuery functions for hamburger menu and smooth scroll
jQuery(document).ready(function($) {
  // Hamburger menu toggle
  $(".hamburger").on("click", function() {
    if ($(".mobile-navbar").hasClass("active")) {
      $(".mobile-navbar").slideUp(500, function() {
        $(this).removeClass("active");
      });
    } else {
      $(".mobile-navbar").slideDown(500).addClass("active");
    }
  });

  // Smooth scroll for anchor links
  $('a[href*="#"]').on('click', function(event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 500); // 500 milliseconds for smooth scroll
  });

  // Scroll-based circle rotation (slower rotation)
  $(window).on('scroll', function() {
    // Get the current scroll position
    var scrollPosition = $(this).scrollTop();

    // Make the rotation slower by dividing the scrollPosition by 4
    var rotation = (scrollPosition / 4) % 360;

    // Apply the slower rotation to the circle element
    $('.circle-text-wrap').css({
      'transform': 'rotate(' + rotation + 'deg)'
    });
  });
});

// Variables
const videoContainer = document.querySelector('.video-container');
const muteButton = document.getElementById('mute-button');
const video = document.getElementById('wb-video');
const muteIcon = document.getElementById('mute-icon');
const unmuteIcon = document.getElementById('unmute-icon');

// Track mouse movement and set button position relative to video container
videoContainer.addEventListener('mousemove', (e) => {
    const rect = videoContainer.getBoundingClientRect();
    const x = e.clientX - rect.left - (muteButton.offsetWidth / 2) + 10;  // Center the button on X
    const y = e.clientY - rect.top - (muteButton.offsetHeight / 2) + 10;  // Center the button on Y and move it down by 10px

    // Set the button's position
    muteButton.style.left = `${x}px`;
    muteButton.style.top = `${y}px`;
});

// Toggle sound on click
muteButton.addEventListener('click', () => {
    if (video.muted) {
        video.muted = false;
        muteIcon.style.display = 'none';
        unmuteIcon.style.display = 'flex';
    } else {
        video.muted = true;
        muteIcon.style.display = 'flex';
        unmuteIcon.style.display = 'none';
    }
});
