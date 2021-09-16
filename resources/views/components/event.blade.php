<div class="card mb-3 bg-primary text-white">
    <div class="card-header">
        {{ $event->date }}
        <a class="float-right btn btn-light" href="{{ $event->location->route }}" title="{{ $event->location->name }}">
            <i class="fa fa-map-marker-alt"></i>  
        </a>
    </div>
    <div class="card-body">
    </div>
</div>
