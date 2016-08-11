<?php

namespace AppBundle\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadImage
{
    private $targetDir;
    private $fileName;
    private $fileDefault;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    // Fonction qui retourne le chemin absolue pour une image par default.
    public function getFileDefault()
    {
        $this->fileDefault = 'default/avatar.png';
        return $this->fileDefault;
    }

    // Fonction qui retourne le chemin absolue.
    public function getAbsolutePath($fileName)
    {
        $this->fileName = $fileName;

        if(file_exists($this->targetDir.'/'.$this->fileName)){

        return $this->targetDir.'/'.$this->fileName;

        }else{

            return $this->targetDir.'default/avatar.png';
        }
    }

    public function upload($file)
    {

        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->targetDir, $fileName);

        return $this->fileName;   
    }
}