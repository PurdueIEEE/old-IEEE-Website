    <!-- Footer -->
    <footer>
        <div id="footer-text" class="row">
            <div class="col-lg-12">
                <center><p>Copyright &copy; Purdue IEEE
                    <?php
                        date_default_timezone_set("UTC");
                        echo date("Y");
                    ?>
                </p></center>
            </div>
        </div>
    </footer>

    </div>
    <!-- /.container -->

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/bootstrap.min.js"></script>

    <?php if ($carousel) { 
    //Activate the carousel on the main page only ?>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <?php } ?>


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-66463204-1', 'auto');
        ga('send', 'pageview');
    </script>

<!-- TODO: Make this dynamic to find the parent element's color always. -->
    <script>
var c = $('body').css('background-color')
.replace('rgb(', '')
.replace(')','' )
.split(',')
.map(Number);
var o = Math.round(((parseInt(c[0]) * 299) +
                    (parseInt(c[1]) * 587) +
                    (parseInt(c[2]) * 114)) /1000);
if(o > 125) {
    $('#footer-text').css('color', '#555');
} else {
    $('#footer-text').css('color', '#eee');
}
    </script>

<script>
// Ripple-effect animation
(function($) {
 $(".ripple-effect").click(function(e){
                           var rippler = $(this);
                           
                           // create .ink element if it doesn't exist
                           if(rippler.find(".ink").length == 0) {
                           rippler.append("<span class='ink'></span>");
                           }
                           
                           var ink = rippler.find(".ink");
                           
                           // prevent quick double clicks
                           ink.removeClass("animate");
                           
                           // set .ink diametr
                           if(!ink.height() && !ink.width())
                           {
                           var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
                           ink.css({height: d, width: d});
                           }
                           
                           // get click coordinates
                           var x = e.pageX - rippler.offset().left - ink.width()/2;
                           var y = e.pageY - rippler.offset().top - ink.height()/2;
                           
                           // set .ink position and add class .animate
                           ink.css({
                                   top: y+'px',
                                   left:x+'px'
                                   }).addClass("animate");
                           })
 })(jQuery);
</script>

</body>

</html>
