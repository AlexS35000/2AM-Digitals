<?php
if (empty($_FILES['image1']['name'])) {} else {
    $id             = $id; 
    $logo           = $_FILES['image1']['name'];
    $fichier        = $_FILES['image1']['tmp_name'];
    $ext0           = pathinfo($logo, PATHINFO_EXTENSION);
    $ext            = strtolower($ext0);
    $uploadfile     = '../ressources/catalogue/mini-' . $id . '-1.webp';
    $dimension      = getimagesize($fichier);
    $largeur        = $dimension[0];
    $hauteur        = $dimension[1];
    $hautmax        = 150;
    if ($hauteur > $hautmax) {
        $ratio      = ROUND(($hauteur / $hautmax), 1);
        $newlar     = ROUND(($largeur / $ratio), 0);
        $newhau     = ROUND(($hauteur / $ratio), 0);
    } else {
        $newlar     = $largeur;
        $newhau     = $hauteur;
    }
    if ($logo != '') {
        if ($ext == 'jpg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'jpeg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'png') {
            $image          = imagecreatefrompng($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'gif') {
            $image          = imagecreatefromgif($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'webp') {
            $image          = imagecreatefromwebp($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        imagewebp($nouvelle, $uploadfile, 100);
        imagedestroy($nouvelle);
    }
}
if (empty($_FILES['image2']['name'])) {} else {
    $id             = $id; 
    $logo           = $_FILES['image2']['name'];
    $fichier        = $_FILES['image2']['tmp_name'];
    $ext0           = pathinfo($logo, PATHINFO_EXTENSION);
    $ext            = strtolower($ext0);
    $uploadfile     = '../ressources/catalogue/mini-' . $id . '-2.webp';
    $dimension      = getimagesize($fichier);
    $largeur        = $dimension[0];
    $hauteur        = $dimension[1];
    $hautmax        = 150;
    if ($hauteur > $hautmax) {
        $ratio      = ROUND(($hauteur / $hautmax), 1);
        $newlar     = ROUND(($largeur / $ratio), 0);
        $newhau     = ROUND(($hauteur / $ratio), 0);
    } else {
        $newlar     = $largeur;
        $newhau     = $hauteur;
    }
    if ($logo != '') {
        if ($ext == 'jpg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'jpeg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'png') {
            $image          = imagecreatefrompng($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'gif') {
            $image          = imagecreatefromgif($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'webp') {
            $image          = imagecreatefromwebp($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        imagewebp($nouvelle, $uploadfile, 100);
        imagedestroy($nouvelle);
    }
}
if (empty($_FILES['image3']['name'])) {} else {
    $id             = $id; 
    $logo           = $_FILES['image3']['name'];
    $fichier        = $_FILES['image3']['tmp_name'];
    $ext0           = pathinfo($logo, PATHINFO_EXTENSION);
    $ext            = strtolower($ext0);
    $uploadfile     = '../ressources/catalogue/mini-' . $id . '-3.webp';
    $dimension      = getimagesize($fichier);
    $largeur        = $dimension[0];
    $hauteur        = $dimension[1];
    $hautmax        = 150;
    if ($hauteur > $hautmax) {
        $ratio      = ROUND(($hauteur / $hautmax), 1);
        $newlar     = ROUND(($largeur / $ratio), 0);
        $newhau     = ROUND(($hauteur / $ratio), 0);
    } else {
        $newlar     = $largeur;
        $newhau     = $hauteur;
    }
    if ($logo != '') {
        if ($ext == 'jpg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'jpeg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'png') {
            $image          = imagecreatefrompng($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'gif') {
            $image          = imagecreatefromgif($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'webp') {
            $image          = imagecreatefromwebp($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        imagewebp($nouvelle, $uploadfile, 100);
        imagedestroy($nouvelle);
    }
}
if (empty($_FILES['image4']['name'])) {} else {
    $id             = $id; 
    $logo           = $_FILES['image4']['name'];
    $fichier        = $_FILES['image4']['tmp_name'];
    $ext0           = pathinfo($logo, PATHINFO_EXTENSION);
    $ext            = strtolower($ext0);
    $uploadfile     = '../ressources/catalogue/mini-' . $id . '-4.webp';
    $dimension      = getimagesize($fichier);
    $largeur        = $dimension[0];
    $hauteur        = $dimension[1];
    $hautmax        = 150;
    if ($hauteur > $hautmax) {
        $ratio      = ROUND(($hauteur / $hautmax), 1);
        $newlar     = ROUND(($largeur / $ratio), 0);
        $newhau     = ROUND(($hauteur / $ratio), 0);
    } else {
        $newlar     = $largeur;
        $newhau     = $hauteur;
    }
    if ($logo != '') {
        if ($ext == 'jpg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'jpeg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'png') {
            $image          = imagecreatefrompng($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'gif') {
            $image          = imagecreatefromgif($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'webp') {
            $image          = imagecreatefromwebp($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        imagewebp($nouvelle, $uploadfile, 100);
        imagedestroy($nouvelle);
    }
}
if (empty($_FILES['image5']['name'])) {} else {
    $id             = $id; 
    $logo           = $_FILES['image5']['name'];
    $fichier        = $_FILES['image5']['tmp_name'];
    $ext0           = pathinfo($logo, PATHINFO_EXTENSION);
    $ext            = strtolower($ext0);
    $uploadfile     = '../ressources/catalogue/mini-' . $id . '-5.webp';
    $dimension      = getimagesize($fichier);
    $largeur        = $dimension[0];
    $hauteur        = $dimension[1];
    $hautmax        = 150;
    if ($hauteur > $hautmax) {
        $ratio      = ROUND(($hauteur / $hautmax), 1);
        $newlar     = ROUND(($largeur / $ratio), 0);
        $newhau     = ROUND(($hauteur / $ratio), 0);
    } else {
        $newlar     = $largeur;
        $newhau     = $hauteur;
    }
    if ($logo != '') {
        if ($ext == 'jpg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'jpeg') {
            $image          = imagecreatefromjpeg($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'png') {
            $image          = imagecreatefrompng($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'gif') {
            $image          = imagecreatefromgif($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        if ($ext == 'webp') {
            $image          = imagecreatefromwebp($fichier);
            $nouvelle       = imagecreatetruecolor($newlar, $newhau);
            ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
            ImageAlphaBlending($nouvelle, false);
            imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
        }
        imagewebp($nouvelle, $uploadfile, 100);
        imagedestroy($nouvelle);
    }
}