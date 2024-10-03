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
use App\Http\Controllers\NnamdiAzikweAirportController;
use App\Http\Controllers\AkureAirportController;
use App\Http\Controllers\AkanuIbiamAirportController;
use App\Http\Controllers\BeninAirportController;
use App\Http\Controllers\MargeretEkpoAirportController;
use App\Http\Controllers\IbadanAirportController;
use App\Http\Controllers\IlorinAirportController;
use App\Http\Controllers\YakubuGowonAirportController;
use App\Http\Controllers\KadunaAirportController;
use App\Http\Controllers\SultanSaddikAirportController;
use App\Http\Controllers\MallamAminuAirportController;
use App\Http\Controllers\MaiduguriAirportController;
use App\Http\Controllers\MakurdiAirportController;
use App\Http\Controllers\MurtalaMuhammedAirportController;
use App\Http\Controllers\PortharcourtAirportController;
use App\Http\Controllers\YolaAirportController;
use App\Http\Controllers\MinnaAirportController;
use App\Http\Controllers\KatsinaAirportController;
use App\Http\Controllers\SamMbakweAirportController;
use App\Http\Controllers\OsubiAirportController;
use App\Http\Controllers\TrafficByStates2006Controller;
use App\Http\Controllers\TrafficByStates2008Controller;
use App\Http\Controllers\TrafficByStates2009Controller;
use App\Http\Controllers\TrafficByStates2010Controller;
use App\Http\Controllers\TrafficByStates2011Controller;
use App\Http\Controllers\TrafficByStates2012Controller;
use App\Http\Controllers\TrafficByStates2013Controller;
use App\Http\Controllers\TrafficByStates2014Controller;
use App\Http\Controllers\TrafficByStates2015Controller;
use App\Http\Controllers\TrafficByStates2016Controller;
use App\Http\Controllers\TrafficByStates2017Controller;
use App\Http\Controllers\TrafficByStates2018Controller;
use App\Http\Controllers\TrafficByStates2019Controller;
use App\Http\Controllers\TrafficByStates2020Controller;
use App\Http\Controllers\TrafficByStates2021Controller;
use App\Http\Controllers\TrafficByStates2022Controller;
use App\Http\Controllers\CausativeFactorController;
use App\Http\Controllers\CausativeFactor2014Controller;
use App\Http\Controllers\CausativeFactor2017Controller;
use App\Http\Controllers\CausativeFactor2019Controller;
use App\Http\Controllers\CausativeFactor2020Controller;
use App\Http\Controllers\CausativeFactor2021Controller;
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



Route::get('nnamdi', [NnamdiAzikweAirportController::class, 'nnamdiAzikwe'])->name('nnamdi');

Route::get('nnamdi/export', [NnamdiAzikweAirportController::class, 'nnamdiAzikwe'])->name('nnamdi.export');
Route::post('nnamdi/import', [NnamdiAzikweAirportController::class, 'nnamdiAzikwe'])->name('nnamdi.import');



Route::get('akure', [AkureAirportController::class, 'akure'])->name('akure');

Route::get('akure/export', [AkureAirportController::class, 'akure'])->name('akure.export');
Route::post('akure/import', [AkureAirportController::class, 'akure'])->name('akure.import');



Route::get('akanu', [AkanuIbiamAirportController::class, 'akanuIbiam'])->name('akanu');

Route::get('akanu/export', [AkanuIbiamAirportController::class, 'akanuIbiam'])->name('akanu.export');
Route::post('akanu/import', [AkanuIbiamAirportController::class, 'akanuIbiam'])->name('akanu.import');



Route::get('benin', [BeninAirportController::class, 'benin'])->name('benin');

Route::get('benin/export', [BeninAirportController::class, 'benin'])->name('benin.export');
Route::post('benin/import', [BeninAirportController::class, 'benin'])->name('benin.import');



Route::get('margeret', [MargeretEkpoAirportController::class, 'margeret'])->name('margeret');

Route::get('margeret/export', [MargeretEkpoAirportController::class, 'mageret'])->name('margeret.export');
Route::post('margeret/import', [MargeretEkpoAirportController::class, 'margeret'])->name('margeret.import');




