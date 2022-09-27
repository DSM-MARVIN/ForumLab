<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


use App\Models\Thread;
use App\Models\Category;
use App\Models\Tag;

class ImageUpload extends Component
{  
    use WithFileUploads;
    public $image;
    public $title;
    public $body;
    public $category;
    // public $tags = [];
    // public $imageT;
    public $imageUrl;

    public function upload()
    {
      $this->validate([

            'image' => 'nullable|image|max:1024', 
            'title' => 'required|max:120', 
            'body' => 'required|max:360', 
            'category' => 'required', 
            // 'tags' => 'nullable', 

        ]); 

        $imageUrl;

        if($this->image == null){

            $imageUrl = 'null';
        }else{
            $imageUrl = $this->image->store('img', 'public');
        }

        // $imageUrl = $this->image->store('img', 'public');


        $random_hex = bin2hex(random_bytes(18));

        $user = auth()->user();
        $userId = auth()->user()->id;

        Thread::create([
            'image' =>  $imageUrl,
            'title' => $this->title, 
            'body' => $this->body, 
            'slug' => $random_hex, 
            'author_id' => $userId, 
            'category_id' => $this->category,
        ]);

    //    $this->image->hashName();
    //    $validateImage['image'] = $image;
        // uplaod::create
        // dd($imageUrl);

        // $this->himage = $this->image->store('images');
    }


    public function render()
    {
        return view('livewire.image-upload',[
            'categories'    => Category::all(),
            'tags'          => Tag::all(),
        ]);
    }
}
