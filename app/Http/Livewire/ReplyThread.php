<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ReplyThread extends Component
{
    use WithFileUploads;
    public $image;
    public $imageUrl = 'not assigned';

    public function save()
    {
      $this->validate([

            'image' => 'nullable|image|max:1024', 
            // 'tags' => 'nullable', 

        ]); 


        if($this->image == null){

            $this->imageUrl = 'null';
        }else{
            $this->imageUrl = $this->image->store('img', 'public');

            return view('livewire.reply-thread',[
                'imageUrl'    => $this->imageUrl,
            ]);
        }

    }


    public function render()
    {
        return view('livewire.reply-thread');
    }
}
