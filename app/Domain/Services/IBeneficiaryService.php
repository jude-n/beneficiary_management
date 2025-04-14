<?php

namespace App\Domain\Services;

interface IBeneficiaryService
{
    /**
     * @return mixed
     */
    public function getAllActiveBeneficiariesWithCache();

    /**
     * @return mixed
     */
    public function getAllActiveBeneficiariesNoCache();

    /**
     * @return mixed
     */
    public function updateBeneficiary($id, array $data);

    /**
     * @param $key
     * @return mixed
     */
    public function invalidateCache($key);

}
