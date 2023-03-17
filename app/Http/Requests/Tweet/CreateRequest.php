<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class CreateRequest extends FormRequest
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

    // Requestクラスのuser関数で今自分がログインしているユーザーが取得できる
    public function userId(): int
    {
        /** @var User */
        $user = $this->user();
        return $user->id;
    }

    public function tweet(): string
    {
        /** @var string */
        return $this->input('tweet');
    }
}
