@extends('adminlte::page')

@section('title', 'All mode')

@section('content_header')
    
@stop

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<h2>Select Table to View</h2>

<form method="GET" action="{{ route('showTable') }}">
    <select name="selected_table" onchange="this.form.submit()">
        <option value="">--Select Table--</option>
        <option value="gross_billion" {{ request('selected_table') == 'gross_billion' ? 'selected' : '' }}>Gross Billion</option>
        <option value="gross_percent" {{ request('selected_table') == 'gross_percent' ? 'selected' : '' }}>Gross Percent</option>
    </select>
</form>

@if(isset($tableData))
    <h3>{{ ucfirst(str_replace('_', ' ', request('selected_table'))) }} Data</h3>

    <form id="importForm" action="{{ route(request('selected_table') . '.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="fileInput">
        <button type="submit" class="btn btn-secondary mr-2">Import</button>
    </form>

    <button type="button" class="btn btn-secondary">
        <a href="{{ route(request('selected_table') . '.export') }}" style="color:white; text-decoration:none;">Export</a>
    </button>
    <table border="1" class="table mt-3">
        <thead>
            @if(request('selected_table') == 'gross_billion')
                <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Transport & Storage</th>
                    <th>Road Transport</th>
                    <th>Rail Transport Pipelines</th>
                    <th>Water Transport</th>
                    <th>Air Transport</th>
                    <th>Transport Services</th>
                    <th>Post & Courier Services</th>
                    <th>Actions</th>
                </tr>
            @elseif(request('selected_table') == 'gross_percent')
                <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Road Transport</th>
                    <th>Rail Transport Pipelines</th>
                    <th>Water Transport</th>
                    <th>Air Transport</th>
                    <th>Transport Services</th>
                    <th>Post & Courier Services</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            @endif
        </thead>
        <tbody>
            @foreach($tableData as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    @if(request('selected_table') == 'gross_billion')
                        <td>{{ $data->year }}</td>
                        <td>{{ $data->transportation_and_storage }}</td>
                        <td>{{ $data->road_transport }}</td>
                        <td>{{ $data->rail_transport_pipelines }}</td>
                        <td>{{ $data->water_transport }}</td>
                        <td>{{ $data->air_transport }}</td>
                        <td>{{ $data->transport_services }}</td>
                        <td>{{ $data->post_and_courier_services }}</td>
                    @elseif(request('selected_table') == 'gross_percent')
                        <td>{{ $data->year }}</td>
                        <td>{{ $data->road_transport }}</td>
                        <td>{{ $data->rail_transport_pipelines }}</td>
                        <td>{{ $data->water_transport }}</td>
                        <td>{{ $data->air_transport }}</td>
                        <td>{{ $data->transport_services }}</td>
                        <td>{{ $data->post_and_courier_services }}</td>
                        <td>{{ $data->total }}</td>
                    @endif
                    <td>
                        <button class="btn btn-warning btn-sm edit-record" data-id="{{ $data->id }}" data-toggle="modal" data-target="#editModal" data-record="{{ $data }}">Edit</button>
                        <button class="btn btn-danger btn-sm delete-record" data-id="{{ $data->id }}" data-toggle="modal" data-target="#deleteModal" data-record="{{ $data }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

<script>
    document.getElementById('importForm').addEventListener('submit', function(event) {
        const fileInput = document.getElementById('fileInput');
        if (!fileInput.value) {
            event.preventDefault(); // Prevent form submission
            alert('Please select a file before importing.');
        }
    });
</script>










































































<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></>











@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js') 
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop