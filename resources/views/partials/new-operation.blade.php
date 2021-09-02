<form action="{{ route('operation.post') }}" method="post" class="bg-white p-3 shadow-sm">
    @csrf
    <div class="form-group">
        <label for="value">Value</label>
        <input type="text" id="value" name="value" class="form-control" placeholder="Value">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select id="category" name="category_id" class="form-control" placeholder="Value">
            @foreach (App\Models\Category::all() as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group text-right">
        <input type="submit" value="Aggiungi" class="btn btn-primary">
    </div>
</form>