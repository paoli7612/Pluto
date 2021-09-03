<div class="bg-white p-3">
    @foreach ($accounts as $account)
        {{ $account->count }}
    @endforeach
</div>