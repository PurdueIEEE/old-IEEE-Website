<?php
$page_title = 'Join';
$site_title = 'Purdue IEEE';
$site_index = '/';
include 'header.php';

$list = true;
if (!@include_once('DirectoryServices/lists.php')) {
    $list = false;
}
?>

<div class="well card-1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-dark">
            <h1 class="text-center">Join Information</h1>
			<div class="col-sm-6 col-xs-12">
				<img src="/images/join-spring-2021-committees.png" style="height: 100%; width: 100%; object-fit: contain;">
				<strong>
					Join one of our technical committees!
				</strong>
				<p>
					We help our members enter their professional careers, learn engineering, software,
					and hands-on skills, and socialze with other to form lasting connections.
				</p>
			</div>
			<div class="col-sm-6 col-xs-12">
				<img src="/images/join-spring-2021-top.png" style="height: 100%; width: 100%; object-fit: contain;">
				<h3 class="text-center">
					CALLOUT DATE: <br>
					January 27th from 6:30 - 8:00 PM on <a href="https://discord.gg/kZNkKXM">Discord</a>
				</h3>
				<img src="/images/join-spring-2021-bottom.png" style="height: 100%; width: 100%; object-fit: contain;">
				<p style="margin-top: 3em;">
					<a href="https://www.facebook.com/purdueieee">Facebook</a>
					<a href="https://twitter.com/purdueieee?lang=en">Twitter</a>
				</p>
			</div>
			<h4><a href="https://drive.google.com/file/d/1Z2BgGBEYm9jj5fEWnLrKHJqSNJ6rTckB/view?usp=sharing">Announcement Video</a></h4>
        </div>
    </div>
</div>

<div class="well card-1">
    <div class="row">
        <div class="col-lg-12 text-dark">
            <h1 class="text-center">Subscribe to our Mailing Lists</h1>

            <div class="col-md-8 col-md-offset-2 text-dark" id="content">
                <form id="signup-form" action="DirectoryServices/directories.php" title="" method="post"
                      style="font-size: 18px">
                    <label>Signup for our announcements mailing list (Email): </label><br>
                    <input type="email" id="email" name="email" class="form-control"><br>

                    <label>Which technical committees would you like to additionally receive emails from?</label>
                    <div class="checkbox" style="margin-top: 0">
                        <?php if ($list):
                            foreach (Lists::all(true) as $key => $value):
                                if ($key !== 'ieee-announcements'): ?>
                                    <label><input class="tc-check" type="checkbox" name="list[]"
                                                  value="<?php echo $key; ?>"><?php echo $value; ?></label><br>
                                <?php endif;
                            endforeach;
                        else: print("Did not properly load form. Contact the site manager."); endif; ?>
                        <input type="checkbox" name="list[]" checked="true" value="ieee-announcements" hidden>
                    </div>

                    <button class="btn btn-primary btn-raised ripple-effect" type="submit" value="submit">Submit
                    </button>
                    <button class="btn btn-danger btn-raised ripple-effect" type="button" onclick="clearEntries();">
                        Clear
                    </button>
                    <br><br>
                </form>
            </div>

            <script type="application/javascript">
                $("#signup-form").submit(function (event) {

                    /* stop form from submitting normally */
                    event.preventDefault();

                    var $form = $(this),
                        url = $form.attr('action');

                    var list = $('input:checked').map(function () {
                        return $(this).val();
                    }).get();

                    var posting = $.post(url, {
                        email: $('#email').val(),
                        list: list
                    });

                    posting.done(function (data) {
                        var messages = data.split("%%");

                        $("#content > .alert-info").remove();
                        $("#content > .alert-danger").remove();

                        if (messages[0].length > 0) {
                            $("#content").append('<div class="alert alert-info"><strong>' + messages[0] + '</strong></div>');
                        }

                        if (messages[1].length > 0) {
                            //There were some errors
                            $("#content").append('<div class="alert alert-danger"><strong>' + messages[1] + '</strong></div>');
                        }

                    });
                });

                function clearEntries() {
                    $('#email').val("");

                    $('.tc-check').each(function () {
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
            <h1 class="text-center">IEEE Slack</h1>
            <h3 class="text-center"><a href="http://purdueieee.slack.com">purdueieee.slack.com</a></h3>
            <p>
                Purdue IEEE uses Slack to communicate with it's members. Anyone with a Purdue email can sign up and
                get involved with the club. Sign up by clicking the link above and registering for an account. Slack
                is available on Google Play and the Apple Store.
            </p>
        </div>
    </div>
</div>

<div class="well card-1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-dark">
            <h1 class="text-center">IEEE Discord</h1>
            <h3 class="text-center"><a href="https://discordapp.com/invite/fFNnKPK">https://discordapp.com/invite/fFNnKPK</a></h3>
            <p>
                Purdue IEEE uses discord for many calls. Join the link above and register for an account. Discord
                is available on Google Play and the Apple Store.
            </p>
        </div>
    </div>
</div>

<div class="well card-1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-dark">
            <h1 class="text-center">IEEE Dues</h1>
			<br/>
            <p>
                Purdue IEEE Student Organization requires payment of dues for membership<sup><b>1</b></sup>. Payment of annual dues gives access to IEEE resources, such as:
            <ul>
                <li>Access to extras at Learning Events by Learning Committee</li>
                <li>Trip expense coverage for committee competitions and social events</li>
                <li>Free food at General Assemblies (in the past... we provide masks and disinfectants right now)</li>
                <li>Recognition for contributed work with final projects</li>
            </ul>
            Extraordinary circumstances necessitate complex procedures - please read carefully. Annual dues are <b>$15 for on-campus students<sup>2</sup></b> and <b>$7 for fully-online students<sup>3</sup></b>. 
			</p>
			<p>
			This year, you can choose to either pay with physical cash or pay digitally. To pay with physical cash, please go to EE 014, and leave your email and dues with a Treasurer-authorized attendant or IEEE officer inside the office.
			There are two options for paying digitally: venmo or paypal. For security reasons, we have pinned guidance on how to do this in the #IEEE channel in our <a href="http://purdueieee.slack.com">Slack</a>.
            </p>
			<p>
			Upon paying dues, you will receive a Google Forms link that leads to a 1-minute survey. Filling out the requested information in the survey will officially register you in our membership database. Please contact the Treasurer at
            <a href="mailto:IEEE-Treas@purdueieee.org">IEEE-Treas@purdueieee.org</a> if you have any dues-related questions.
			</p>
			<hr/>
			<p><sup><b>1</b></sup>If you are a graduate student with an active International IEEE Membership and wish to join the Purdue Student Branch, you are <b>exempt</b> from the local dues! Please contact a Purdue IEEE officer to complete registration.</p>
			<p><sup><b>2</b></sup>If classes go online early, excess dues will be forwarded to the next academic year.</p>
			<p><sup><b>3</b></sup>Must attend events/meetings virtually.</p>
		</div>
    </div>
</div>

<?php include 'footer.php'; ?>
