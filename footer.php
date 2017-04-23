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

    <?php if (isset($carousel)) {
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
</body>
</html>
