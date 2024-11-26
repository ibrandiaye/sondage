@extends('layout')
@section('title', '| resultat')


@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">

                                <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#" role="button">ACCUEIL</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('resultat.create') }}" role="button" >ENREGISTRER resultat</a></li>
                                </ol>
                            </div><!-- /.col -->
                        </div>
                    </div>
                </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="col-12">
    <div class="card ">
        <div class="card-header">LISTE D'ENREGISTREMENT DES Resultats</div>
            <div class="card-body">
               
                <table id="datatable-buttons" class="table datatable-buttons table-bordered table-responsive table-striped text-center">
                    <thead>
                        <tr>
                           
                            <th>1. Avez-vous pu voter facilement lors des élections législatives anticipées du 17 novembre 2024 ?</th>
                            <th>2. Comment évaluez-vous l’organisation générale du scrutin ?</th>
                            <th>3. Avez-vous reçu votre carte d’électeur à temps ?</th>
                            <th>4. Avez-vous trouvé les informations sur les modalités de vote claires et accessibles ?</th>
                            <th>5. Quels défis ou difficultés avez-vous rencontrés lors du vote ?</th>
                            <th>6. Quels aspects de l’organisation peuvent être améliorés ?</th>
                            <th>7. Globalement, vous sentez-vous confiant quant à la transparence et l’équité du processus ?</th>
                            <th>8. Recommandez-vous d’autres moyens pour encourager la participation ?</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($resultats as $resultat)
                        <tr>
                            <td>{{ $resultat->r1 }}</td>
                            <td>{{ $resultat->r2 }}</td>
                            <td>{{ $resultat->r3 }}</td>
                            <td>{{ $resultat->r4 }}</td>
                            <td>{{ $resultat->r5 }}</td>
                            <td>{{ $resultat->r6 }}</td>
                            <td>{{ $resultat->r7 }}</td>
                            <td>{{ $resultat->r8 }}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>



            </div>

        </div>
    </div>
</div>


@endsection
