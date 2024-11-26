<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap 3 Registration Form with Validation</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">

    <form class="well form-horizontal" action="{{ route('enregistrer.sondage') }}" method="post"  id="contact_form">
        @csrf
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Titre Sondage</b></h2></center></legend><br>

<!-- Text input-->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="form-group">
    <label class="col-md-4 control-label">1. Avez-vous pu voter facilement lors des élections législatives anticipées du 17 novembre 2024 ?
    </label>  
    <div class="col-md-4 selectContainer">

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="r1" class="form-control selectpicker" required>
                <option value="">Selectionner </option>
                <option value="oui" {{old('r1')=='oui' ? 'selected' : ''}}>Oui</option>
                <option value="non" {{old('r1')=='non' ? 'selected' : ''}}>Non</option>
            </select>
        </div>
    </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >2. Comment évaluez-vous l’organisation générale du scrutin ?
</label> 
<div class="col-md-4 selectContainer">

    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="r2" class="form-control selectpicker" required>
            <option value="">Selectionner </option>
            <option value="Très satisfaisante" {{old('r2')=='Très satisfaisante' ? 'selected' : ''}}>Très satisfaisante</option>
            <option value="Satisfaisante" {{old('r2')=='Satisfaisante' ? 'selected' : ''}}>Satisfaisante</option>
            <option value="Moyenne" {{old('r2')=='Moyenne' ? 'selected' : ''}}>Moyenne</option>
            <option value="Insatisfaisante" {{old('Insatisfaisante')=='oui' ? 'selected' : ''}}>Insatisfaisante</option>
        </select>
    </div>
</div>
</div>

  <div class="form-group"> 
    <label class="col-md-4 control-label">3. Avez-vous reçu votre carte d’électeur à temps ?
    </label>
    <div class="col-md-4 selectContainer">

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="r3" class="form-control selectpicker" required>
                <option value="">Selectionner </option>
                <option value="oui" {{old('r3')=='oui' ? 'selected' : ''}}>Oui</option>
                <option value="non" {{old('r3')=='non' ? 'selected' : ''}}>Non</option>
            </select>
        </div>
    </div>
</div>
  
<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label">4. Avez-vous trouvé les informations sur les modalités de vote claires et accessibles ?
    </label>  
    <div class="col-md-4 selectContainer">

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="r4" class="form-control selectpicker" required>
                <option value="">Selectionner </option>
                <option value="Oui, très claires"  {{old('r4')=='Oui, très claires' ? 'selected' : ''}}>Oui, très claires</option>
                <option value="Oui, mais limitées" {{old('r4')=='Oui, mais limitées' ? 'selected' : ''}}>Oui, mais limitées</option>
                <option value="Non, peu claires" {{old('r4')=='Non, peu claires' ? 'selected' : ''}}>Non, peu claires</option>
            </select>
        </div>
    </div>
</div>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" >5. Quels défis ou difficultés avez-vous rencontrés lors du vote ?
   
    </label> 
    <div class="col-md-4 inputGroupContainer">

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <textarea name="r5" placeholder="Saisir ici ..." class="form-control"  >{{old('r5')}}</textarea>
        </div>
    </div>
</div>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" >6. Quels aspects de l’organisation peuvent être améliorés ?
   
    </label> 
    <div class="col-md-4 inputGroupContainer">

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <textarea name="r6" placeholder="Saisir ici ..." class="form-control"  required>{{old('r6')}}</textarea>
        </div>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">7. Globalement, vous sentez-vous confiant quant à la transparence et l’équité du processus ?
</label>  
<div class="col-md-4 selectContainer">

    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="r7" class="form-control selectpicker" required>
            <option value="">Selectionner </option>
            <option value="oui" {{old('r7')=='oui' ? 'selected' : ''}}>Oui</option>
            <option value="non" {{old('r7')=='non' ? 'selected' : ''}}>Non</option>
            <option value="neutre" {{old('r7')=='neutre' ? 'selected' : ''}}>neutre</option>
        </select>
    </div>
</div>
</div>


<!-- Text input-->
       
<div class="form-group">
    <label class="col-md-4 control-label">8. Recommandez-vous d’autres moyens pour encourager la participation ?
    </label>  
    <div class="col-md-4 inputGroupContainer">

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <textarea name="r8" placeholder="Saisir ici ..." class="form-control" required > {{old('r8')}} </textarea>
        </div>
    </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
{{-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div> --}}

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script><script  src="./script.js"></script>

</body>
</html>
