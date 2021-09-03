<div class="shadow-sm bg-white">
    <table class="table">
        <tbody>
            @foreach ($operations as $operation)
                <tr>
                    <td>
                        <div class="badge badge-{{ $operation->color }}">
                            {{ $operation->count }}
                        </div>
                    </td>
                    <td>
                        {{ $operation->category->title }}
                    </td>
                    <td>
                        {{ $operation->note }}
                    </td>
                    <td>
                        {{ $operation->created_at }}
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div>
