<?php

use App\Http\Controllers\GrossDomesticProductBillionController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\VehicleImportationController;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\PassengerRoadTransportDataController;
use App\Http\Controllers\FreightRoadTransportDataController;
use App\Http\Controllers\AirTransportDataController;
use App\Http\Controllers\AirTrafficDataController;
use App\Http\Controllers\AirPassengersTrafficController;
use App\Http\Controllers\MaritimeAcademyController;
use App\Http\Controllers\MaritimeAdministrationController;
use App\Http\Controllers\MaritimeTransportController;
use App\Http\Controllers\TrainPunctualityController;
use App\Http\Controllers\GrossDomesticProductionController;
use App\Http\Controllers\ShipContainerTrafficController;
use App\Http\Controllers\RailwayRollingStockController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GrossDomesticProductPercentController;
use App\Http\Controllers\AllDataModeController;
use App\Http\Controllers\RailPassengerTrafficController;
use App\Http\Controllers\NationalShipController;
use App\Http\Controllers\CargoApapaController;
use App\Http\Controllers\CargoCalabarController;
use App\Http\Controllers\CargoDeltaController;
use App\Http\Controllers\CargoNigeriaController;
use App\Http\Controllers\CargoOnneController;
use App\Http\Controllers\CargoRiversController;
use App\Http\Controllers\CargoTincanController;
use App\Http\Controllers\VehiclePlateNumberController;
use App\Http\Controllers\MotorCyclePlateNumberController;
use App\Http\Controllers\ReprintVehicleAndMotorcycleController;
use App\Http\Controllers\NationalDriversLicenseStatesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});



