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
