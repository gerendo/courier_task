<?php

namespace App\Shipping\Couriers\CourierTwo\CourierTwoOriginal;

class CourierTwoOriginal
{
    /**
     * Start Shipping Process ...
     */
    public function createShipmentInfo($data)
    {
        echo "Shipment is Created with This Data <br>";
        die();
    }

    public function createShipmentInstructions()
    {
        echo "Shipment Instructions is Created with This Data <br>";
        die();
    }

    public function getShipmentWaybill()
    {
        echo "Shipment way bill is generated <br>";
        die();
    }

    /**
     * Track Shipping Process ...
     */
    public function getShipmentTrackingDetails($trackingNumber)
    {
        echo "Shipment details for package no #" . $trackingNumber . " is :<br>";
        echo "<pre dir='ltr'>";
        print_r([
            'id' => $trackingNumber,
            'status' => fake()->randomElement(['deliver', 'On Way','packaging']),
        ]);
        echo "</pre>";
        die();
    }
}
