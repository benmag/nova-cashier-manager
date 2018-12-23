<?php

Route::get('/user/{id}', 'Themsaid\CashierTool\CashierToolController@user');
Route::post('/user/{id}/cancel', 'Themsaid\CashierTool\CashierToolController@cancelSubscription');
Route::post('/user/{id}/resume', 'Themsaid\CashierTool\CashierToolController@resumeSubscription');
Route::post('/user/{id}/update', 'Themsaid\CashierTool\CashierToolController@updateSubscription');
Route::post('/user/{id}/refund/{chargeId}', 'Themsaid\CashierTool\CashierToolController@refundCharge');

Route::post('/user/{id}/foo', 'Themsaid\CashierTool\CashierToolController@cancelAddonSubscription');
Route::post('/user/{id}/cancel-addon/{addonId}', 'Themsaid\CashierTool\CashierToolController@cancelAddonSubscription');
Route::post('/user/{id}/resume-addon/{addonId}', 'Themsaid\CashierTool\CashierToolController@resumeAddonSubscription');