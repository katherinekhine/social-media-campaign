// scroll reveal animations
const sr = ScrollReveal({
  origin: "bottom",
  distance: "60px",
  duration: 3000,
  delay: 100,
  // reset: true,
});

// home
sr.reveal(".home-ani", { origin: "right" });
sr.reveal(".search-ani", { origin: "top" });
sr.reveal(".home-img-ani", { origin: "left", delay: 250, distance: "10px" });
sr.reveal(".heading-ani", { origin: "top", delay: 250 });
sr.reveal(".vd-ani", { delay: 280 });
sr.reveal(".home-p-ani", { origin: "left", delay: 250 });
sr.reveal(".home-p-img-ani", { origin: "right", delay: 250, distance: "30px" });
sr.reveal(".join-ani", { delay: 200 });
sr.reveal(".join-ani-2", { delay: 640, duration: 3200 });
