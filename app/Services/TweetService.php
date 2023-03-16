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
}
