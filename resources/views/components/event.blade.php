@props(['event'])

<div class="card mb-3">
    <div class="card-header">
        <div class="float-left">
            {{ $event['type'] }}
        </div>
        <div class="float-right">
            {{ $event['date'] }}
        </div>
    </div>
    <div class="card-body">
        <div>Location</div>
        <div>Waiters</div>
        <div>Pax(intolerances)</div>
        <div>Child</div>
    </div>
</div>