Route::get('/auth/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

  





Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vehicleImportation', [App\Http\Controllers\VehicleImportationController::class, 'vehicleImportation' ])->name('vehicleImportation');
Route::get('/railwayPassenger', [App\Http\Controllers\RailwayPassengerController::class, 'railwayPassenger' ])->name('railwayPassenger');
Route::get('/freightRoad', [App\Http\Controllers\FreightRoadTransportDataController::class, 'freightRoad'])->name('freightRoad');
Route::get('/passengerRoad', [App\Http\Controllers\PassengerRoadTransportDataController::class, 'passengerRoad' ])->name('passengerRoad');
Route::get('/airTransport', [App\Http\Controllers\AirTransportDataController::class, 'airTransport' ])->name('airTransport');
Route::get('/airTraffic', [App\Http\Controllers\AirTrafficDataController::class, 'airTraffic' ])->name('airTraffic');
Route::get('/rollingStock', [App\Http\Controllers\RailwayRollingStockController::class, 'rollingStock' ])->name('rollingStock');
Route::get('/marineAcad', [App\Http\Controllers\MaritimeAcademyController::class, 'marineAcad' ])->name('marineAcad');
Route::get('/marineAdmin', [App\Http\Controllers\MaritimeAdministrationController::class, 'marineAdmin' ])->name('marineAdmin');
Route::get('/marineTransport', [App\Http\Controllers\MaritimeTransportController::class, 'marineTransport' ])->name('marineTransport');
Route::get('/trainPunctuality', [App\Http\Controllers\TrainPunctualityController::class, 'trainPunctuality' ])->name('trainPunctuality');
Route::get('/grossDomestic', [App\Http\Controllers\GrossDomesticProductionController::class, 'grossDomestic' ])->name('grossDomestic');
Route::get('/shipContainer', [App\Http\Controllers\ShipContainerTrafficController::class, 'shipContainer' ])->name('shipContainer');


Route::get('allMode', [App\Http\Controllers\AllDataModeController::class, 'allMode' ])->name('allMode');

Route::get('allMode', [App\Http\Controllers\AllDataModeController::class, 'showTable'])->name('showTable');




//CRUD ROUTE

Route::get('form', function(){
    return view('form');

});

//Route::post('store_data', [App\Http\Controllers\VehicleImportationController::class, 'store_data']);
//Route::get('records', [App\Http\Controllers\VehicleImportationController::class, 'records']);

//Route::get('vehicleImportation/list', [VehicleImportationController::class, 'getVehicle'])->name('vehicleImportation.list');


//DATATABLE

Route::get('ajax-crud-datatable',[VehicleImportationController::class, 'vehicleImportation'] )->name('ajax-crud-datatable');
Route::post('store', [VehicleImportationController::class,'store' ]);
Route::post('edit', [VehicleImportationController::class,'edit' ]);
Route::post('delete', [VehicleImportationController::class,'delete' ]);


//VEHICLE iMPORTATION

Route::get('records', [VehicleImportationController::class, 'records'])->name('records');
Route::post('vehicleImportation', [VehicleImportationController::class, 'store'])->name('vehicleImportation.store');
Route::put('vehicleImportation/{id}', [VehicleImportationController::class, 'update'])->name('vehicleImportation.update');
Route::delete('vehicleImportation/{id}', [VehicleImportationController::class, 'destroy'])->name('vehicleImportation.destroy');
Route::get('/vehicleImportation/{id}/data', [VehicleImportationController::class, 'getData'])->name('vehicleImportation.data');


//ROAD PASSENGER
Route::get('passengers', [PassengerRoadTransportDataController::class, 'passengers'])->name('passengers');
Route::post('passengerRoadTransport', [PassengerRoadTransportDataController::class, 'store'])->name('passengerRoadTransport.store');
Route::put('passengerRoadTransport/{id}', [PassengerRoadTransportDataController::class, 'update'])->name('passengerRoadTransport.update');
Route::delete('passengerRoadTransport/{id}', [PassengerRoadTransportDataController::class, 'destroy'])->name('passengerRoadTransport.destroy');

//ROAD FREIGHT

Route::get('freights', [FreightRoadTransportDataController::class, 'freights'])->name('freights');
Route::post('freightRoadTransport', [FreightRoadTransportDataController::class, 'store'])->name('freightRoadTransport.store');
Route::put('freightRoadTransport/{id}', [FreightRoadTransportDataController::class, 'update'])->name('freightRoadTransport.update');
Route::delete('freightRoadTransport/{id}', [FreightRoadTransportDataController::class, 'destroy'])->name('freightRoadTransport.destroy');


//AIR TRANSPORT

Route::get('transports', [AirTransportDataController::class, 'transports'])->name('transports');
Route::post('airTransport', [AirTransportDataController::class, 'store'])->name('airTransport.store');
Route::put('airTransport/{id}', [AirTransportDataController::class, 'update'])->name('airTransport.update');
Route::delete('airTransport/{id}', [AirTransportDataController::class, 'destroy'])->name('airTransport.destroy');


//AIR TRAFFIC

Route::get('traffics', [AirTrafficDataController::class, 'traffics'])->name('traffics');
Route::post('airTrafficData', [AirTrafficDataController::class, 'store'])->name('airTrafficData.store');
Route::put('airTrafficData/{id}', [AirTrafficDataController::class, 'update'])->name('airTrafficData.update');
Route::delete('airTrafficData/{id}', [AirTrafficDataController::class, 'destroy'])->name('airTrafficData.destroy');


//ROLLING STOCK

Route::get('stocks', [RailwayRollingStockController::class, 'stocks'])->name('stocks');
Route::post('RailwayRollingStock', [RailwayRollingStockController::class, 'store'])->name('RailwayRollingStock.store');
Route::put('RailwayRollingStock/{id}', [RailwayRollingStockController::class, 'update'])->name('RailwayRollingStock.update');
Route::delete('RailwayRollingStock/{id}', [RailwayRollingStockController::class, 'destroy'])->name('RailwayRollingStock.destroy');






//MARITIME ACADEMY

Route::get('macademys', [MaritimeAcademyController::class, 'macademys'])->name('macademys');
Route::post('maritimeAcademy', [MaritimeAcademyController::class, 'store'])->name('maritimeAcademy.store');
Route::put('maritimeAcademy/{id}', [MaritimeAcademyController::class, 'update'])->name('maritimeAcademy.update');
Route::delete('maritimeAcademy/{id}', [MaritimeAcademyController::class, 'destroy'])->name('maritimeAcademy.destroy');


//MARITIME ADMIN

Route::get('madmins', [MaritimeAdministrationController::class, 'madmins'])->name('madmins');
Route::post('maritimeAdministration', [MaritimeAdministrationController::class, 'store'])->name('maritimeAdministration.store');
Route::put('maritimeAdministration/{id}', [MaritimeAdministrationController::class, 'update'])->name('maritimeAdministration.update');
Route::delete('maritimeAdministration/{id}', [MaritimeAdministrationController::class, 'destroy'])->name('maritimeAdministration.destroy');


//MARITIME TRANSPORT

Route::get('mtransports', [MaritimeTransportController::class, 'mtransports'])->name('mtransports');
Route::post('maritimeTransport', [MaritimeTransportController::class, 'store'])->name('maritimeTransport.store');
Route::put('maritimeTransport/{id}', [MaritimeTransportController::class, 'update'])->name('maritimeTransport.update');
Route::delete('maritimeTransport/{id}', [MaritimeTransportController::class, 'destroy'])->name('maritimeTransport.destroy');


//TRAIN PUNCTUALITY

Route::get('trains', [TrainPunctualityController::class, 'trains'])->name('trains');
Route::post('trainPunctuality', [TrainPunctualityController::class, 'store'])->name('trainPunctuality.store');
Route::put('trainPunctuality/{id}', [TrainPunctualityController::class, 'update'])->name('trainPunctuality.update');
Route::delete('trainPunctuality/{id}', [TrainPunctualityController::class, 'destroy'])->name('trainPunctuality.destroy');


//GROSS DOMESTIC

Route::get('grosses', [GrossDomesticProductionController::class, 'grosses'])->name('grosses');
Route::post('grossDomesticProduction', [GrossDomesticProductionController::class, 'store'])->name('grossDomesticProduction.store');
Route::put('grossDomesticProduction/{id}', [GrossDomesticProductionController::class, 'update'])->name('grossDomesticProduction.update');
Route::delete('grossDomesticProduction/{id}', [GrossDomesticProductionController::class, 'destroy'])->name('grossDomesticProduction.destroy');


//SHIP CONTAINER TRAFFIC

Route::get('ships', [ShipContainerTrafficController::class, 'ships'])->name('ships');
Route::post('shipContainerTraffic', [ShipContainerTrafficController::class, 'store'])->name('shipContainerTraffic.store');
Route::put('shipContainerTraffic/{id}', [ShipContainerTrafficController::class, 'update'])->name('shipContainerTraffic.update');
Route::delete('shipContainerTraffic/{id}', [ShipContainerTrafficController::class, 'destroy'])->name('shipContainerTraffic.destroy');






//CRUD

//Route::get('/vehicleImportation', [VehicleImportationController::class, 'index'])->name('vehicleImportation.index');
//Route::get('/vehicleImportation/create', [VehicleImportationController::class, 'create'])->name('vehicleImportation.create');
//Route::post('/vehicleImportation/store', [VehicleImportationController::class, 'store_data'])->name('vehicleImportation.store');
//Route::get('/vehicleImportation/edit/{id}', [VehicleImportationController::class, 'edit'])->name('vehicleImportation.edit');
//Route::post('/vehicleImportation/update/{id}', [VehicleImportationController::class, 'update'])->name('vehicleImportation.update');
//Route::delete('/vehicleImportation/destroy/{id}', [VehicleImportationController::class, 'destroy'])->name('vehicleImportation.destroy');


Route::get('/graph', [VehicleImportationController::class, 'loadGraphPage'])->name('graphPage');



Route::get('VehicleImportation/export', [VehicleImportationController::class, 'export'])->name('VehicleImportation.export');
Route::post('VehicleImportation/import', [VehicleImportationController::class, 'import'])->name('VehicleImportation.import');




Route::post('/gross_billion/import', [GrossDomesticProductBillionController::class, 'import'])->name('gross_billion.import');
Route::get('/gross_billion/export', [GrossDomesticProductBillionController::class, 'export'])->name('gross_billion.export');

Route::post('/gross_percent/import', [GrossDomesticProductPercentController::class, 'import'])->name('gross_percent.import');
Route::get('/gross_percent/export', [GrossDomesticProductPercentController::class, 'export'])->name('gross_percent.export');


Route::group(['prefix' => 'users', 'as' => 'users.'], function (){
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RolesController::class);

});
Route::resource('users', UsersController::class); 




