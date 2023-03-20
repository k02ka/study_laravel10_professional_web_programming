<?php

namespace App\View\Components\Tweet;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Options extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private int $tweetId, private int $userId)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tweet.options')
            ->with('tweetId', $this->tweetId)
            ->with('myTweet', \Illuminate\Support\Facades\Auth::id() === $this->userId);
    }
}
