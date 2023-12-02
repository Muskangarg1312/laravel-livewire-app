<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowTeamPage extends Component
{
    public function render()
    {
        
        $members = Member::orderBy('name', 'asc')->get();
        return view('livewire.show-team-page', [
            'members' => $members
        ]);
    }
}