Route::get('ibadan', [IbadanAirportController::class, 'ibadan'])->name('ibadan');

Route::get('ibadan/export', [IbadanAirportController::class, 'ibadan'])->name('ibadan.export');
Route::post('ibadan/import', [IbadanAirportController::class, 'ibadan'])->name('ibadan.import');



Route::get('ilorin', [IlorinAirportController::class, 'ilorin'])->name('ilorin');

Route::get('ilorin/export', [IlorinAirportController::class, 'ilorin'])->name('ilorin.export');
Route::post('ilorin/import', [IlorinAirportController::class, 'ilorin'])->name('ilorin.import');




Route::get('yakubu', [YakubuGowonAirportController::class, 'yakubu'])->name('yakubu');

Route::get('yakubu/export', [YakubuGowonAirportController::class, 'yakubu'])->name('yakubu.export');
Route::post('yakubu/import', [YakubuGowonAirportController::class, 'yakubu'])->name('yakubu.import');



Route::get('kaduna', [KadunaAirportController::class, 'kaduna'])->name('kaduna');

Route::get('kaduna/export', [KadunaAirportController::class, 'kaduna'])->name('kaduna.export');
Route::post('kaduna/import', [KadunaAirportController::class, 'kaduna'])->name('kaduna.import');



Route::get('sultan', [SultanSaddikAirportController::class, 'sultan'])->name('sultan');

Route::get('sultan/export', [SultanSaddikAirportController::class, 'sultan'])->name('sultan.export');
Route::post('sultan/import', [SultanSaddikAirportController::class, 'sultan'])->name('sultan.import');




Route::get('mallam', [MallamAminuAirportController::class, 'mallam'])->name('mallam');

Route::get('mallam/export', [MallamAminuAirportController::class, 'mallam'])->name('mallam.export');
Route::post('mallam/import', [MallamAminuAirportController::class, 'mallam'])->name('mallam.import');



Route::get('maiduguri', [MaiduguriAirportController::class, 'maiduguri'])->name('maiduguri');

Route::get('maiduguri/export', [MaiduguriAirportController::class, 'maiduguri'])->name('maiduguri.export');
Route::post('maiduguri/import', [MaiduguriAirportController::class, 'maiduguri'])->name('maiduguri.import');




Route::get('makurdi', [MakurdiAirportController::class, 'makurdi'])->name('makurdi');

Route::get('makurdi/export', [MakurdiAirportController::class, 'makurdi'])->name('makurdi.export');
Route::post('makurdi/import', [MakurdiAirportController::class, 'makurdi'])->name('makurdi.import');




Route::get('murtala', [MurtalaMuhammedAirportController::class, 'murtala'])->name('murtala');

Route::get('murtala/export', [MurtalaMuhammedAirportController::class, 'murtala'])->name('murtala.export');
Route::post('murtala/import', [MurtalaMuhammedAirportController::class, 'murtala'])->name('murtala.import');




Route::get('portharcourt', [PortharcourtAirportController::class, 'portharcourt'])->name('portharcourt');

Route::get('portharcourt/export', [PortharcourtAirportController::class, 'portharcourt'])->name('portharcourt.export');
Route::post('portharcourt/import', [PortharcourtAirportController::class, 'portharcourt'])->name('portharcourt.import');




Route::get('yola', [YolaAirportController::class, 'yola'])->name('yola');

Route::get('yola/export', [YolaAirportController::class, 'yola'])->name('yola.export');
Route::post('yola/import', [YolaAirportController::class, 'yola'])->name('yola.import');




Route::get('minna', [MinnaAirportController::class, 'minna'])->name('minna');

Route::get('minna/export', [MinnaAirportController::class, 'minna'])->name('minna.export');
Route::post('minna/import', [MinnaAirportController::class, 'minna'])->name('minna.import');




Route::get('katsina', [KatsinaAirportController::class, 'katsina'])->name('katsina');

Route::get('katsina/export', [KatsinaAirportController::class, 'katsina'])->name('katsina.export');
Route::post('katsina/import', [KatsinaAirportController::class, 'katsina'])->name('katsina.import');




Route::get('sam', [SamMbakweAirportController::class, 'samMbakwe'])->name('samMbakwe');

