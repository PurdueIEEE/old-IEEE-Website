<?php 
    $title = 'Join Mailing Lists - Purdue IEEE';
    include 'header.php';
?>

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Join Mailing Lists</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Join Mailing Lists</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="well">
        <div class="row">
            <div class="col-lg-12 text-dark">
                <h1 class="text-center">Join IEEE Mailing Lists</h1>

                <div class="col-md-8 col-md-offset-2 text-dark" id="content">
                <form id="signup-form" action="signup_post.php" title="" method="post" style="font-size: 18px">
                    <label>Email:</label>
                    <input type="email" id="email" name="email" class="form-control"><br>

                    <label>Mailing Lists to Subscribe to:</label>
                    <div class="checkbox" style="margin-top: 0">
                        <label><input type="checkbox" name="list[]" checked="true" value="announcements">IEEE Announcements</label><br>
                        <label><input type="checkbox" name="list[]" value="aerial">Aerial Robotics</label><br>
                        <label><input type="checkbox" name="list[]" value="csociety">IEEE Computer Society</label><br>
                        <label><input type="checkbox" name="list[]" value="embs">Engineering in Medicine and Biology Society</label><br>
                        <label><input type="checkbox" name="list[]" value="mtts">Microwave Theory &amp; Techniques Society</label><br>
                        <label><input type="checkbox" name="list[]" value="orbital">Purdue Orbital</label><br>
                        <label><input type="checkbox" name="list[]" value="racing">Racing</label><br>
                        <label><input type="checkbox" name="list[]" value="rov">Remotely Operated underwater Vehicle (ROV)</label><br>
                    </div>

                    <button class="btn btn-primary" type="submit" value="submit">Submit</button>
                    <button class="btn btn-danger" type="button" onclick="clearEntries();">Clear</button><br><br>
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

                        $('input:checked').each(function(){
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

<?php include 'footer.php'; ?>
