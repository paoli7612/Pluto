@props(['event'])

<div class="card mb-3">
    <div class="card-header">
        <div class="float-left">
            {{ $event->type }}
        </div>
        <div class="float-right">
            
            {{ date('D m M', strtotime($event->date)) }}
        </div>
    </div>
    <div class="card-body">
        <div>
            Location: <b>Castel Pietra</b>
        </div>
        <div>
            Waiters: <b>Valerio, Tommaso, Lorenzo</b>
        </div>
        <div>
            Pax(intolerances): <b>45</b>(3 vegetariani)
        </div>
        <div>Child: <b>0</b></div>
    </div>
</div>