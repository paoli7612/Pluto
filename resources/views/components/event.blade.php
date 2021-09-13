@props(['event'])

<div class="card">
    <div class="card-header">
        <div class="float-left">
            {{ $event['type'] }}
        </div>
        <div class="float-right">
            {{ $event['date'] }}
        </div>
    </div>
</div>