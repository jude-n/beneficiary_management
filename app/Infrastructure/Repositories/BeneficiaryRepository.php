<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Repositories\IBeneficiaryRepository;
use App\Models\Beneficiary;

class BeneficiaryRepository implements IBeneficiaryRepository
{
    public function getAllBeneficiaries()
    {
        return Beneficiary::all();
    }

    public function getAllActiveBeneficiaries()
    {
        return Beneficiary::where('status', 'active')->count();
    }


    public function updateBeneficiary()
    {
        // TODO: Implement updateBeneficiary() method.
    }


}
