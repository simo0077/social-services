<?php

namespace App\Console\Commands;

use App\Models\demandeProtectionFamiliale;
use App\Models\demandeProtectionFamilialeArchived;
use App\Models\demandeProtectionSocial;
use App\Models\demandeProtectionSocialeArchived;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use function Ramsey\Uuid\v1;

class archiveDemands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'everyMinute:archiving';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $demandes_social_protection =demandeProtectionSocial::where('status','-1')->get();

        foreach($demandes_social_protection as $demande)
        {
            $demande_archived = $demande->replicate();
            $demande_archived = $demande_archived->toArray();
            demandeProtectionSocialeArchived::create($demande_archived);
            $demande->delete();
            $this->info('Weekly report has been sent successfully');

        }
        $demandes_familial_protection =demandeProtectionFamiliale::where('status','-1')->get();

        foreach($demandes_familial_protection as $demande)
        {
            $demande_archived = $demande->replicate();
            $demande_archived = $demande_archived->toArray();
            demandeProtectionFamilialeArchived::create($demande_archived);
            $demande->delete();
            $this->info('Weekly report has been sent successfully');

        }
    }
}
