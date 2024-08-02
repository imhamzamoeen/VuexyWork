<?php

namespace App\Http\Controllers;

use App\Models\CompanyExists;
use App\Http\Requests\StoreCompanyExistsRequest;
use App\Http\Requests\UpdateCompanyExistsRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Support\Facades\DB;

class CompanyExistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front.company-exists.file-upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyExistsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyExistsRequest $request)
    {
           
            try {
            DB::beginTransaction();
            $result = ExcelImportService::ImportCompanyExistsFile($request->validated());
            if ($result) {
                DB::commit();
                return (JsonResponseService::JsonSuccess('File imported successfully.',[]));
            }
            DB::rollBack();
            return (JsonResponseService::JsonFailed('File importing failed.',[]));
        } catch (Exception $exception) {
            DB::rollBack();
            return (JsonResponseService::getJsonException($exception));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyExists  $companyExists
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyExists $companyExists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyExists  $companyExists
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyExists $companyExists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyExistsRequest  $request
     * @param  \App\Models\CompanyExists  $companyExists
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyExistsRequest $request, CompanyExists $companyExists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyExists  $companyExists
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyExists $companyExists)
    {
        //
    }
}
