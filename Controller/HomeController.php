
<?php
require_once 'Model/RentalModel.php';

class HomeController {
    public function index() {
        $model = new RentalModel();
        $prices = $model->getPrices();
        
        require_once 'View/home.php';
    }
}
?>
