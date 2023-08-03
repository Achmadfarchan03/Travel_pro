<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Travel</th>
            <th>User</th>
            <th>Visa</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->travel_package->title }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->additional_visa }}</td>
                <td>${{ $item->transaction_total }}</td>
                <td>{{ $item->transaction_status }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">
                    Data Kosong
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
