@include('nav')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center mt-4">
            <h4 class="alert alert-info">Liste Des Eleves</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date Naissance</th>
<<<<<<< HEAD
                        <th>Action</th> 
=======
                        <th>Classe</th>
                        <th>Action</th>
>>>>>>> 8a09c3f860072087337172b7b48c4aad0b14f8ec
                    </tr>
                </thead> 
                @foreach($eleves as $eleve)
                    <tr>
                        <td> {{$eleve->matricule}} </td>
                        <td> {{$eleve->nomEleve}} </td>
                        <td> {{$eleve->prenomEleve}} </td>
                        <td> {{$eleve->date_de_naissance}} </td>
<<<<<<< HEAD

=======
                        <td> {{$eleve->classe}} </td>
>>>>>>> 8a09c3f860072087337172b7b48c4aad0b14f8ec
                        <td>
                            <a href="/detailEleve/{{$eleve->id}}" class="btn btn-secondary">Voir Détail</a>
                            <a href="/suppEleve/{{$eleve->id}}" class="btn btn-danger">SUPPRIMER</a>
                            <a href="/ajoutNote/{{$eleve->id}}" class="btn btn-warning">AJOUTER NOTE</a>
                        </td>
                    </tr>
                @endforeach
<<<<<<< HEAD
=======


>>>>>>> 8a09c3f860072087337172b7b48c4aad0b14f8ec
            </table>
        </div>
    </div>
</div>
