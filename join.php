<?php
    $page_title = 'Join';
    $site_title = 'Purdue IEEE';
    $site_index = '/';
    $root = true;
    include 'header.php';
    require_once 'DirectoryServices/lists.php';
?>

    <div class="well card-1">
        <div class="row">
            <div class="col-lg-12 text-dark">
                <h1 class="text-center">Subscribe to our Mailing Lists</h1>

                <div class="col-md-8 col-md-offset-2 text-dark" id="content">
                <form id="signup-form" action="DirectoryServices/directories.php" title="" method="post" style="font-size: 18px">
                    <label>Signup for our announcements mailing list (Email): </label><br>
                    <input type="email" id="email" name="email" class="form-control"><br>

                    <label>Which technical committees would you like to additionally receive emails from?</label>
                    <div class="checkbox" style="margin-top: 0">
                        <?php foreach (Lists::all(true) as $key => $value): if ($key !== 'ieee-announcements'): ?>
                        <label><input class="tc-check" type="checkbox" name="list[]" value="<?php echo $key; ?>"><?php echo $value; ?></label><br>
                        <?php endif; endforeach; ?>
                        <input type="checkbox" name="list[]" checked="true" value="ieee-announcements" hidden>
                    </div>

                    <button class="btn btn-primary btn-raised ripple-effect" type="submit" value="submit">Submit</button>
                    <button class="btn btn-danger btn-raised ripple-effect" type="button" onclick="clearEntries();">Clear</button><br><br>
                </form>
                </div>

                <script type="application/javascript">
                    $("#signup-form").submit(function(event) {

                        /* stop form from submitting normally */
                        event.preventDefault();

                        var $form = $( this ),
                         url = $form.attr( 'action' );

                        var list = $('input:checked').map(function(){
                            return $(this).val();
                        }).get();

                        var posting = $.post(url, {
                            email: $('#email').val(),
                            list: list
                        });

                        posting.done(function(data) {
                            var messages = data.split("%%");

                            $("#content > .alert-info").remove();
                            $("#content > .alert-danger").remove();

                            if (messages[0].length > 0) {
                                $("#content").append('<div class="alert alert-info"><strong>'+messages[0]+'</strong></div>');
                            }

                            if (messages[1].length > 0) {
                                //There were some errors
                                $("#content").append('<div class="alert alert-danger"><strong>'+messages[1]+'</strong></div>');
                            }

                        });
                    });

                    function clearEntries() {
                        $('#email').val("");

                        $('.tc-check').each(function(){
                            $(this).removeAttr("checked");
                        })

                        $("#content > .alert-info").remove();
                        $("#content > .alert-danger").remove();

                        $('#email').focus();
                    }
                </script>

            </div>
        </div>
    </div>

    <div class="well card-1">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-dark">
                <h1 class="text-center">IEEE Dues</h1>
                <p>
                    Purdue IEEE Student Organization follows a simple dues basis for membership. Membership fees are $10 for two semesters, which allows each person to have access to IEEE resources, such as:
                    <ul>
                        <li>Access to extras at Learning Events by Learning Committee</li>
                        <li>Trip expense coverage for committee competitions and social events</li>
                        <li>Free food at General Assemblies</li>
                        <li>Recognition for contributed work with final projects</li>
                    </ul>
                    To pay dues, please contact the Treasurer, Bobby Zhang, at <a href="mailto:IEEE-Treas@purdueieee.org">IEEE-Treas@purdueieee.org</a>, go to EE 014 and use leave your email and dues with a Treasurer-authorized attendant inside the office, or give it to the Treasurer at General Assemblies.
                </p>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
