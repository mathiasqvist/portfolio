<footer class="footer1">
    <hr class="hrtop">
    <div class="footer">
        <a href="https://github.com/mathiasqvist" target="_blank"><img class="footerimg" src="images/git.png" alt="Social media"></a>
        <a href="https://dk.linkedin.com/in/mathias-qvist-11333413b?trk=profile-badge" target="_blank"><img class="footerimg" src="images/in.png" alt="Social media"></a>
        <p><span>Mathias Qvist - MQ design</span> <span> Multimediedesigner</span> <span> Tlf: 31 72 60 62 - Email: mathiasqvist@hotmail.com</span> </p>
    </div>
</footer>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<script src="js/typed.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
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
</script>
<script>
    $("#bold").click(function () {
        $(this).addClass("animate");
        $(this).one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function (event) {
            $(this).removeClass("animate");
        });
    });
</script>
</body>

</html>