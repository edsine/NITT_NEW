<?php

use App\Http\Controllers\Api\RoadTrafficCrashesYearController;
use App\Models\CargoDelta;
use App\Models\CargoNigeria;
use App\Models\CargoOnne;
use App\Models\CargoRivers;
use App\Models\CargoTincan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthAPIController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
use App\Http\Controllers\Api\NigeriaPortTrafficController;
use App\Http\Controllers\Api\ServiceboatApapaController;
use App\Http\Controllers\Api\ServiceboatCalaberController;
use App\Http\Controllers\Api\ServiceboatDeltaController;
use App\Http\Controllers\Api\ServiceboatOnneController;
use App\Http\Controllers\Api\ServiceboatRiversController;
use App\Http\Controllers\Api\ServiceboatTincanController;
use App\Http\Controllers\Api\VesselsApapaController;
use App\Http\Controllers\Api\VesselsCalabarController;
use App\Http\Controllers\Api\VesselsDeltaController;
use App\Http\Controllers\Api\VesselsRiversController;
use App\Http\Controllers\Api\VesselsOnneController;
use App\Http\Controllers\Api\VesselsTincanController;
use App\Http\Controllers\Api\AkanuIbiamAirportController;
use App\Http\Controllers\Api\AkureAirportController;
use App\Http\Controllers\Api\BeninAirportController;
use App\Http\Controllers\Api\IbadanAirportController;
use App\Http\Controllers\Api\IlorinAirportController;
use App\Http\Controllers\Api\KadunaAirportController;
use App\Http\Controllers\Api\KatsinaAirportController;
use App\Http\Controllers\Api\MaiduguriAirportController;
use App\Http\Controllers\Api\MakurdiAirportController;
use App\Http\Controllers\Api\MallamAminuAirportController;
use App\Http\Controllers\Api\MargeretEkpoAirportController;
use App\Http\Controllers\Api\MinnaAirportController;
use App\Http\Controllers\Api\MurtalaMuhammedAirportController;
use App\Http\Controllers\Api\NnamdiAzikweAirportController;
use App\Http\Controllers\Api\OsubiAirportController;
use App\Http\Controllers\Api\PortharcourtAirportController;
use App\Http\Controllers\Api\SamMbakweAirportController;
use App\Http\Controllers\Api\SultanSaddikAirportController;
use App\Http\Controllers\Api\YakubuGowonAirportController;
use App\Http\Controllers\Api\YolaAirportController;
use App\Http\Controllers\Api\TrafficByStates2006Controller;
use App\Http\Controllers\Api\TrafficByStates2008Controller;
use App\Http\Controllers\Api\TrafficByStates2009Controller;
use App\Http\Controllers\Api\TrafficByStates2010Controller;
use App\Http\Controllers\Api\TrafficByStates2011Controller;
use App\Http\Controllers\Api\TrafficByStates2012Controller;
use App\Http\Controllers\Api\TrafficByStates2013Controller;
use App\Http\Controllers\Api\TrafficByStates2014Controller;
use App\Http\Controllers\Api\TrafficByStates2015Controller;
use App\Http\Controllers\Api\TrafficByStates2016Controller;
use App\Http\Controllers\Api\TrafficByStates2017Controller;
use App\Http\Controllers\Api\TrafficByStates2018Controller;
use App\Http\Controllers\Api\TrafficByStates2019Controller;
use App\Http\Controllers\Api\TrafficByStates2020Controller;
use App\Http\Controllers\Api\TrafficByStates2021Controller;
use App\Http\Controllers\Api\TrafficByStates2022Controller;
use App\Http\Controllers\Api\FleetRoadCrashes1q2015Controller;
use App\Http\Controllers\Api\FleetRoadCrashes1q2016Controller;
use App\Http\Controllers\Api\FleetRoadCrashes1q2018Controller;
use App\Http\Controllers\Api\FleetRoadCrashes1q2021Controller;
use App\Http\Controllers\Api\FleetRoadCrashes1q2022Controller;
use App\Http\Controllers\Api\FleetRoadCrashes2q2015Controller;
use App\Http\Controllers\Api\FleetRoadCrashes2q2016Controller;
use App\Http\Controllers\Api\FleetRoadCrashes2q2018Controller;
use App\Http\Controllers\Api\FleetRoadCrashes2q2021Controller;
use App\Http\Controllers\Api\FleetRoadCrashes2q2022Controller;
use App\Http\Controllers\Api\FleetRoadCrashes3q2015Controller;
use App\Http\Controllers\Api\FleetRoadCrashes3q2016Controller;
use App\Http\Controllers\Api\FleetRoadCrashes3q2018Controller;
use App\Http\Controllers\Api\FleetRoadCrashes3q2021Controller;
use App\Http\Controllers\Api\FleetRoadCrashes3q2022Controller;
use App\Http\Controllers\Api\FleetRoadCrashes4q2015Controller;
use App\Http\Controllers\Api\FleetRoadCrashes4q2016Controller;
use App\Http\Controllers\Api\FleetRoadCrashes4q2018Controller;
use App\Http\Controllers\Api\FleetRoadCrashes4q2021Controller;
use App\Http\Controllers\Api\FleetRoadCrashes4q2022Controller;

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
Route::apiResource('nigeria_port', NigeriaPortTrafficController::class);
Route::apiResource('serviceboat_apapa', ServiceboatApapaController::class);
Route::apiResource('serviceboat_calabar', ServiceboatCalaberController::class);
Route::apiResource('serviceboat_delta', ServiceboatDeltaController::class);
Route::apiResource('serviceboat_onne', ServiceboatOnneController::class);
Route::apiResource('serviceboat_rivers', ServiceboatRiversController::class);
Route::apiResource('serviceboat_tincan', ServiceboatTincanController::class);
Route::apiResource('vessels_apapa', VesselsApapaController::class);
Route::apiResource('vessels_calabar', VesselsCalabarController::class);
Route::apiResource('vessels_delta', VesselsDeltaController::class);
Route::apiResource('vessels_onne', VesselsOnneController::class);
Route::apiResource('vessels_rivers', VesselsRiversController::class);
Route::apiResource('vessels_tincan', VesselsTincanController::class);
Route::apiResource('akanu_airport', AkanuIbiamAirportController::class);
Route::apiResource('akure_airport', AkureAirportController::class);
Route::apiResource('benin_airport', BeninAirportController::class);
Route::apiResource('ibadan_airport', IbadanAirportController::class);
Route::apiResource('ilorin_airport', IlorinAirportController::class);
Route::apiResource('kaduna_airport', KadunaAirportController::class);
Route::apiResource('katsina_airport', KatsinaAirportController::class);
Route::apiResource('maiduguri_airport', MaiduguriAirportController::class);
Route::apiResource('makurdi_airport', MakurdiAirportController::class);
Route::apiResource('mallam_airport', MallamAminuAirportController::class);
Route::apiResource('margeret_airport', MargeretEkpoAirportController::class);
Route::apiResource('minna_airport', MinnaAirportController::class);
Route::apiResource('murtala_airport', MurtalaMuhammedAirportController::class);
Route::apiResource('nnamdi_airport', NnamdiAzikweAirportController::class);
Route::apiResource('osubi_airport', OsubiAirportController::class);
Route::apiResource('portharcourt_airport', PortharcourtAirportController::class);
Route::apiResource('sam_airport', SamMbakweAirportController::class);
Route::apiResource('sultan_airport', SultanSaddikAirportController::class);
Route::apiResource('yakubu_airport', YakubuGowonAirportController::class);
Route::apiResource('yola_airport', YolaAirportController::class);
Route::apiResource('road_traffic_crashes_year', RoadTrafficCrashesYearController::class);
Route::apiResource('road_traffic_crashes_2006', TrafficByStates2006Controller::class);
Route::apiResource('road_traffic_crashes_2008', TrafficByStates2008Controller::class);
Route::apiResource('road_traffic_crashes_2009', TrafficByStates2009Controller::class);
Route::apiResource('road_traffic_crashes_2010', TrafficByStates2010Controller::class);
Route::apiResource('road_traffic_crashes_2011', TrafficByStates2011Controller::class);
Route::apiResource('road_traffic_crashes_2012', TrafficByStates2012Controller::class);
Route::apiResource('road_traffic_crashes_2013', TrafficByStates2013Controller::class);
Route::apiResource('road_traffic_crashes_2014', TrafficByStates2014Controller::class);
Route::apiResource('road_traffic_crashes_2015', TrafficByStates2015Controller::class);
Route::apiResource('road_traffic_crashes_2016', TrafficByStates2016Controller::class);
Route::apiResource('road_traffic_crashes_2017', TrafficByStates2017Controller::class);
Route::apiResource('road_traffic_crashes_2018', TrafficByStates2018Controller::class);
Route::apiResource('road_traffic_crashes_2019', TrafficByStates2019Controller::class);
Route::apiResource('road_traffic_crashes_2020', TrafficByStates2020Controller::class);
Route::apiResource('road_traffic_crashes_2021', TrafficByStates2021Controller::class);
Route::apiResource('road_traffic_crashes_2022', TrafficByStates2022Controller::class);