Route::resource('grossdomesticproduction_billion', GrossDomesticProductBillionController::class);






//ROAD PASSENGER
Route::get('grossBillions', [GrossDomesticProductBillionController::class, 'grossBillions'])->name('grossBillions');
Route::post('passengerRoadTransport', [PassengerRoadTransportDataController::class, 'store'])->name('passengerRoadTransport.store');
Route::put('passengerRoadTransport/{id}', [PassengerRoadTransportDataController::class, 'update'])->name('passengerRoadTransport.update');
Route::delete('passengerRoadTransport/{id}', [PassengerRoadTransportDataController::class, 'destroy'])->name('passengerRoadTransport.destroy');



//ROAD PASSENGER
Route::get('grossPercents', [GrossDomesticProductPercentController::class, 'grossPercents'])->name('grossPercents');
Route::post('passengerRoadTransport', [PassengerRoadTransportDataController::class, 'store'])->name('passengerRoadTransport.store');
Route::put('passengerRoadTransport/{id}', [PassengerRoadTransportDataController::class, 'update'])->name('passengerRoadTransport.update');
Route::delete('passengerRoadTransport/{id}', [PassengerRoadTransportDataController::class, 'destroy'])->name('passengerRoadTransport.destroy');




Route::get('GrossDomesticProductBillion/export', [GrossDomesticProductBillionController::class, 'export'])->name('GrossDomesticProductBillion.export');
Route::post('GrossDomesticProductBillion/import', [GrossDomesticProductBillionController::class, 'import'])->name('GrossDomesticProductBillion.import');



