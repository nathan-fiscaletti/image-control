<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Image Control - Resize URL Wrapper Generator</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>Image Control</h1>
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
                            $url = 'http://image-control.online/image.php?image='.$_POST['image'].'&width='.$_POST['width'].'&height='.$_POST['height'];
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
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>