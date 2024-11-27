<?php
namespace App\Repositories;

use App\Models\Resultat;
use App\Repositories\RessourceRepository;
use Illuminate\Support\Facades\DB;

class ResultatRepository extends RessourceRepository{
    public function __construct(Resultat $resultat){
        $this->model = $resultat;
    }

    public function countByQuestion($question,$reponse){
        return DB::table('resultats')
        ->select($question. ' as question',$reponse.' as reponse', DB::raw('count(id) as nb'))
        ->groupBy($question,$reponse)
        ->get();
    }

    }