Route::get('sam/export', [SamMbakweAirportController::class, 'samMbakwe'])->name('samMbakwe.export');
Route::post('sam/import', [SamMbakweAirportController::class, 'samMbakwe'])->name('samMbakwe.import');




Route::get('osubi', [OsubiAirportController::class, 'osubi'])->name('osubi');

Route::get('osubi/export', [OsubiAirportController::class, 'osubi'])->name('osubi.export');
Route::post('osubi/import', [OsubiAirportController::class, 'osubi'])->name('osubi.import');





Route::get('traffic2006', [TrafficByStates2006Controller::class, 'traffic2006'])->name('traffic2006');

Route::get('traffic2006/export', [TrafficByStates2006Controller::class, 'traffic2006'])->name('traffic2006.export');
Route::post('traffic2006/import', [TrafficByStates2006Controller::class, 'traffic2006'])->name('traffic2006.import');




Route::get('traffic2008', [TrafficByStates2008Controller::class, 'traffic2008'])->name('traffic2008');

Route::get('traffic2008/export', [TrafficByStates2008Controller::class, 'traffic2008'])->name('traffic2008.export');
Route::post('traffic2008/import', [TrafficByStates2008Controller::class, 'traffic2008'])->name('traffic2008.import');




Route::get('traffic2009', [TrafficByStates2009Controller::class, 'traffic2009'])->name('traffic2009');

Route::get('traffic2009/export', [TrafficByStates2009Controller::class, 'traffic2009'])->name('traffic2009.export');
Route::post('traffic2009/import', [TrafficByStates2009Controller::class, 'traffic2009'])->name('traffic2009.import');



Route::get('traffic2010', [TrafficByStates2010Controller::class, 'traffic2010'])->name('traffic2010');

Route::get('traffic2010/export', [TrafficByStates2010Controller::class, 'traffic2010'])->name('traffic2010.export');
Route::post('traffic2010/import', [TrafficByStates2010Controller::class, 'traffic2010'])->name('traffic2010.import');


Route::get('traffic2011', [TrafficByStates2011Controller::class, 'traffic2011'])->name('traffic2011');

Route::get('traffic2011/export', [TrafficByStates2011Controller::class, 'traffic2011'])->name('traffic2011.export');
Route::post('traffic2011/import', [TrafficByStates2011Controller::class, 'traffic2011'])->name('traffic2011.import');


Route::get('traffic2012', [TrafficByStates2012Controller::class, 'traffic2012'])->name('traffic2012');

Route::get('traffic2012/export', [TrafficByStates2012Controller::class, 'traffic2012'])->name('traffic2012.export');
Route::post('traffic2012/import', [TrafficByStates2012Controller::class, 'traffic2012'])->name('traffic2012.import');


Route::get('traffic2013', [TrafficByStates2013Controller::class, 'traffic2013'])->name('traffic2013');

Route::get('traffic2013/export', [TrafficByStates2013Controller::class, 'traffic2013'])->name('traffic2013.export');
Route::post('traffic2013/import', [TrafficByStates2013Controller::class, 'traffic2013'])->name('traffic2013.import');


Route::get('traffic2014', [TrafficByStates2014Controller::class, 'traffic2014'])->name('traffic2014');

Route::get('traffic2014/export', [TrafficByStates2014Controller::class, 'traffic2014'])->name('traffic2014.export');
Route::post('traffic2014/import', [TrafficByStates2014Controller::class, 'traffic2014'])->name('traffic2014.import');


Route::get('traffic2015', [TrafficByStates2015Controller::class, 'traffic2015'])->name('traffic2015');

Route::get('traffic2015/export', [TrafficByStates2015Controller::class, 'traffic2015'])->name('traffic2015.export');
Route::post('traffic2015/import', [TrafficByStates2015Controller::class, 'traffic2015'])->name('traffic2015.import');


Route::get('traffic2016', [TrafficByStates2016Controller::class, 'traffic2016'])->name('traffic2016');

Route::get('traffic2016/export', [TrafficByStates2016Controller::class, 'traffic2016'])->name('traffic2016.export');
Route::post('traffic2016/import', [TrafficByStates2016Controller::class, 'traffic2016'])->name('traffic2016.import');


