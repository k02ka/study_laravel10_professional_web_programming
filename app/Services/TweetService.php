<?php

namespace App\Services;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Collection;

class TweetService
{
    /**
     * @return Collection<int, Tweet>
     */
    public function getTweets(): Collection
    {
        return Tweet::orderBy('created_at', 'DESC')->get();
    }

    /**
     * 自分のTweetかどうかをチェックするメソッド
     */
    public function checkOwnTweet(int $userId, int $tweetId): bool
    {
        /** @var Tweet|null */
        $tweet = Tweet::where('id', $tweetId)->first();
        if (!$tweet) {
            return false;
        }

        return $tweet->user_id == $userId;
    }
}
