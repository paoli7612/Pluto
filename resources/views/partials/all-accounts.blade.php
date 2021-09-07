<div class="bg-white p-3">
    @foreach ($accounts as $account)
        <div class="card text-left">
            <div class="card-header">
                <a href="">
                    {{ $account->name }}
                </a>
            </div>
            <div class="card-body">
                <p class="card-text">
                    {{ $account->count }}
                </p>
            </div>
        </div>
    @endforeach
</div>