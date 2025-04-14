<?php

namespace App\Domain\Repositories;

interface IBeneficiaryRepository
{
    public function getAllBeneficiaries();

    public function getBeneficiary($id);

    public function getAllActiveBeneficiaries();
    public function updateBeneficiary($id, array $data);
}