Route::apiResource('fleet_crashes_q12015', FleetRoadCrashes1q2015Controller::class);
Route::apiResource('fleet_crashes_q12016', FleetRoadCrashes1q2016Controller::class);
Route::apiResource('fleet_crashes_q12018', FleetRoadCrashes1q2018Controller::class);
Route::apiResource('fleet_crashes_q12021', FleetRoadCrashes1q2021Controller::class);
Route::apiResource('fleet_crashes_q12022', FleetRoadCrashes1q2022Controller::class);
Route::apiResource('fleet_crashes_q22015', FleetRoadCrashes2q2015Controller::class);
Route::apiResource('fleet_crashes_q22016', FleetRoadCrashes2q2016Controller::class);
Route::apiResource('fleet_crashes_q22018', FleetRoadCrashes2q2018Controller::class);
Route::apiResource('fleet_crashes_q22021', FleetRoadCrashes2q2021Controller::class);
Route::apiResource('fleet_crashes_q22022', FleetRoadCrashes2q2022Controller::class);
Route::apiResource('fleet_crashes_q32015', FleetRoadCrashes3q2015Controller::class);
Route::apiResource('fleet_crashes_q32016', FleetRoadCrashes3q2016Controller::class);
Route::apiResource('fleet_crashes_q32018', FleetRoadCrashes3q2018Controller::class);
Route::apiResource('fleet_crashes_q32021', FleetRoadCrashes3q2021Controller::class);
Route::apiResource('fleet_crashes_q32022', FleetRoadCrashes3q2022Controller::class);
Route::apiResource('fleet_crashes_q42015', FleetRoadCrashes4q2015Controller::class);
Route::apiResource('fleet_crashes_q42016', FleetRoadCrashes4q2016Controller::class);
Route::apiResource('fleet_crashes_q42018', FleetRoadCrashes4q2018Controller::class);
Route::apiResource('fleet_crashes_q42021', FleetRoadCrashes4q2021Controller::class);
Route::apiResource('fleet_crashes_q42022', FleetRoadCrashes4q2022Controller::class);
