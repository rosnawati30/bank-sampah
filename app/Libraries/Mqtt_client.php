<?php
namespace App\Libraries;

require_once('phpMQTT.php');

class Mqtt_client {
    private $server = 'e161ba41.ala.asia-southeast1.emqxsl.com'; // MQTT server address
    private $port = 8883; // MQTT server port
    private $username = 'sisampah'; // MQTT username
    private $password = 'sisampah'; // MQTT password
    private $client_id = 'mqttx_101a8040'; // Unique client ID
    protected $mqttCafile = 'D:\xampp\htdocs\bank-sampah\emqxsl-ca.crt';

    public function connect() {
        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id, $this->mqttCafile);

        if (!$mqtt->connect(true, null, $this->username, $this->password)) {
            return false;
        }
        
        return $mqtt;
    }

    public function subscribe($topic, $qos = 0) {
        $mqtt = $this->connect();
        
        if (!$mqtt) {
            return false;
        }

        $message = '';
        
        $mqtt->subscribe([$topic], $qos, function($topic, $msg) use (&$message) {
            $message = $msg;
        }, 0);

        // Wait for message to be received
        $mqtt->proc();
        $mqtt->close();
        
        return $message;
    }
}
