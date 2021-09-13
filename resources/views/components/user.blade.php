@props(['user'])

<tr>
    <td>
        {{ $user->complete_name }}
    </td>
    <td>
        <a href="{{ route('user.calendar', $user) }}">
            Calendar
        </a>
    </td>
</tr>
