<?php

header('Content-Type: application/json');

require_once __DIR__ . '/controllers/SectionController.php';

try {

    $controller = new SectionController();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = file_get_contents('php://input');

        $newsection = json_decode($data, true);

        $controller->addingSection($newsection);

    } else {

        $controller->gettingSection();

    }

} catch (Throwable $e) {

    http_response_code(400);

    echo json_encode([
        'error' => $e->getMessage()
    ]);

}
?>
