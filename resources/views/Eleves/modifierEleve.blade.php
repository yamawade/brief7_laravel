@include('nav')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">AJOUT ELEVE</h5>
            <div class="card-body">
                <form method="post" action="/eleve/modifierEleve/{{$eleve->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="nomEleve">Nom Eleve</label>
                        <input type="text" class="form-control" id="nomEleve" value="{{$eleve->nomEleve}}"
                            name="nomEleve">
                    </div>
                    <div class="form-group">
                        <label for="prenomEleve">Prénom Eleve</label>
                        <input type="text" class="form-control" id="prenomEleve" value="{{$eleve->prenomEleve}}"
                            name="prenomEleve">
                    </div>
                    <div class="form-group">
                        <label for="classe">classe</label>
                        <input type="text" class="form-control" id="classe" value="{{$eleve->classe}}"
                            name="classe">
                    </div>
                    <div class="form-group">
                        <label for="dateNaiss">Date De Naissance</label>
                        <input type="date" class="form-control" id="dateNaiss" value="{{$eleve->date_de_naissance}}" name="dateNaiss"> 
                    </div>

                    <div class="form-group">
                        <label for="sexeEleve">Sexe</label>
                        <select name="sexe" id="" class="form-control">
                            <option value="masculin" >Masculin</option>
                            <option value="féminin" >Féminin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark offset-4 mt-2">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</div>
