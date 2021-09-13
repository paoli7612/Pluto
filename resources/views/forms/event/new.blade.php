<button class="btn btn-primary mb-3" type="button" data-toggle="collapse" data-target="#new" aria-expanded="false" aria-controls="new">
    New event
</button>
<div class="collapse mb-3" id="new">
    <div class="card card-body">
        <form action="{{ route('events.new') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group col">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label>Arrival</label>
                    <input type="time" name="arrival" class="form-control" >
                </div>
                <div class="form-group col">
                    <label>Boss</label>
                    <select name="user_id" class="form-control" required>
                        <option selected disabled>- - -</option>
                        @foreach (App\Models\User::all() as $user)
                            <option value="{{ $user->id }}">{{ $user->complete_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" value="{{ __('New event') }}" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>

</div>