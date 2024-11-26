<?php
namespace App\Repositories;

use App\Models\Resultat;
use App\Repositories\RessourceRepository;
use Illuminate\Support\Facades\DB;

class ResultatRepository extends RessourceRepository{
    public function __construct(Resultat $resultat){
        $this->model = $resultat;
    }

    }
