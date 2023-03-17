<?php

namespace App\Http\Controllers\Tweet;

use App\Models\Tweet;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Services\TweetService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetService): RedirectResponse
    {
        /** @var int */
        $tweetId = $request->route('tweetId');
        $tweetId = (int) $tweetId;
        /** @var User */
        $user = $request->user();
        if (!$tweetService->checkOwnTweet($user->id, $tweetId)) {
            throw new AccessDeniedHttpException();
        }

        $tweet = Tweet::where('id', $tweetId)->firstOrFail();
        $tweet->delete();
        return redirect()
            ->route('tweet.index')
            ->with('feedback.success', 'つぶやきを削除しました');
    }
}
