<?php

require_once __DIR__ . '/BaseService.php';
require_once __DIR__ . '/../dao/SectionDAO.php';
require_once __DIR__ . '/../classes/Section.php';

class SectionService extends BaseService{
    private $dao;

    public function __construct(){
        $this->dao = new SectionDAO();
    }

    public function getSection(){
        return $this->dao->getSection();
    }

    public function addSection($data){
        try {

            if (empty($data['nom']) || empty($data['description']) || empty($data['couleur']) || empty($data['icone'])) {
                throw new Exception("Tous les champs sont obligatoires.");
            }

            $section = new Section($data['nom'], $data['description'], $data['couleur'], $data['icone']);

            $newsection = [
                'nom' => $section->getNom(),
                'description' => $section->getDescription(),
                'couleur' => $section->getCouleur(),
                'icone' => $section->getIcone()
            ];

            return $this->dao->addSection($newsection);

        } catch (Exception $e) {
            throw $e;
        }
    }
}
?>