<form action="{{ route('operation.post') }}" method="post" class="bg-white p-3 shadow-sm">
    @csrf
    <div class="form-group">
        <label for="value">Value</label>
        <input step="0.01" type="number" id="value" name="value" class="form-control" placeholder="Value" autofocus>
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select id="category" name="category_id" class="form-control" placeholder="Value">
            @foreach (App\Models\Category::all() as $category)
                <option
                    value="{{ $category->id }}"
                    {{ request()->session()->get('category_id') == $category->id ? 'selected': ''}}>
                    {{ $category->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="note">Note</label>
        <textarea class="form-control" name="note" id="note" rows="2"></textarea>
    </div>
    <div class="form-group text-right">
        <input type="submit" value="Aggiungi" class="btn btn-primary">
    </div>
</form>