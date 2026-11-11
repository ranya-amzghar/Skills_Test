<?php
//SectionManager.php + throw
class SectionDAO{
    private $file;

    public function __construct(){
        $this->file = __DIR__.'../database/section_data.json';
    }

    public function getSection(){
        if(!file_exists($this->file)){
            return [];
        }
        $json = file_get_contents($this->file);
        if($json===false){
            throw new Exception("Erreur lors de la lecture du fichier");
        }
        return json_decode($json,true);
    }

    public function addSection($newsection){
        $sections = $this->getSection();
        $sections[] = $newsection;

        $json = json_encode($sections);

        if(file_put_contents($this->file,$json)===false){
            throw new Exception("Erreur lors de l'enregistrement.");
        }
        return $newsection;
    }
}
require 'Section.php';

class SectionManager{
    private $file;

    public function __construct(){
        $this->file = '../database/section_data.json';
    }

    public function getSection(){
        if(file_exists($this->file)){
            $json = file_get_contents($this->file);
            return json_decode($json,true);
        }
        return [];
    }

    public function addSection($newsection){
        $sections = $this->getSection();
        $sections[] = $newsection;
        file_put_contents($this->file,json_encode($sections));
    }
}

?>
