<?php

use App\Models\Service;

function getServices() {
    
    $services = Service::orderBy('title', 'asc')->where('status', '1')->get();
    return $services;
}

?>