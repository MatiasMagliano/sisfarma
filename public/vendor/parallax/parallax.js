var getParallaxContainer = document.querySelector(".parallax-container");

getParallaxContainer.addEventListener("mousemove", function(e) {
  let x = e.pageX / window.innerWidth;
  let y = e.pageY / window.innerHeight;

  this.style.transform = `translate(${x * 5}%, ${y * 5}%)`;
})