Route::get('GrossDomesticProductPercent/export', [GrossDomesticProductPercentController::class, 'export'])->name('GrossDomesticProductPercent.export');
Route::post('GrossDomesticProductPercent/import', [GrossDomesticProductPercentController::class, 'import'])->name('GrossDomesticProductPercent.import');


//ROAD PASSENGER
Route::get('railPassengerTraffics', [RailPassengerTrafficController::class, 'RailPassengerTraffics'])->name('railPassengerTraffics');
Route::post('passengerRoadTransport', [PassengerRoadTransportDataController::class, 'store'])->name('passengerRoadTransport.store');
Route::put('passengerRoadTransport/{id}', [PassengerRoadTransportDataController::class, 'update'])->name('passengerRoadTransport.update');
Route::delete('passengerRoadTransport/{id}', [PassengerRoadTransportDataController::class, 'destroy'])->name('passengerRoadTransport.destroy');



Route::get('RailPassengerTraffic/export', [RailPassengerTrafficController::class, 'export'])->name('RailPassengerTraffic.export');
Route::post('RailPassengerTraffic/import', [RailPassengerTrafficController::class, 'import'])->name('RailPassengerTraffic.import');


Route::get('nationalShips', [NationalShipController::class, 'NationalShips'])->name('NationalShips');

Route::get('NationalShip/export', [NationalShipController::class, 'export'])->name('NationalShip.export');
Route::post('NationalShip/import', [NationalShipController::class, 'import'])->name('NationalShip.import');



Route::get('cargoApapa', [CargoApapaController:: class, 'CargoApapas'])->name('CargoApapa');

Route::get('CargoApapa/export', [CargoApapaController::class, 'export'])->name('CargoApapa.export');
Route::post('CargoApapa/import', [CargoApapaController::class, 'import'])->name('CargoApapa.import');


Route::get('cargoCalabar', [CargoCalabarController::class, 'CargoCalabar'])->name('CargoCalabar');

Route::get('CargoCalabar/export', [CargoCalabarController::class, 'export'])->name('CargoCalabar.export');
Route::post('CargoCalabar/import', [CargoCalabarController::class, 'import'])->name('CargoCalabar.import');


Route::get('cargoDelta', [CargoDeltaController::class, 'CargoDelta'])->name('CargoDelta');

Route::get('CargoDelta/export', [CargoDeltaController::class, 'export'])->name('CargoDelta.export');
Route::post('CargoDelta/import', [CargoDeltaController::class, 'import'])->name('CargoDelta.import');


