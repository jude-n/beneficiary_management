<?php

namespace App\Domain\Services;

use App\Domain\Repositories\IBeneficiaryRepository;
use Illuminate\Support\Facades\Cache;

class BeneficiaryService implements IBeneficiaryService
{
    private $beneficiaryRepository;

    public function __construct(IBeneficiaryRepository $beneficiaryRepository)
    {
        $this->beneficiaryRepository = $beneficiaryRepository;
    }
    public function getAllActiveBeneficiariesWithCache()
    {
        $queryStartTime = microtime(true);
        $beneficiaries = Cache::remember('active_beneficiaries', now()->addMinutes(10), function () {
            return $this->beneficiaryRepository->getAllActiveBeneficiaries();
        });
        $queryEndTime = microtime(true);
        $executionTime = ($queryEndTime - $queryStartTime);

        return [
            'execution_time' => $executionTime,
            'beneficiary_count' => $beneficiaries
        ];
    }

    public function getAllActiveBeneficiariesNoCache()
    {
        $queryStartTime = microtime(true);
        $beneficiaries = $this->beneficiaryRepository->getAllActiveBeneficiaries();
        $queryEndTime = microtime(true);
        $executionTime = ($queryEndTime - $queryStartTime);

        return [
            'execution_time' => $executionTime,
            'beneficiary_count' => $beneficiaries
        ];
    }

    public function updateBeneficiary()
    {
        // TODO: Implement updateBeneficiary() method.
    }


    public function invalidateCache($key)
    {
        Cache::forget($key);
    }


}
