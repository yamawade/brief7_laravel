@include('nav')
<div class="container">
<<<<<<< HEAD
    <div class="row">
=======
    <div class="row">  
>>>>>>> 24769e57bfa8de89bdd57f65dfa46371ad806d9a
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
                        <a href="" class="btn btn-success offset-4">Modifie Eleve</a>
                        <a href="" class="btn btn-warning ">Modifier Note</a>
                    </div>
<<<<<<< HEAD


                </div>
            </div>
        </div>
    </div>
</div>
=======
                        

                </div>        
            </div>
        </div>
    </div>
</div>
>>>>>>> 24769e57bfa8de89bdd57f65dfa46371ad806d9a
