<?php
class RentalModel {
    public function getPrices() {
        return [
            [
                'ps_type' => 'PlayStation 3', 
                'price' => 'Rp 10.000 / Jam',
                'image' => 'ps3.jpg'
            ],
            [
                'ps_type' => 'PlayStation 4', 
                'price' => 'Rp 20.000 / Jam',
                'image' => 'ps4.jpg'
            ],
            [
                'ps_type' => 'PlayStation 5', 
                'price' => 'Rp 40.000 / Jam',
                'image' => 'ps5.jpg'
            ]
        ];
    }
}
?>
