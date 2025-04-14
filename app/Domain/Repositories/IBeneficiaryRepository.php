<?php

namespace App\Domain\Repositories;

interface IBeneficiaryRepository
{
    public function getAllBeneficiaries();

    public function getAllActiveBeneficiaries();
    public function updateBeneficiary();
}
