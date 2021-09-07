<form action="{{ route('operation.post') }}" method="post" class="bg-white p-3 shadow-sm">
    @csrf
    <div class="form-group">
        <label for="value">Title</label>
        <input id="value" name="value" class="form-control" placeholder="Value" autofocus>
    </div>
    <div class="form-group text-right">
        <input type="submit" value="Aggiungi" class="btn btn-primary">
    </div>
</form>