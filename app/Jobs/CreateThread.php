<?php

namespace App\Jobs;
use Livewire\WithFileUploads;

use App\Models\User;
use App\Models\Thread;
use App\Http\Livewire\ImageUpload;
use Illuminate\Support\Str;
use App\Events\ThreadWasCreated;
use Mews\Purifier\Facades\Purifier;
use App\Http\Requests\ThreadStoreRequest;

class CreateThread
{
    private ImageUpload $imgUrl;
    private $title;
    // private $image;
    private $body;
    private $category;
    private $tags;
    private $author;
    use WithFileUploads;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $title, string $body, string $category, array $tags, User $author)
    {
        // dd($image);
        $this->title = $title;
        // $this->image;
        $this->body = $body;
        $this->category = $category;
        $this->tags = $tags;
        $this->author = $author;
    }


    public static function fromRequest(ThreadStoreRequest $request): self
    {
        return new static(
            $request->title(),
            // $request->image(),
            $request->body(),
            $request->category(),
            $request->tags(),
            $request->author(),
        );
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): Thread
    {
        $thread = new Thread([
            'title'         => $this->title,
            // 'image'         => $this->image,
            'slug'          => Str::slug($this->title),
            'body'          => Purifier::clean($this->body),
            'category_id'   => $this->category,
        ]);

        $thread->authoredBy($this->author);
        $thread->syncTags($this->tags);
        $thread->save();

        event(new ThreadWasCreated($thread));

        return $thread;
    }
}
