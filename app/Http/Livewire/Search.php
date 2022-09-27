<?php

namespace App\Http\Livewire;
use App\Models\Thread;
use Livewire\WithPagination;

use Livewire\Component;

class Search extends Component
{

    use WithPagination;

    public $title;
    public $search;

    public function searchTopic(){
        // $this->title = Thread::where('title', 'like', '%'.$this->search.'%')->paginate(10);
    }





    public function render()
    {
        return view('livewire.search',['titles' => Thread::where('title', 'like', '%'.$this->search.'%')->paginate(10)]);
    }
}
