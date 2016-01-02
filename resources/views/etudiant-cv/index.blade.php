@extends('template')

@section('contenu')
	
                    	<div class="panel panel-primary">
							
							<div class="panel-body"> 
								<p>voici la liste des etudiants:</p>
								@foreach ($etudiants as $index => $etudiant)
									<div id="autre">&nbsp;</div>
									<div id="photoProfil">
										<img src="{{ $etudiant->photo }}" width="120" height="120">
									</div>
									<div id="infosPersonnel">
										<div><strong> etudiant : </strong> {{ $etudiant->cne }}</div>
										<div><strong> Nom : </strong> {{ $etudiant->nom }}</div>
										<div><strong> Prénom : </strong>{{ $etudiant->prenom }}</div>
										<div><strong> Email : </strong>{{ $etudiant->email }}</div>
										<div><strong> Adresse : </strong> {{ $etudiant->adresse }}</div>
										<div><strong> Téléphone : </strong>{{ $etudiant->telephone }}</div>
										<div><a href="show">cv</a></div>
		
									</div>
								@endforeach							
							</div>	
						</div>

                	
@stop