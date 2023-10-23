<?php

use Src\Route;
Route::add('GET', '/index', [Controller\Site::class, 'index'])->middleware('auth');

Route::add(['GET', 'POST'], '/RegisterUser', [Controller\Site::class, 'RegisterUser']);
Route::add(['GET', 'POST'], '/RegisterDoctor', [Controller\Site::class, 'RegisterDoctor'])->middleware('admin');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add('GET', '/SpecializationList', [Controller\Site::class, 'SpecList'])->middleware('auth');
Route::add('GET', '/SpecializationDetail', [Controller\Site::class, 'SpecView'])->middleware('auth');

Route::add('GET', '/DoctorList', [Controller\Site::class, 'DoctorList'])->middleware('auth');
Route::add('GET', '/DoctorDetail', [Controller\Site::class, 'DoctorView'])->middleware('auth');

Route::add('GET', '/DiagnosisList', [Controller\Site::class, 'DiagnosisList'])->middleware('auth');
Route::add('GET', '/DiagnosisDetail', [Controller\Site::class, 'DiagnosisView'])->middleware('auth');

Route::add('GET', '/RecordList', [Controller\Site::class, 'RecordList'])->middleware('auth');
Route::add('GET', '/RecordDetail', [Controller\Site::class, 'RecordView'])->middleware('auth');
Route::add(['GET', 'POST'], '/AddRecordAdmin', [Controller\Site::class, 'CreateRecordAdmin'])->middleware('auth');
Route::add(['GET', 'POST'], '/AddRecordUser', [Controller\Site::class, 'CreateRecordUser'])->middleware('auth');

Route::add('GET', '/Subdivisions2', [Controller\Site::class, 'Subdivisions2'])->middleware('auth');
Route::add('GET', '/Subdivisions3', [Controller\Site::class, 'Subdivisions3'])->middleware('auth');
Route::add('GET', '/Calculations', [Controller\Site::class, 'Calculations'])->middleware('auth');
Route::add('GET', '/CalculationsAnswer1', [Controller\Site::class, 'CalculationsAnswer1'])->middleware('auth');
Route::add('GET', '/CalculationsAnswer2', [Controller\Site::class, 'CalculationsAnswer2'])->middleware('auth');
Route::add('GET', '/SubdivisionsAnswer', [Controller\Site::class, 'SubdivisionsAnswer'])->middleware('auth');
Route::add('GET', '/searchdb', [Controller\Site::class, 'searchdb'])->middleware('auth');
Route::add(['GET', 'POST'], '/AddRoom', [Controller\Site::class, 'addRoom'])->middleware('auth');;
