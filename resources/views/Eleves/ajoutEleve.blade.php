@include('nav')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">AJOUT ELEVE</h5>
            <div class="card-body">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="nomEleve">Nom Eleve</label>
                        <input type="text" class="form-control" id="nomEleve"  placeholder="Enter un nom" name="titre">
                    </div>
                    <div class="form-group">
                        <label for="nomEleve">Prénom Eleve</label>
                        <input type="text" class="form-control" id="nomEleve"  placeholder="Enter un prénom" name="contenu">
                    </div>
                    <div class="form-group">
                        <label for="dateNaiss">Date De Naissance</label>
                        <input type="date" class="form-control" id="dateNaiss" name="dateNaiss">
                    </div>
                    <div class="form-group">
                        <label for="matEleve">Matricule</label>
                        <input type="text" class="form-control" id="matEleve" name="matEleve">
                    </div>
                    <div class="form-group">
                        <label for="sexeEleve">Sexe</label>
                        <select name="sexe" id="" class="form-control">
                            <option value="">Choisissez</option>
                            <option value="masculin">Masculin</option>
                            <option value="féminin">Féminin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark offset-4 mt-2">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</div>