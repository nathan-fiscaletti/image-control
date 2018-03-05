<html>
    <h2>Resize Image URL</h2>
    <form action='./index.php' method='GET'>
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
</html>