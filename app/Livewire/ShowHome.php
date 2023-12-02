<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $services = Service::orderBy('title', 'asc')->get();
        return view('livewire.show-home', [
            'services' => $services
        ]);
    }
}
