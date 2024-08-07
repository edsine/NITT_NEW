@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Vehicle Importation</h1>
    <form action="{{ route('vehicleImportation.update', $vehicleImportation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $vehicleImportation->year }}" required>
        </div>
        <div class="form-group">
            <label for="vehicle_category">Vehicle Category</label>
            <input type="text" class="form-control" id="vehicle_category" name="vehicle_category" value="{{ $vehicleImportation->vehicle_category }}" required>
        </div>
        <div class="form-group">
            <label for="new_vehicle_count">New Vehicle Count</label>
            <input type="number" class="form-control" id="new_vehicle_count" name="new_vehicle_count" value="{{ $vehicleImportation->new_vehicle_count }}" required>
        </div>
        <div class="form-group">
            <label for="used_vehicle_count">Used Vehicle Count</label>
            <input type="number" class="form-control" id="used_vehicle_count" name="used_vehicle_count" value="{{ $vehicleImportation->used_vehicle_count }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Vehicle Importation</button>
    </form>
</div>
@endsection
