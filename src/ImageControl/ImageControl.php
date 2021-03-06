<?php

namespace ImageControl;

class ImageControl
{
    public function load()
    {
        $img = null;

        if (! empty($_GET['image'])) {
            try {
                $img = imagecreatefromstring(file_get_contents($_GET['image']));
            } catch (\Exception $e) {
                $img = null;
            }
        }

        $width = null;
        $height = null;

        if (! empty($_GET['width']) && is_numeric($_GET['width'])) {
            $width = $_GET['width'];
        }

        if (! empty($_GET['height']) && is_numeric($_GET['height'])) {
            $height = $_GET['height'];
        }

        $this->displayImage($img, $width, $height);
    }

    private function displayImage($image, $width, $height)
    {
        if ($image === null) {
            $image = imagecreatefromstring(file_get_contents('./res/unknown.png'));
        }

        if ($width !== null || $height !== null) {
            $image = imagescale($image, $width, $height);
        }

        header('Content-Type: image/png');
        imagepng($image);
        return;
    }
}
