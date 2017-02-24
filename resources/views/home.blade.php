@extends('app')

@section('title')
    Accueil
@endsection

@section('content')
	@if(Auth::check())
		@if($infos == '')
			<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
						<div class="alert alert-danger alert-dismissible col-md-11" role="alert">
							<strong>Attention!</strong> Ceci est votre première connexion donc veuillez renseigner les infos suivantes.
						</div><div class="clearfix"></div>
						<div class="panel panel-primary col-md-11">
							<div class="panel-heading row">Informations personelles</div>

							<div class="panel-body">
								<form action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
									<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
									<div class="form-group">
										<label class="col-md-4 control-label">Photo</label>
										<div class="col-md-6">
											<input type="file" class="form-control" name="photo" />
										</div>
									</div></br></br>

									<div class="form-group">
										<label class="col-md-4 control-label">Date de naissance</label>
										<div class="col-md-6">
											<input type="date" class="form-control" name="dateNaiss" value="{{ old('dateNaiss') }}">
										</div>
									</div></br></br>

									<div class="form-group">
										<label class="col-md-4 control-label">Sexe</label>
										<div class="row">
											<div class="input-group btn-group">
												<input type="radio" name="sexe" value="Homme" aria-label="Homme"  /><label> Homme</label><br/>
												<input type="radio" name="sexe" value="Femme" aria-label="Femme" /><label> Femme</label><br/>
											</div>
										</div>
									</div></br></br>

									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
											<button type="submit" class="btn btn-primary">
												Enregistrer
											</button>
										</div>
									</div>
								</form>
							</div>
							</div>
				</div>
			</div>
		</div>
		@endif
	@endif
		<div class="container-fluid">
			<h1 class="widgetized-title">MesServices</h1>

			<div class="row panel panel-default">

			</div>
		</div>
	<script>
		$(document).ready( function() {
			$('#dataTable').DataTable({
				"language" : {
					"sProcessing":     "Traitement en cours...",
					"sSearch":         "Rechercher&nbsp;:",
					"sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
					"sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
					"sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
					"sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
					"sInfoPostFix":    "",
					"sLoadingRecords": "Chargement en cours...",
					"sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
					"sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
					"oPaginate": {
						"sFirst":      "Premier",
						"sPrevious":   "Pr&eacute;c&eacute;dent",
						"sNext":       "Suivant",
						"sLast":       "Dernier"
					},
					"oAria": {
						"sSortAscending":  ": activer pour trier la colonne par ordre croissant",
						"sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
					}
				},
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tous"]]
			});
		});
	</script>
@endsection
