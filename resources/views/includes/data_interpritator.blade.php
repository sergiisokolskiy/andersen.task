<table>
    <tr>
        <th>Name:</th>
        <th>Email:</th>
        <th>Message:</th>
        <th>Create date:</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->name}}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->message }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
    @endforeach
</table>