Route::get('traffic2017', [TrafficByStates2017Controller::class, 'traffic2017'])->name('traffic2017');

Route::get('traffic2017/export', [TrafficByStates2017Controller::class, 'traffic2017'])->name('traffic2017.export');
Route::post('traffic2017/import', [TrafficByStates2017Controller::class, 'traffic2017'])->name('traffic2017.import');


Route::get('traffic2018', [TrafficByStates2018Controller::class, 'traffic2018'])->name('traffic2006');

Route::get('traffic2018/export', [TrafficByStates2018Controller::class, 'traffic2018'])->name('traffic2018.export');
Route::post('traffic2018/import', [TrafficByStates2018Controller::class, 'traffic2018'])->name('traffic2018.import');


Route::get('traffic2019', [TrafficByStates2019Controller::class, 'traffic2019'])->name('traffic2006');

Route::get('traffic2019/export', [TrafficByStates2019Controller::class, 'traffic2019'])->name('traffic2019.export');
Route::post('traffic2019/import', [TrafficByStates2019Controller::class, 'traffic2019'])->name('traffic2019.import');


Route::get('traffic2020', [TrafficByStates2020Controller::class, 'traffic2020'])->name('traffic2020');

Route::get('traffic2020/export', [TrafficByStates2020Controller::class, 'traffic2020'])->name('traffic2020.export');
Route::post('traffic2020/import', [TrafficByStates2020Controller::class, 'traffic2020'])->name('traffic2020.import');


Route::get('traffic2021', [TrafficByStates2021Controller::class, 'traffic2021'])->name('traffic2021');

Route::get('traffic2021/export', [TrafficByStates2021Controller::class, 'traffic2021'])->name('traffic2021.export');
Route::post('traffic2021/import', [TrafficByStates2021Controller::class, 'traffic2021'])->name('traffic2021.import');


Route::get('traffic2022', [TrafficByStates2022Controller::class, 'traffic2022'])->name('traffic2022');

Route::get('traffic2022/export', [TrafficByStates2022Controller::class, 'traffic2022'])->name('traffic2022.export');
Route::post('traffic2022/import', [TrafficByStates2022Controller::class, 'traffic2022'])->name('traffic2022.import');


Route::get('factor', [CausativeFactorController::class, 'factor'])->name('factor');

Route::get('factor/export', [CausativeFactorController::class, 'factor'])->name('factor.export');
Route::post('factor/import', [CausativeFactorController::class, 'factor'])->name('factor.import');



Route::get('factor14', [CausativeFactor2014Controller::class, 'factor14'])->name('factor14');

Route::get('factor14/export', [CausativeFactor2014Controller::class, 'factor14'])->name('factor14.export');
Route::post('factor14/import', [CausativeFactor2014Controller::class, 'factor14'])->name('factor14.import');





Route::get('factor17', [CausativeFactor2017Controller::class, 'factor17'])->name('factor17');

Route::get('factor17/export', [CausativeFactor2017Controller::class, 'factor17'])->name('factor17.export');
Route::post('factor17/import', [CausativeFactor2017Controller::class, 'factor17'])->name('factor17.import');



Route::get('factor19', [CausativeFactor2019Controller::class, 'factor19'])->name('factor19');

Route::get('factor19/export', [CausativeFactor2019Controller::class, 'factor19'])->name('factor19.export');
Route::post('factor19/import', [CausativeFactor2019Controller::class, 'factor19'])->name('factor19.import');




Route::get('factor20', [CausativeFactor2020Controller::class, 'factor20'])->name('factor20');

Route::get('factor20/export', [CausativeFactor2020Controller::class, 'factor20'])->name('factor20.export');
Route::post('factor20/import', [CausativeFactor2020Controller::class, 'factor20'])->name('factor20.import');




Route::get('factor21', [CausativeFactor2021Controller::class, 'factor21'])->name('factor21');

Route::get('factor21/export', [CausativeFactor2021Controller::class, 'factor21'])->name('factor21.export');
Route::post('factor21/import', [CausativeFactor2021Controller::class, 'factor21'])->name('factor21.import');