Route::get('cargoNigeria', [CargoNigeriaController::class, 'CargoNigeria'])->name('CargoNigeria');

Route::get('CargoNigeria/export', [CargoNigeriaController::class, 'export'])->name('CargoNigeria.export');
Route::post('CargoNigeria/import', [CargoNigeriaController::class, 'import'])->name('CargoNigeria.import');


Route::get('cargoOnne', [CargoOnneController::class, 'CargoOnne'])->name('CargoOnne');

Route::get('CargoOnne/export', [CargoOnneController::class, 'export'])->name('CargoOnne.export');
Route::post('CargoOnne/import', [CargoOnneController::class, 'import'])->name('CargoOnne.import');


Route::get('cargoRivers', [CargoRiversController::class, 'CargoRivers'])->name('CargoRivers');

Route::get('CargoRivers/export', [CargoRiversController::class, 'export'])->name('CargoRivers.export');
Route::post('CargoRivers/import', [CargoRiversController::class, 'import'])->name('CargoRivers.import');


Route::get('cargoTincans', [CargoTincanController::class, 'CargoTincans'])->name('CargoTincans');

Route::get('CargoTincan/export', [CargoTincanController::class, 'export'])->name('CargoTincans.export');
Route::post('CargoTincan/import', [CargoTincanController::class, 'import'])->name('CargoTincans.import');


Route::get('/allModeDashboard', [GrossDomesticProductBillionController::class, 'dashboard'])->name('allModeDashboard');


Route::get('/maritimeModeDashboard', [NationalShipController::class, 'dashboard'])->name('maritimeModeDashboard');


Route::get('/railModeDashboard', [AllDataModeController::class, 'railDashboard'])->name('railModeDashboard');

Route::get('/airModeDashboard', [AllDataModeController::class, 'airDashboard'])->name('airModeDashboard');

Route::get('/fleetOperatorDashboard', [AllDataModeController::class, 'fleetDashboard'])->name('fleetDashboard');

Route::get('/vehicleProductionDashboard', [AllDataModeController::class, 'vehicleDashboard'])->name('vehicleDashboard');

Route::get('/nationalDriversLicenseDashboard', [AllDataModeController::class, 'nationalDashboard'])->name('nationalDashboard');

Route::get('/causativeFactorDashboard', [AllDataModeController::class, 'CausativeDashboard'])->name('causativeDashboard');


Route::get('/roadModeDashboard', [AllDataModeController::class, 'roadDashboard'])->name('roadDashboard');




Route::get('vehiclePlate', [VehiclePlateNumberController::class, 'vehiclePlate'])->name('vehiclePlate');

Route::get('vehiclePlate/export', [VehiclePlateNumberController::class, 'export'])->name('vehiclePlate.export');
Route::post('vehiclePlate/import', [VehiclePlateNumberController::class, 'import'])->name('vehiclePlate.import');



Route::get('motorCyclePlate', [MotorCyclePlateNumberController::class, 'motorCyclePlate'])->name('motorCyclePlate');

Route::get('motorCyclePlate/export', [MotorCyclePlateNumberController::class, 'export'])->name('motorCyclePlate.export');
Route::post('motorCyclePlate/import', [MotorCyclePlateNumberController::class, 'import'])->name('motorCyclePlate.import');




Route::get('reprint', [ReprintVehicleAndMotorcycleController::class, 'reprint'])->name('reprint');

Route::get('reprint/export', [ReprintVehicleAndMotorcycleController::class, 'export'])->name('reprint.export');
Route::post('reprint/import', [ReprintVehicleAndMotorcycleController::class, 'import'])->name('reprint.import');




Route::get('nationalDrivers', [NationalDriversLicenseStatesController::class, 'nationalDrivers'])->name('nationalDrivers');

Route::get('nationalDrivers/export', [NationalDriversLicenseStatesController::class, 'nationalDrivers'])->name('nationalDrivers.export');
Route::post('nationalDrivers/import', [NationalDriversLicenseStatesController::class, 'nationalDrivers'])->name('nationalDrivers.import');


