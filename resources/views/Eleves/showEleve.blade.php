@include('nav')
<div class="container">
    <div class="row">
        <div class="mt-4">
            <div class="card">
                <div class="card-header">
                    Eleve {{$eleve->matricule}}
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><b>Nom: {{$eleve->nomEleve}}</b></h5>
                        <h5 class="card-title"><b>Prenom: {{$eleve->prenomEleve}}</b></h5>
                        <h5 class="card-title"><b>Classe: {{$eleve->classe}}</b></h5>
                        <h5 class="card-title"><b>Date Naissance: {{$eleve->date_de_naissance}}</b></h5>
                        <h5 class="card-title"><b>Sexe: {{$eleve->sexe}}</b></h5>
                        @foreach($notes as $key=>$note)
                            <h5 class="card-title"><b>Note {{$key+1}}: {{$note->note}}</b></h5>
                            <h5 class="card-title"><b>Matiere: {{$note->matiere}}</b></h5>
                        @endforeach
<<<<<<< HEAD
                        <a href="/eleve/modifier/{{$eleve->id}}" class="btn btn-success offset-4">Modifie Eleve</a>
                        <a href="" class="btn btn-warning ">Modifier Note</a>
=======
>>>>>>> 8a09c3f860072087337172b7b48c4aad0b14f8ec
                    </div>
<<<<<<< HEAD
                    <div class="card-body">
                        <a href="" class="btn btn-success offset-4">Modifie Eleve</a>
                        <a href="/modifierNote/{{$eleve->id}}" class="btn btn-warning ">Modifier Note</a>
                    </div>
=======
                     
>>>>>>> 40df6128eac8df461cefd6863551ed3ce5e6636d


                </div>
            </div>
        </div>
    </div>
</div>
