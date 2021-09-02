<table class="table shadow-sm bg-white">
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
            </tr>

        @endforeach
    </tbody>
</table>
