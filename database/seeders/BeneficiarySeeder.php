<?php

namespace Database\Seeders;

use App\Models\Beneficiary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeneficiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batchSize = 2000;
        $totalRecords = 2000000; // Total number of records to insert
        $iterations = ceil($totalRecords / $batchSize);

        // Disable query log to optimize memory usage
        DB::disableQueryLog();

        $overallStartTime = microtime(true);
        $this->command->info("Starting seeding of {$totalRecords} records...");

        $progress = $this->command->getOutput()->createProgressBar($iterations);
        $progress->start();

        for ($batchCount = 0; $batchCount < $totalRecords; $batchCount += $batchSize) {
            $chunkStartTime = microtime(true);


            DB::transaction(function () use ($batchSize) {
                // Insert a batch of records
                $records = Beneficiary::factory($batchSize)->make()->toArray();
                DB::table('beneficiaries')->insert($records);
            });

            $progress->advance();


            // calculate ETA after each chunk
            $elapsed = microtime(true) - $overallStartTime;
            $averagePerChunk = $elapsed / ($batchCount + 1);
            $remainingChunks = $iterations - ($batchCount + 1);
            $etaSeconds = $remainingChunks * $averagePerChunk;

            $chunkEndTime = microtime(true);
            $chunkDuration = $chunkEndTime - $chunkStartTime;
//            $this->command->info("Inserted {$batchSize} records in " . round($chunkDuration, 2) . " seconds.");
//            $this->command->getOutput()->write("  ETA: " . gmdate("H:i:s", (int) $etaSeconds) . "   \r");

            $this->command->getOutput()->write("  | Chunk time: " . round($chunkDuration, 2) . "s"." /r");


        }
        $progress->finish();
        $this->command->newLine(2);

        $overallEndTime = microtime(true);
        $overallDuration = $overallEndTime - $overallStartTime;
        $this->command->info("Seeding completed in " . round($overallDuration, 2) . " seconds.");
    }
}
