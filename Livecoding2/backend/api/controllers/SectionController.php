<?php

require_once __DIR__ . '/../../services/SectionService.php';

class SectionController{
    private $service;

    public function __construct(){
        $this->service = new SectionService();
    }

    public function gettingSection(){
        $sections = $this->service->getSection();
        echo json_encode($sections);
    }

    public function addingSection($newsection){
        $this->service->addSection($newsection);
        echo json_encode([
            'message' => 'Section ajoutée avec succès'
        ]);
    }
}
?>