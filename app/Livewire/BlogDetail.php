<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class BlogDetail extends Component
{
    public $blogId = null;

    public function mount($id) {
        // dd($id);
        $this->blogId = $id;
    }

    public function render()
    {
        $article = Article::select('articles.*', 'categories.name as category_name')->leftJoin('categories', 'categories.id', 'articles.category_id')->findOrFail($this->blogId);
        return view('livewire.blog-detail', [
            'article' => $article
        ]);
    }
}
