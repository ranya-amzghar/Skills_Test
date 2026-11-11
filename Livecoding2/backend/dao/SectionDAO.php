<?php

class SectionDAO{
    private $file;

    public function __construct(){
        $this->file = __DIR__ . '/../database/section_data.json';
    }

    public function getSection(){
        if (!file_exists($this->file)) {
            return [];
        }

        $json = file_get_contents($this->file);

        if ($json === false) {
            throw new Exception("Erreur lors de la lecture du fichier.");
        }

        return json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    }

    public function addSection($newsection){
        $sections = $this->getSection();

        $sections[] = $newsection;

        $json = json_encode($sections, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);

        if (file_put_contents($this->file, $json, LOCK_EX) === false) {
            throw new Exception("Erreur lors de l'enregistrement.");
        }

        return $newsection;
    }
}
?>