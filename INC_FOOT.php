<footer id="ft">
        <div class="w">
            <div id="d15">
                <div class="d16">
                    <div  id="d17">
                        <a href=""><img src="images/facebook.svg" alt="facebook-icon" class="im3"></a>
                        <a href=""><img src="images/twitter-social-logotype.svg" alt="twitter-icon" class="im3"></a>
                        <a href=""><img src="images/instagram.svg" alt="instagram-icon" class="im3"></a>
                    </div>
                    <div>
                        <a href="Home" class="a1">Home</a>
                        <a href="" class="a1">Buy Gemstones</a>
                        <a href="" class="a1">Blog</a>
                        <a href="" class="a1">Contact Us</a>
                    </div>
                </div>

                <div id="d14" class="d16">
                    <p id="p3">
                        All Rights Reserved &#169; Sahan Gems 2021
                    </p>
                    <p id="p4">Developed By <a href="sahanakalanka.com" id="a4">Sahan Akalanka</a></p>

                    <div style="padding: 10px;">
                        <p style="text-align: right; color: #ffca00; font-weight: bold; text-decoration: underline;">Hotline 011-2925895</p>
                    </div>
                </div>
            </div>
           
           
        </div>
   </footer>


<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script>

var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    }

</script>
</body>
</html>
