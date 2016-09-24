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

</body>

</html>
