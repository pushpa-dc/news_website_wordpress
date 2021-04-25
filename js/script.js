$(function () {
  const showNav = document.querySelector(".show-nav");
  const dot = document.querySelector(".dot");
  let isShow;
  const sideNav = document.querySelector(".side-nav");
  showNav.addEventListener("click", () => {
    if (isShow) {
      sideNav.classList.add("l-h");
      document.body.style.marginLeft = "250";
      document.body.style.overflow = "hidden";
      dot.style.display = "block";
      isShow = false;
    } else {
      sideNav.classList.remove("l-h");
      document.body.style.marginLeft = "0";
      document.body.style.overflowX = "auto";
      dot.style.display = "none";
      isShow = true;
    }
  });
  if (dot)
    dot.addEventListener("click", () => {
      dot.style.display = "none";
      document.body.style.marginLeft = "0";
      document.body.style.overflow = "auto";
      sideNav.classList.remove("l-h");

    });

  var videos = $(".post-entry p>iframe").addClass("embed-responsive-item");
  videos.wrap("<div class='embed-responsive embed-responsive-16by9'></div>");

  $(".slide").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 1,
        nav: true,
        loop: false,
      },
    },
  });
  $("a[href*='esnepal'], cloudflare-app, src[src*='nepali.gif']").remove();
  let size = 22;

  $(document).ready(function () {
    const date_time = document.querySelector("#date_time");
    if (date_time)
      date_time.innerHTML = `${new Date().toLocaleString()}`;
    const prev = document.querySelector(".owl-prev");
    const next = document.querySelector(".owl-next");
    if (prev) {
      prev.innerHTML = `<i>←</i>`;
      next.innerHTML = `<i>→</i>`;

    }

    $("#bigger").click(() => {
      $(".post-entry p").css("font-size", size + 1 + "px");
      size++;
      console.log("clicked", size)
    });
    $("#resize").click(function () {
      $(".post-entry p").css("font-size", "22px");
    });
    $("#smaller").click(() => {
      $(".post-entry p").css("font-size", size - 1 + "px");
      size--;
      console.log("clicked")
    });
  });
  const pagination = document.querySelectorAll(".pagination .page-link");
  if (pagination.length) {
    pagination[0].textContent.charAt(0).toLowerCase() === `p` ?
      (pagination[0].textContent = "<") :
      "";

    pagination[pagination.length - 1].textContent.charAt(0).toLowerCase() ===
      `n` ?
      (pagination[pagination.length - 1].textContent = ">") :
      "";
  }
});