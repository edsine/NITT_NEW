<!DOCTYPE html>
<html>
<head>
    <title>Transport GDP Data</title>
</head>
<body>

<h2>Transport GDP Data</h2>

<a href="{{ route('grossdomesticproduction_billion.create') }}">Add New Data</a>

@if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>Year</th>
            <th>Transportation and Storage</th>
            <th>Road Transport</th>
            <th>Rail Transport & Pipelines</th>
            <th>Water Transport</th>
            <th>Air Transport</th>
            <th>Transport Services</th>
            <th>Post and Courier Services</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->year }}</td>
            <td>{{ $item->transportation_and_storage }}</td>
            <td>{{ $item->road_transport }}</td>
            <td>{{ $item->rail_transport_and_pipelines }}</td>
            <td>{{ $item->water_transport }}</td>
            <td>{{ $item->air_transport }}</td>
            <td>{{ $item->transport_services }}</td>
            <td>{{ $item->post_and_courier_services }}</td>
            <td>
                <a href="{{ route('grossdomesticproduction_billion.show', $item->id) }}">Show</a>
                <a href="{{ route('grossdomesticproduction_billion.edit', $item->id) }}">Edit</a>
                <form action="{{ route('grossdomesticproduction_billion.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
