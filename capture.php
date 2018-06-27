<!-- Header-->
<?php include 'header.php'; ?>
<?php if (isset($_SESSION['user'])) { ?>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php include 'navigation.php'; ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <?php include 'breadcrumb.php'; ?>
        </div>

        <div class="container-fluid">
            <!-- Content-->
            <!--Form Section-->
            <div class="row">
                <div class="col-xl-12 col-sm-12 mb-12">
                    <?php echo $_SESSION['user']; ?>
                    <h1>Enter a number from the sliding scale below, which best describes you</h1>
                    <p>STRONGLY DISAGREE 1,2,3,4 | AGREE SOMEWHAT 5,6,7 | STRONGLY AGREE 8,9,10</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-6 mb-6">
                    <div class="card text-black bg-default o-hidden h-100">
                        <form action="#" id="stress_form">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">1. I can't honestly say
                                    what I really think or get things of my chest at work</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q1">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">2. My job has lot of
                                    responsibility,but I don't have much authority</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q2">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">3. I could usually do a
                                    much better job if I were given more time</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q3">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">4. I seldom recieve
                                    adequate acknoledgement or appreciation when my work is really good</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q4">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">5. In General, I am not
                                    particularly proud or satisfied with my job</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q5">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">6. I have the impression
                                    that I am repeatedly picked on or discreminated against work</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q6">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">7. My work place
                                    environment is not very pleasent or safe</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q7">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">8. My job often interferes
                                    with my family and social pbligations,or personal needs</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q8">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">9. I tend to have frequent
                                    argument with superier,or corwarkers or customers</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q9">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-10 col-form-label">10. Most of the time I
                                    feel I have very little control over my life at work</label>
                                <div class="col-2">
                                    <select class="form-control" id="exampleSelect1" name="q10">
                                        <?php for ($x = 1; $x <= 10; $x++) : ?>
                                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-6 col-sm-6 mb-6">
                    <div class="container-fluid">
                        <div id="results" style="display: none;">Your captured image will appear here...</div>

                        <div id="my_camera"></div>

                        <!-- First, include the Webcam.js JavaScript Library -->
                        <script type="text/javascript" src="js/webcam.js"></script>

                        <!-- Configure a few settings and attach camera -->
                        <script language="JavaScript">
                            Webcam.set({
                                width: 600,
                                height: 460,
                                image_format: 'jpeg',
                                jpeg_quality: 90
                            });
                            Webcam.attach('#my_camera');
                        </script>

                        <!-- A button for taking snaps -->
                        <form>
                            <input type=button value="Capture" class="btn btn-success" onClick="take_snapshot()">
                        </form>

                        <!-- Code to handle taking the snapshot and displaying it locally -->
                        <script language="JavaScript">
                            function take_snapshot() {
                                setLoader();
                                var form_stress = $("#stress_form");
                                var form_data_arr = form_stress.serializeArray();


                                //console.log(form_data_arr);

                                var sum = 0;
                                for (i = 0, len = form_data_arr.length, text = ""; i < len; i++) {
                                    sum += parseInt(form_data_arr[i]['value']);
                                }

                                var stress_avg = sum / form_data_arr.length;
                                console.log(stress_avg);

                                // take snapshot and get image data
                                Webcam.snap(function (data_uri) {
                                    // display results in page

                                    document.getElementById('results').innerHTML =
                                        '<h2>Processing:</h2>';

                                    Webcam.upload(data_uri, 'app/saveimage.php', function (code, text) {
                                        document.getElementById('results').innerHTML =
                                            '<h2>Captured Image</h2>' +
                                            '<img src="' + text + '"/>';

                                        var snap = text;


                                        // Replace <Subscription Key> with your valid subscription key.
                                        var subscriptionKey = "b7c3c9ed2d5e47f5b26567cd28f2dfbc";

                                        // NOTE: You must use the same region in your REST call as you used to
                                        // obtain your subscription keys. For example, if you obtained your
                                        // subscription keys from westus, replace "westcentralus" in the URL
                                        // below with "westus".
                                        //
                                        // Free trial subscription keys are generated in the westcentralus region.
                                        // If you use a free trial subscription key, you shouldn't need to change
                                        // this region.
                                        var uriBase =
                                            "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/detect";

                                        // Request parameters.
                                        var params = {
                                            "returnFaceId": "true",
                                            "returnFaceLandmarks": "false",
                                            "returnFaceAttributes":
                                            "age,gender,headPose,smile,facialHair,glasses,emotion," +
                                            "hair,makeup,occlusion,accessories,blur,exposure,noise"
                                        };


                                        // Display the image.
                                        var sourceImageUrl = 'http://<?php echo $_SERVER['HTTP_HOST']; ?>' + '/' + snap;
                                        document.querySelector("#sourceImage").src = sourceImageUrl;

                                        // Perform the REST API call.
                                        $.ajax({
                                            url: uriBase + "?" + $.param(params),

                                            // Request headers.
                                            beforeSend: function (xhrObj) {
                                                xhrObj.setRequestHeader("Content-Type", "application/json");
                                                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
                                            },

                                            type: "POST",

                                            // Request body.
                                            data: '{"url": ' + '"' + sourceImageUrl + '"}',
                                        })

                                            .done(function (data) {
                                                // Show formatted JSON on webpage.
                                                $("#responseTextArea").val(JSON.stringify(data, null, 2));

                                                $.ajax({
                                                    type: "post",
                                                    url: "app/emotion.php",
                                                    data: {
                                                        action: 'enable',
                                                        face: data,
                                                        stress: stress_avg
                                                    },
                                                    dataType: 'json',
                                                })
                                            })

                                            .fail(function (jqXHR, textStatus, errorThrown) {
                                                // Display error message.
                                                var errorString = (errorThrown === "") ?
                                                    "Error. " : errorThrown + " (" + jqXHR.status + "): ";
                                                errorString += (jqXHR.responseText === "") ?
                                                    "" : (jQuery.parseJSON(jqXHR.responseText).message) ?
                                                        jQuery.parseJSON(jqXHR.responseText).message :
                                                        jQuery.parseJSON(jqXHR.responseText).error.message;
                                                alert(errorString);
                                            });
                                    });
                                });


                            }


                            function setLoader() {
                                jQuery(".wrap-forms-loader").show();
                            }

                            function disableLoader() {
                                jQuery(".wrap-forms-loader").hide();
                            }

                        </script>

                        <div id="wrapper" style="width:1020px; display:none; ">
                            <div id="jsonOutput" style="width:600px; display:table-cell;">
                                Response:<br><br>

                                <textarea id="responseTextArea" class="UIInput"
                                          style="width:580px; height:400px;"></textarea>
                            </div>
                            <div id="imageDiv" style="width:420px; display:table-cell;">
                                Source image:<br><br>

                                <img id="sourceImage" width="400"/>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Content-->

        </div>
        <div class="wrap-forms-loader"></div>
        <style>
            .wrap-forms-loader {
                position: fixed;
                left: 0;
                right: 0;
                bottom: 0;
                top: 0;
                display: none;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 999999999;
            }
        </style
                <!-- Footer-->
            <?php include 'footer.php'; ?>
    </div>
    </body>
<?php } else {
    header('location:login.php');
} ?>
</html>
