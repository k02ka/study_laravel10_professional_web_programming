<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Models\Tweet;
use App\Models\User;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Http\Controllers\Controller;
use App\Services\TweetService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Illuminate\Http\RedirectResponse;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, TweetService $tweetService): RedirectResponse
    {
        /** @var User */
        $user = $request->user();
        if (!$tweetService->checkOwnTweet($user->id, $request->id())) {
            throw new AccessDeniedHttpException();
        }

        $tweet = Tweet::where('id', $request->id())->firstOrFail();
        $tweet->content = $request->tweet();
        $tweet->save();

        return redirect()
            ->route('tweet.update.index', ['tweetId' => $tweet->id])
            ->with('feedback.success', 'つぶやきを編集しました');
    }
}
