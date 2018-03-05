<html>
    <h2>Resize Image URL</h2>
    <form action='./' method='POST'>
        <input type='hidden' name='generate' value='1' />
        <table>
            <tr>
                <td style='width: 100px'>Image URL:</td>
                <td><input type='text' name='image' style='width:300px' /></td>
            </tr>
            <tr>
                <td>Width:</td>
                <td><input type='number' name='width' /> <b>px</b></td>
            </tr>
            <tr>
                <td>Height:</td>
                <td><input type='number' name='height' /> <b>px</b></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' value='Create URL for resized image' /></td>
            </tr>
        </table>
    </form>

    <?php 
    if (isset($_POST['generate'])) { 
        $url = 'http://image-control.online/image.php?image='.$_POST['image'].'&width='.$_POST['width'].'&height='.$_POST['height'];

        ?>
            <br /><br />
            <h2>Result</h2>

            <table>
                <tr>
                    <td>
                        <b>URL: </b>
                    </td>
                    <td>
                        <a href='<?php echo $url; ?>'><?php echo $url; ?></a>
                    </td>
                </tr>
                <tr>
                    <td valign='top'>
                        <b>Preview: </b>
                    </td>
                    <td>
                        <img src='<?php echo $url; ?>' />
                    </td>
                </tr>
            </table>
        <?php
    }
    ?>


</html>

