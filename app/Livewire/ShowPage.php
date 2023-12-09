<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Component;

class ShowPage extends Component
{

    public $pageId = null;

    public function mount($id) {
        // echo $id;

        $this->pageId = $id;
    }

    public function render()
    {
        $page = Page::findOrFail($this->pageId);

        // $page = Page::where('id', $this->pageId)->first();
        // if ($page == null) {
        //     abort(404);
        // }
        
        return view('livewire.show-page', [
            'page' => $page
        ]);
    }
}
