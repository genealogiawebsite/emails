<?php
Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('LaravelEnso\Emails\app\Http\Controllers\Emails')
            ->prefix('api/emails')->as('emails.')
            ->group(function () {
                Route::post('', 'Store')->name('store');

                // Route::patch('{email}', 'Update')->name('update');

                Route::delete('{email}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
            });
    });