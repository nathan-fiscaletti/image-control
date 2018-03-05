<?php

namespace ImageControl;

class ImageControl
{
    public function load()
    {
        if (empty($_GET['image'])) {
            $this->displayImage(null);
            return;
        }

        $img = null;

        try {
            $img = imagecreatefromstring(file_get_contents($_GET['image']));
        } catch (\Exception $e) {
            $this->displayImage(null);
            return;
        }

        if (empty($_GET['width']) || !is_numeric($_GET['width'])) {
            $this->displayImage(null);
            return;   
        }

        if (empty($_GET['height']) || !is_numeric($_GET['height'])) {
            $this->displayImage(null);
            return;   
        }

        $width = $_GET['width'];
        $height = $_GET['height'];

        $img = imagescale($img, $width, $height);

        $this->displayImage($img);
    }

    private function displayImage($image)
    {
        if ($image === null) {
            $image = imagecreatefromstring(file_get_contents('./res/unknown.png'));
        }

        header('Content-Type: image/png');
        imagepng($image);
        return;
    }
}
