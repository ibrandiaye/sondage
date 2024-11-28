<?php

namespace App\Http\Controllers;

use App\Repositories\ResultatRepository;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    protected $resultatRepository;

    public function __construct(ResultatRepository $resultatRepository){
        $this->resultatRepository =$resultatRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultats = $this->resultatRepository->getAll();
        $questions1 = $this->resultatRepository->countByQuestion('q1','r1');
        $questions2 = $this->resultatRepository->countByQuestion('q2','r2');

        $questions3 = $this->resultatRepository->countByQuestion('q3','r3');

        $questions4 = $this->resultatRepository->countByQuestion('q4','r4');

        $questions5 = $this->resultatRepository->countByQuestion('q5','r5');

        $questions6 = $this->resultatRepository->countByQuestion('q6','r6');

        $questions7 = $this->resultatRepository->countByQuestion('q7','r7');

        $questions8 = $this->resultatRepository->countByQuestion('q8','r8');

        //dd($rt);
        return view('home',compact('resultats','questions1','questions2','questions3','questions4',
    'questions7'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resultat.add');
    }

    public function viewFormSondage()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(["q1"=>"1. Avez-vous pu voter facilement lors des élections législatives anticipées du 17 novembre 2024 ?",
    "q2"=>"2. Comment évaluez-vous l’organisation générale du scrutin ?",
    "q3"=>"3. Avez-vous reçu votre carte d’électeur à temps ?",
    "q4"=>"4. Avez-vous trouvé les informations sur les modalités de vote claires et accessibles ?",
    "q5"=>"5. Quels défis ou difficultés avez-vous rencontrés lors du vote ?",
    "q6"=>"6. Quels aspects de l’organisation peuvent être améliorés ?",
    "q7"=>"7. Globalement, vous sentez-vous confiant quant à la transparence et l’équité du processus ?",
    "q8"=>"8. Recommandez-vous d’autres moyens pour encourager la participation ?"
    ]);
        $resultats = $this->resultatRepository->store($request->all());
        return view("succees");

    }
    public function enregistrerSondage(Request $request)
    {
        $request->merge(["q1"=>"1. Avez-vous pu voter facilement lors des élections législatives anticipées du 17 novembre 2024 ?",
        "q2"=>"2. Comment évaluez-vous l’organisation générale du scrutin ?",
        "q3"=>"3. Avez-vous reçu votre carte d’électeur à temps ?",
        "q4"=>"4. Avez-vous trouvé les informations sur les modalités de vote claires et accessibles ?",
        "q5"=>"5. Quels défis ou difficultés avez-vous rencontrés lors du vote ?",
        "q6"=>"6. Quels aspects de l’organisation peuvent être améliorés ?",
        "q7"=>"7. Globalement, vous sentez-vous confiant quant à la transparence et l’équité du processus ?",
        "q8"=>"8. Recommandez-vous d’autres moyens pour encourager la participation ?"
        ]);
        $request->validate([
            'r1'=> 'required',
            'r2'=> 'required',
            'r3'=> 'required',
            'r4'=> 'required',
            'r5'=> 'required',
            'r6'=> 'required',
            'r7'=> 'required',
            'r8'=> 'required',

        ],[
            'r1.required' => '1. Avez-vous pu voter facilement lors des élections législatives anticipées du 17 novembre 2024 ? Obligatoire',
            'r2.required' => '2. Comment évaluez-vous l’organisation générale du scrutin ? Obligatoire',
            'r3.required' => '3. Avez-vous reçu votre carte d’électeur à temps ? Obligatoire',
            'r4.required' => '4. Avez-vous trouvé les informations sur les modalités de vote claires et accessibles ? Obligatoire',
            'r5.required' => '5. Quels défis ou difficultés avez-vous rencontrés lors du vote ? Obligatoire',
            'r6.required' => '6. Quels aspects de l’organisation peuvent être améliorés ? Obligatoire',
            'r7.required' => '7. Globalement, vous sentez-vous confiant quant à la transparence et l’équité du processus ? Obligatoire',
            'r8.required' => '8. Recommandez-vous d’autres moyens pour encourager la participation ? Obligatoire',
           
        ]);
            $resultats = $this->resultatRepository->store($request->all());
            return view("succees");

    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resultat = $this->resultatRepository->getById($id);
        return view('resultat.show',compact('resultat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resultat = $this->resultatRepository->getById($id);
        return view('resultat.edit',compact('resultat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->resultatRepository->update($id, $request->all());
        return redirect('resultat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->resultatRepository->destroy($id);
        return redirect('resultat');
    }

}
