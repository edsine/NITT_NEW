@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Vehicle Importation Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $vehicleImportation->vehicle_category }} ({{ $vehicleImportation->year }})
        </div>
        <div class="card-body">
            <p><strong>Year:</strong> {{ $vehicleImportation->year }}</p>
            <p><strong>Vehicle Category:</strong> {{ $vehicleImportation->vehicle_category }}</p>
            <p><strong>New Vehicle Count:</strong> {{ $vehicleImportation->new_vehicle_count }}</p>
            <p><strong>Used Vehicle Count:</strong> {{ $vehicleImportation->used_vehicle_count }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('vehicleImportation.edit', $vehicleImportation->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('vehicleImportation.destroy', $vehicleImportation->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('vehicleImportation.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
