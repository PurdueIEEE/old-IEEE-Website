<?php
    $page_title = 'IEEE';
    $site_title = 'ROV';
    $site_index = '/rov';
    include '../../header.php';
?>

<!-- Content Row -->
<div class="well card-1">
    <div class="row">

        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="/rov/updates/" class="list-group-item">Updates</a>
                <a href="/rov/history/" class="list-group-item">History</a>
                <a href="/rov/bylaws/" class="list-group-item">Bylaws</a>
                <a href="/rov/sponsors/" class="list-group-item">Sponsors</a>
            </div>
        </div>

        <!-- Content Column -->
        <div class="col-md-7 text-dark col-md-offset-1">
            <h2 class="text-center">ROV Resume Upload</h2>
            <br>
            <?php
              function test_input($data) {
                  $data = str_replace('/','-',$data);
                  $data = str_replace('&','-',$data);
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data, $flags=ENT_QUOTES| ENT_HTML401);
                  return $data;
                }

                $uploadSuccess = test_input($_GET["success"]);
                if ($uploadSuccess == 1) {
                    echo "Your resume has been successfully uploaded!";
                }
                //echo "uploadSuccess is " . $uploadSuccess . "<br>";

            ?>
            <form class="form-horizontal" action="completeprocessing.php" method="post" enctype="multipart/form-data">
                <fieldset>

                    <!-- Form Name -->
                    <legend></legend>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="first">First Name</label>
                        <div class="col-md-4">
                        <input id="first" name="first" type="text" class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="last">Last Name</label>
                        <div class="col-md-4">
                        <input id="last" name="last" type="text" class="form-control input-md" required="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="cost">Resume</label>
                        <div class="col-md-4">
                            <input id="fileToUpload" name="fileToUpload" type="file" class="btn btn-default" required="">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</div>
<!-- /.well -->

<?php include '../footer.php';?>
