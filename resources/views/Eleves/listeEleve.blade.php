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
                        <th>Action</th>
                    </tr>
                </thead>

                @foreach($eleves as $eleve)
                    <tr>
                        <td> {{$eleve->matricule}} </td>
                        <td> {{$eleve->nomEleve}} </td>
                        <td> {{$eleve->prenomEleve}} </td>
                        <td> {{$eleve->date_de_naissance}} </td>
                        <td>
                            <a href="/detailEleve/{{$eleve->id}}" class="btn btn-secondary">Voir Détail</a>
                            <a href="" class="btn btn-danger">SUPPRIMER</a>
                            <a href="/ajoutNote/{{$eleve->id}}" class="btn btn-warning">AJOUTER NOTE</a>

                        </td>
                    </tr>
                @endforeach


            </table>
        </div>
    </div>
</div>
