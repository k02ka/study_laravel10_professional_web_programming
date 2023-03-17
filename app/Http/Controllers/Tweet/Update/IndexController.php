<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Models\Tweet;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetService): View
    {
        /** @var int $tweetId */
        $tweetId = $request->route('tweetId');
        $tweetId = (int)$tweetId;
        /** @var User */
        $user = $request->user();
        if (!$tweetService->checkOwnTweet($user->id, $tweetId)) {
            throw new AccessDeniedHttpException();
        }

        $tweet = Tweet::where('id', $tweetId)->firstOrFail();
        return view('tweet.update')->with('tweet', $tweet);
    }
}
