<?php

error_reporting(E_ALL);
require  '../vendor/autoload.php';

use \Nyholm\ZebraImage\ZebraImage;
echo "asda";
$res=App\test::sumar(1,3);
echo $res;
$image=new ZebraImage();


    // indicate a target image
    // note that there's no extra property to set in order to specify the target
    // image's type -simply by writing '.jpg' as extension will instruct the script
    // to create a 'jpg' file
    $image->source_path = 'dog1.jpg';
    $image->target_path = 'dog124small.jpg';

    // since in this example we're going to have a jpeg file, let's set the output
    // image's quality
    $image->jpeg_quality = 100;

    // some additional properties that can be set
    // read about them in the documentation
    $image->preserve_aspect_ratio = true;
    $image->enlarge_smaller_images = true;
    $image->preserve_time = true;
    if (!$image->resize(100, 100, ZEBRA_IMAGE_CROP_CENTER)) {

            // if there was an error, let's see what the error is about
            switch ($image->error) {

                case 1:
                    echo 'Source file could not be found!';
                    break;
                case 2:
                    echo 'Source file is not readable!';
                    break;
                case 3:
                    echo 'Could not write target file!';
                    break;
                case 4:
                    echo 'Unsupported source file format!';
                    break;
                case 5:
                    echo 'Unsupported target file format!';
                    break;
                case 6:
                    echo 'GD library version does not support target file format!';
                    break;
                case 7:
                    echo 'GD library is not installed!';
                    break;

            }

        // if no errors
        } else {

            echo 'Success!';

        }
?>
