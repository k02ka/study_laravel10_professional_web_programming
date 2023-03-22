<x-mail::message>

# 新しいユーザーが追加されました!

{{ $toUser->name }}さんこんにちは!

<x-mail::panel>
新しく{{ $newUser->name }}さんが参加しましたよ!
</x-mail::panel>

<x-mail::button :url="route('tweet.index')">
つぶやきを見に行く
</x-mail::button>

</x-mail::message>
