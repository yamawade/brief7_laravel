@include('nav')
<<<<<<< HEAD
<!-- jdkjdkdkdjddk -->
=======
>>>>>>> 21620d14b188f8e8a4d1636698261be26155fd76
<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">AJOUT ELEVE</h5>
            <div class="card-body">
<<<<<<< HEAD
                <form method="post" action="/eleve/modifierEleve/{{$eleve->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="nomEleve">Nom Eleve</label>
                        <input type="text" class="form-control" id="nomEleve" value="{{$eleve->nomEleve}}"
=======
                <form method="post" action="/ajouterEleve">
                    @csrf
                    <div class="form-group">
                        <label for="nomEleve">Nom Eleve</label>
                        <input type="text" class="form-control" id="nomEleve" placeholder="Enter un nom"
>>>>>>> 21620d14b188f8e8a4d1636698261be26155fd76
                            name="nomEleve">
                    </div>
                    <div class="form-group">
                        <label for="prenomEleve">Prénom Eleve</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" id="prenomEleve" value="{{$eleve->prenomEleve}}"
=======
                        <input type="text" class="form-control" id="prenomEleve" placeholder="Enter un prénom"
>>>>>>> 21620d14b188f8e8a4d1636698261be26155fd76
                            name="prenomEleve">
                    </div>
                    <div class="form-group">
                        <label for="classe">classe</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" id="classe" value="{{$eleve->classe}}"
=======
                        <input type="text" class="form-control" id="classe" placeholder="Enter votre classe"
>>>>>>> 21620d14b188f8e8a4d1636698261be26155fd76
                            name="classe">
                    </div>
                    <div class="form-group">
                        <label for="dateNaiss">Date De Naissance</label>
<<<<<<< HEAD
                        <input type="date" class="form-control" id="dateNaiss" value="{{$eleve->date_de_naissance}}" name="dateNaiss"> 
=======
                        <input type="date" class="form-control" id="dateNaiss" name="dateNaiss">
>>>>>>> 21620d14b188f8e8a4d1636698261be26155fd76
                    </div>

                    <div class="form-group">
                        <label for="sexeEleve">Sexe</label>
                        <select name="sexe" id="" class="form-control">
<<<<<<< HEAD
                            <option value="masculin" >Masculin</option>
                            <option value="féminin" >Féminin</option>
=======
                            <option value="">Choisissez</option>
                            <option value="masculin">Masculin</option>
                            <option value="féminin">Féminin</option>
>>>>>>> 21620d14b188f8e8a4d1636698261be26155fd76
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark offset-4 mt-2">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</div>
