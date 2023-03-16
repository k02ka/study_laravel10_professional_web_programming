<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Services\TweetService;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetService): View
    {
        $tweets = $tweetService->getTweets();
        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
