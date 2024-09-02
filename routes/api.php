<?php

<<<<<<< HEAD
=======
use App\Models\CargoDelta;
use App\Models\CargoNigeria;
use App\Models\CargoOnne;
use App\Models\CargoRivers;
use App\Models\CargoTincan;
>>>>>>> efb829592f2573ee30b0bf82f9e1eaebe6cd69e8
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthAPIController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
<<<<<<< HEAD
=======
use App\Http\Controllers\Api\GrossDomesticProductBillionController;
use App\Http\Controllers\Api\GrossDomesticProductPercentController;
use App\Http\Controllers\Api\RailPassengerTrafficController;
use App\Http\Controllers\Api\CargoApapaController;
use App\Http\Controllers\Api\CargoCalabarController;
use App\Http\Controllers\Api\CargoDeltaController;
use App\Http\Controllers\Api\CargoNigeriaController;
use App\Http\Controllers\Api\CargoOnneController;
use App\Http\Controllers\Api\CargoRiversController;
use App\Http\Controllers\Api\CargoTincanController;
use App\Http\Controllers\Api\NationalShipController;
>>>>>>> efb829592f2573ee30b0bf82f9e1eaebe6cd69e8

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('helpers', [App\Http\Controllers\API\HelpersAPIController::class, 'index']);
    Route::post('dashboard', [App\Http\Controllers\API\DashboardAPIController::class, 'index']);
    Route::resource('users', App\Http\Controllers\API\UserAPIController::class);
    Route::put('users/update_profile/{id}', [App\Http\Controllers\API\UserAPIController::class, 'updateProfile']);
    Route::post('users/update_profile_image/{id}', [App\Http\Controllers\API\UserAPIController::class, 'updateProfileImage']);
    Route::post('users/change_password/{id}', [App\Http\Controllers\API\UserAPIController::class, 'changePassword'])->name('change_password');
    Route::resource('roles', App\Http\Controllers\API\RoleAPIController::class);
    Route::resource('passenger_road_transport_data', App\Http\Controllers\API\PassengerRoadTransportDataAPIController::class);
    Route::resource('freight_road_transport_data', App\Http\Controllers\API\FreightRoadTransportDataAPIController::class);
    Route::resource('air_transport_data', App\Http\Controllers\API\AirTransportDataAPIController::class);
    Route::resource('air_passengers_traffic', App\Http\Controllers\API\AirPassengersTrafficAPIController::class);
    Route::resource('maritime_academies', App\Http\Controllers\API\MaritimeAcademyAPIController::class);
    Route::resource('railway_passengers', App\Http\Controllers\API\RailwayPassengerAPIController::class);
    Route::post('railway_passengers/upload', [App\Http\Controllers\API\RailwayPassengerAPIController::class, 'bulkUpload']);
    Route::resource('railway_rolling_stocks', App\Http\Controllers\API\RailwayRollingStockAPIController::class);
    Route::resource('railway_safeties', App\Http\Controllers\API\RailwaySafetyAPIController::class);
    Route::resource('trains_punctualities', App\Http\Controllers\API\TrainPunctualityAPIController::class);
    Route::resource('maritime_administrations', App\Http\Controllers\API\MaritimeAdministrationAPIController::class);
    Route::resource('vehicle_importations', App\Http\Controllers\API\VehicleImportationAPIController::class);
    Route::resource('maritime_transports', App\Http\Controllers\API\MaritimeTransportAPIController::class);
    Route::get('permissions', [App\Http\Controllers\API\PermissionAPIController::class, 'index']);
    Route::resource('gross_domestic_products', App\Http\Controllers\API\GrossDomesticProductAPIController::class);
    Route::post('gross_domestic_products/upload', [App\Http\Controllers\API\GrossDomesticProductAPIController::class, 'bulkUpload']);
    Route::resource('ship_container_traffics', App\Http\Controllers\API\ShipContainerTrafficAPIController::class);
    Route::post('ship_container_traffics/upload', [App\Http\Controllers\API\ShipContainerTrafficAPIController::class, 'bulkUpload']);
    Route::resource('road_traffic_crashes', App\Http\Controllers\API\RoadTrafficCrashAPIController::class);
    Route::resource('fleet_operator_road_crashes', App\Http\Controllers\API\FleetOperatorRoadTrafficCrashAPIController::class);
    Route::resource('cargo_import_exports', App\Http\Controllers\API\CargoImportExportAPIController::class);
    Route::resource('ship_traffic_g_r_ts', App\Http\Controllers\API\ShipTrafficGRTAPIController::class);
    Route::resource('port_vehicular_traffics', App\Http\Controllers\API\PortVehicularTrafficAPIController::class);
    Route::resource('route_road_crashes', App\Http\Controllers\API\RouteRoadCrashAPIController::class);
    Route::resource('vehicle_plate_productions', App\Http\Controllers\API\VehiclePlateProductionAPIController::class);
    Route::resource('road_crash_causative_factors', App\Http\Controllers\API\RoadCrashCausativeFactorAPIController::class);
    Route::resource('driver_license_productions', App\Http\Controllers\API\DriverLicenseProductionAPIController::class);
    Route::resource('driver_license_issuances', App\Http\Controllers\API\DriverLicenseIssuanceAPIController::class);
    Route::resource('driver_license_renewals', App\Http\Controllers\API\DriverLicenseRenewalAPIController::class);
    Route::resource('traffic_offences', App\Http\Controllers\API\TrafficOffenceAPIController::class);
    Route::resource('vehicle_license_registrations', App\Http\Controllers\API\VehicleLicenseRegistrationAPIController::class);
    Route::resource('license_renewals', App\Http\Controllers\API\LicenseRenewalAPIController::class);
    Route::resource('vehicle_registrations', App\Http\Controllers\API\VehicleRegistrationAPIController::class);
    Route::resource('driving_test_records', App\Http\Controllers\API\DrivingTestRecordAPIController::class);
    Route::resource('fleet_accidents', App\Http\Controllers\API\FleetAccidentAPIController::class);
    Route::resource('corporation_passenger_traffics', App\Http\Controllers\API\CorporationPassengerTrafficAPIController::class);
    Route::resource('fleet_size_compositions', App\Http\Controllers\API\FleetSizeCompositionAPIController::class);
    Route::resource('fleet_operator_brands', App\Http\Controllers\API\FleetOperatorBrandAPIController::class);
    Route::resource('air_mode_data', App\Http\Controllers\API\AirModeDataAPIController::class);
});


