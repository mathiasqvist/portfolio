  document.addEventListener("DOMContentLoaded", function () {
      Typed.new("#forside4", {
          strings: ["SEO", "RESPONSIVE", "JQUERY", "PHP", "JAVASCRIPT", "SCSS"]
          , typeSpeed: 40
          , startDelay: 500
          , backSpeed: 40
          , backDelay: 1500
          , loop: true
          , showCursor: false
          , shuffle: true
      , });
  });
  $(function () {
      $("#openbutton").click(function (event) {
          $('#mobilenav').animate({
              left: "340px"
          }, 'slow');
      });
  });