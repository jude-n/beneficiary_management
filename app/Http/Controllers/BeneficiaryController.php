<?php

namespace App\Http\Controllers;

use App\Domain\Services\IBeneficiaryService;
use App\Http\Requests\BeneficiaryUpdateRequest;
use App\Models\Beneficiary;
use Inertia\Inertia;

class BeneficiaryController extends Controller
{
    protected $beneficiaryService;

    public function __construct(IBeneficiaryService $beneficiaryService)
    {
        $this->beneficiaryService = $beneficiaryService;
    }

    public function index()
    {
        return Inertia::render('beneficiaries/beneficiary-index');
    }


    public function getActiveBeneficiariesWithoutCache()
    {
        $results = $this->beneficiaryService->getAllActiveBeneficiariesNoCache();
        return response()->json($results);

    }

    public function getActiveBeneficiariesWithCache()
    {

        $results =  $this->beneficiaryService->getAllActiveBeneficiariesWithCache();
        return response()->json($results);
    }

    public function update(BeneficiaryUpdateRequest $request, $id)
    {
//        dd($request->all());
        $validatedData = $request->validated();
        $this->beneficiaryService->updateBeneficiary($id, $validatedData);

        return response()->json(['message' => 'Beneficiary updated successfully']);
    }
}
