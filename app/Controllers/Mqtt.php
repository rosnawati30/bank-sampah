<?php
namespace App\Controllers;

use App\Libraries\Mqtt_client;

class Mqtt extends BaseController {
    protected $mqtt_client;

    function __construct() {
        // Buat instance dari Mqtt_client
        $this->mqtt_client = new Mqtt_client();
    }

    public function index() {
        $topic = 'berat';
        $message = $this->mqtt_client->subscribe($topic);
        
        if ($message !== false) {
            echo 'Received message: ' . $message;
        } else {
            echo 'Failed to connect to MQTT broker or subscribe to topic.';
        }
    }
}
