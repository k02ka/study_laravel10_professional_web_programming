<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'tweet' => 'required|max:140',
        ];
    }

    public function id(): int
    {
        /** @var int */
        $tweetId = $this->route('tweetId');
        return (int) $tweetId;
    }

    public function tweet(): string
    {
        /** @var string */
        return $this->input('tweet');
    }
}
