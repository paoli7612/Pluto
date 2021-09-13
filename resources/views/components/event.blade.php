@props(['event'])

<div class="card mb-3">
    <div class="card-header">
        <div class="float-left">
            {{ $event->name }}
        </div>
        <div class="float-right text-muted">
            {{ date('D m M', strtotime($event->date)) }}
        </div>
    </div>
    <div class="card-body">
        <div>
            Location: <b>Castel Pietra</b>
        </div>
        <div>
            Valerio, Tommaso, Lorenzo
        </div>
        <div>Pax: <b>45</b></div>
    </div>
</div>