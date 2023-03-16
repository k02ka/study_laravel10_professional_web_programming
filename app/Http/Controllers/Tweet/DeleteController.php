<?php

namespace App\Http\Controllers\Tweet;

use App\Models\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        /** @var int */
        $tweetId = $request->route('tweetId');
        Tweet::destroy((int)$tweetId);
        return redirect()
            ->route('tweet.index')
            ->with('feedback.success', 'つぶやきを削除しました');
    }
}
