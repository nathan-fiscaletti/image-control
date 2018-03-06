<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="A utility used to generate a re-size URL wrapper for an image URL quickly and easily. This URL wrapper will always redirect back to the original image, however it will modify certain properties, including width and height, of the base image.">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Image Control - Image Re-Size URL Wrapper Generator</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </head>
    <body style='background:#eee;'>
        <div class="container">
            <div class="row">
                <br />
                <div class="col-md-6 col-md-offset-3" style='background: #fff;box-shadow: 0 0 15px rgba(0,0,0,0.1);border: 1px solid #ccc;padding:40px;'>
                    <a href="https://github.com/nathan-fiscaletti/image-control"><img style="position: absolute; top: 0; right: 0; border: 0; z-index: 2147483647;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a>
                    <h1 style='color: #444;font-size: 36px;font-family: sans-serif;font-weight: bold;'>Image Control</h1>
                    <hr />
                    <h3>Generate Re-Size Image URL</h3> 
                    <p> Enter an Image URL and a desired width and height and we will generate a re-size wrapper URL for the image. </p>
                    <form method="post" action="./">
                        <input type='hidden' name='generate' value='1' />
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="image"> Image URL</label>
                                <input type="text" class="form-control" name="image" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="width"> Width</label>
                                <input type="number" class="form-control" name="width" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="height"> Height</label>
                                <input type="number" class="form-control" name="height" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <input type='submit' value='Generate Re-Size URL!' class="btn btn-lg btn-success btn-block" />
                            </div>
                        </div>
                    </form>
                    <?php 
                        if (isset($_POST['generate'])) { 
                            $url = 'http://image-control.online/image.php?image='.urlencode($_POST['image']).'&width='.urlencode($_POST['width']).'&height='.urlencode($_POST['height']);
                            ?>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label> Generated URL</label>
                                        <textarea class='form-control'><?php echo $url; ?></textarea>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                    <hr />
                    <div align='center'>
                        <!-- Place this tag where you want the button to render. -->
                        <a class="github-button" href="https://github.com/nathan-fiscaletti" aria-label="Follow @nathan-fiscaletti on GitHub">Follow @nathan-fiscaletti</a>
                        <br /><br />
                        <p style='font-size: 12px;font-style: italic;'>© 2018 Nathan Fiscaletti</p>
                        <!-- Start of Globel Code -->
                        <CENTER style='display:none;'>
                        <script language="JavaScript">
                            var count = "imagecontrol";          // Change Your Account?
                            var type = "smallblack";       // Change Your Counter Image?
                            var digits = "7";          // Change The Amount of Digits on Your Counter?
                            var prog = "hit";          // Change to Either hit/unique?
                            var statslink = "no";    // provide statistical link in counter yes/no?
                            var sitelink = "yes";     // provide link back to our site;~) yes/no?
                            var cntvisible = "yes"; // do you want counter visible yes/no?
                        </script>
                        <!-- START DO NOT TAMPER WITH ANYTHING ELSE BELOW THIS LINE FOR YOUR WEBTV & UNIX VISITORS -->
                        <script language="JavaScript" src="http://006.free-counters.co.uk/count-123.js">
                        </script>
                        <noscript>
                        <a href="http://www.free-counters.co.uk" target="_blank">
                        <img  src="http://006.free-counters.co.uk/count-123.pl?count=imagecontrol&cntvisible=no&mode=noscript" alt="Free Counters" title="Free Counters" border="0"/>
                        </a>The following text will not be seen after you upload your website,
                        please keep it in order to retain your counter functionality 
                        <br><a href="http://www.free-counters.co.uk" target="_blank">Free Trackers</a><br> <a href="http://www.free-counters.co.uk" target="_blank">Help</a><br>

                        </noscript>
                        <!-- END DO NOT TAMPER WITH ANYTHING ELSE ABOVE THIS LINE FOR YOUR WEBTV & UNIX VISITORS -->
                        </CENTER>        
                        <!-- End of Globel Code -->

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>