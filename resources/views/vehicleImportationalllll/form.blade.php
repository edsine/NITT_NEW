<div class="container">
    <h1>{{ isset($vehicleImportation) ? 'Edit' : 'Add' }} Vehicle Importation</h1>

    <form action="{{ isset($vehicleImportation) ? route('vehicleImportation.update', $vehicleImportation->id) : route('vehicleImportation.store') }}" method="POST">
        @csrf
        @if(isset($vehicleImportation))
            @method('POST')
        @endif

        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" class="form-control" id="year" name="year" value="{{ $vehicleImportation->year ?? '' }}">
        </div>

        <div class="form-group">
            <label for="vehicle_category">Vehicle Category</label>
            <input type="text" class="form-control" id="vehicle_category" name="vehicle_category" value="{{ $vehicleImportation->vehicle_category ?? '' }}">
        </div>

        <div class="form-group">
            <label for="new_vehicle_count">New Vehicle Count</label>
            <input type="number" class="form-control" id="new_vehicle_count" name="new_vehicle_count" value="{{ $vehicleImportation->new_vehicle_count ?? '' }}">
        </div>

        <div class="form-group">
            <label for="used_vehicle_count">Used Vehicle Count</label>
            <input type="number" class="form-control" id="used_vehicle_count" name="used_vehicle_count" value="{{ $vehicleImportation->used_vehicle_count ?? '' }}">
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($vehicleImportation) ? 'Update' : 'Add' }}</button>
    </form>
</div>
