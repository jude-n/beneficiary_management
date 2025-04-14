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

    public function getBeneficiary($id)
    {
        return Beneficiary::find($id);
    }

    public function getAllActiveBeneficiaries()
    {
        return Beneficiary::where('status', 'active')->count();
    }


    public function updateBeneficiary($id, array $data)
    {
        $beneficiary = Beneficiary::find($id);
        if (!$beneficiary) {
            return false;
        }

        return $beneficiary->update($data);
    }


}
