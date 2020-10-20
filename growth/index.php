<?php
$site_title = 'Purdue IEEE';
$site_index = '/';
include '../header.php';
?>
    <script type="text/javascript">
        $(document).ready(function () {
            populateImages();
        });

        function populateImages() {
            $.ajax({
                url: 'carousel.json',
                success: function (data) {
                    let tmp = document.createDocumentFragment();
                    for (let i = 0; i < data.length; i++) {
                        let img = data[i];
                        let item = document.createElement('div');
                        item.className = "item";
                        if (i === 0)
                            item.classList.add("active");
                        let fill = document.createElement("div");
                        fill.className = "fill";
                        fill.style.backgroundImage = "url(" + img["url"] + ")";
                        item.appendChild(fill);
                        // let caption = document.createElement("div");
                        // caption.className = "carousel-caption";
                        // item.appendChild(caption);
                        tmp.appendChild(item);
                    }
                    document.getElementById("carousel_inner").appendChild(tmp);
                }
            })
        }
    </script>
    <style>
        #centerside {
            width: 100%;
        }
    </style>
    <!-- Content Row -->
    <div class="well card-1">
        <div class="row">
            <!-- Content Column -->
            <h1 class="text-dark text-center">Growth &amp Engagement</h1>
            <div class="row">
                <div class="col-md-8 text-dark col-md-offset-2">
                    <br>
                    <h4 class="text-center">
                        Interested in meeting new people and making community connections? Join G&E to create member
                        expansion and community outreach opportunities for Purdue IEEE!
                    </h4>
                    <hr>
                    <p class="text-justify">
                        As part of the Growth & Engagement committee, you will help plan, advertise, and staff Purdue
                        IEEE's new member recruitment and community events.
                    </p>
                    <p>
                        In the past, G&E has put on educational STEM activities for PESC's Engineering Tomorrow event
                        and National Engineer Day at the Indianapolis Children's Museum.
                    </p>
					<!--
                    <p>
                        If you're interested in learning more about Purdue IEEE's Growth & Engagement committee, please
                        come to the 2018 spring info session on Tuesday, 1/22 6:00pm - 7:00pm in EE 115.
                    </p>
					-->
					<p>
					    Have an event for which you need volunteers? Looking to hold outreach?
						Want to be involved in coordinating? Contact us at <a href="growth@purdueieee.org">growth@purdueieee.org</a>.
					</p>
                    <hr>
                    <div class="col-md-12">
                        <div class="col-md-6" style="float: left;">
                            <h5 class="media-heading">Info Session</h5>
                            <p class="text-justify">Thursday 9/6 6:00pm - 7:00pm in EE 222</p>
                        </div>
                        <div class="col-md-6" style="float: right;">
                            <h5 class="media-heading">Regular Meetings</h5>
                            <p>Thursdays, 6:00pm, in EE 222</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="well card-1 text-dark">
        <div class="row text-center">
            <h1>Previous Events</h1>
            <header id="growth_carousel" class="carousel slide card-2">
                <div id="carousel_inner" class="carousel-inner"></div>
                <!-- Controls -->
                <a class="left carousel-control" href="#growth_carousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#growth_carousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </header>
        </div>
    </div>

<?php include '../footer.php'; ?>