Route::prefix('auth')->group(function () {
    Route::post('login', [AuthAPIController::class, 'login'])->name('auth.login');
    Route::post('logout', [AuthAPIController::class, 'logout'])->name('auth.logout');
    Route::post('register', [AuthAPIController::class, 'register'])->name('auth.register');
    Route::post('recover', [AuthAPIController::class, 'recover'])->name('auth.recover');
    Route::post('reset', [AuthAPIController::class, 'reset'])->name('auth.reset');
});

Route::get('login', [AuthAPIController::class, 'getFrontendLogin'])->name('login');
Route::post('verify', [AuthAPIController::class, 'verify'])->name('verification.send');
Route::get('/reset/{token}', [AuthAPIController::class, 'resetPassword'])->name('auth.reset');
Route::get('/email/verify/{id}/{hash}', [AuthAPIController::class, 'verifyEmail'])
    ->name('verification.verify');


// Formatted endpoints for NTD

// All mode data endpoints
Route::get('gross_domestic_products_formatted', [App\Http\Controllers\API\GrossDomesticProductAPIController::class, 'indexFormatted']);
Route::get('gross_domestic_products_formatted_by_percentage', [App\Http\Controllers\API\GrossDomesticProductAPIController::class, 'indexFormattedByPercentage']);

// Rail mode data endpoints
Route::get('railway_passengers_formatted', [App\Http\Controllers\API\RailwayPassengerAPIController::class, 'indexFormatted']);
Route::get('railway_freight_formatted', [App\Http\Controllers\API\RailwayPassengerAPIController::class, 'indexFormattedFreight']);
<<<<<<< HEAD
=======



Route::apiResource('grossdomesticproduction_billion', GrossDomesticProductBillionController::class);
Route::apiResource('grossdomesticproduction_percent', GrossDomesticProductPercentController::class);
Route::apiResource('national_ship', NationalShipController::class);
Route::apiResource('cargo_apapa', CargoApapaController::class);
Route::apiResource('cargo_calabar', CargoCalabarController::class);
Route::apiResource('cargo_delta', CargoDeltaController::class);
Route::apiResource('cargo_nigeria', CargoNigeriaController::class);
Route::apiResource('cargo_onne', CargoOnneController::class);
Route::apiResource('cargo_rivers', CargoRiversController::class);
Route::apiResource('cargo_tincan', CargoTincanController::class);
Route::apiResource('rail_passenger', RailPassengerTrafficController::class);
>>>>>>> efb829592f2573ee30b0bf82f9e1eaebe6cd69e8
