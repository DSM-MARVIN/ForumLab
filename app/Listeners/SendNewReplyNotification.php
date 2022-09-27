<?php

namespace App\Listeners;

use App\Events\ReplyWasCreated;

use App\Models\User;
use App\Notifications\NewReplyNotification;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewReplyNotification
{
   public function handle(ReplyWasCreated $event)
    {
        //
        $thread = $event->reply->replyAble();

        foreach ($thread->subscriptions() as $subscription) {
            if ($this->replyAuthorDoesNotMatchSubscriber($event->reply->author(), $subscription)) {
                $subscription->user()->notify(new  NewReplyNotification($event->reply, $subscription));
            }
        }
    }

    private function replyAuthorDoesNotMatchSubscriber(User $author, $subscription): bool
    {
        return !$author->matches($subscription->user());
    }
}
