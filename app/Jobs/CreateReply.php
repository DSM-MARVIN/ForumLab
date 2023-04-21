<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Reply;
use App\Models\ReplyAble;
use App\Events\ReplyWasCreated;
use App\Http\Requests\CreateReplyRequest;

class CreateReply
{
    private $body;
    private $image;
    private $image_url;
    private $author;
    private $replyAble;

    public function __construct(string $body, $image, $image_url, User $author, ReplyAble $replyAble)
    {
        $this->body = $body;
        $this->image = $image;
        $this->image_url = $image_url;
        $this->author = $author;
        $this->replyAble = $replyAble;
    }

    public static function fromRequest(CreateReplyRequest $request): self
    {
        return new static(
            $request->body(),
            $request->image(),
            $request->image_url(),
            $request->author(),
            $request->replyAble()
        );
    }

    public function handle(): Reply
    {
        $reply = new Reply([
            'body' => $this->body,
            'image' => $this->image,
            'image_url' => $this->image_url
        ]);

        $reply->authoredBy($this->author);
        $reply->to($this->replyAble);
        $reply->save();

        event(new ReplyWasCreated($reply));

        return $reply;
    }
}
