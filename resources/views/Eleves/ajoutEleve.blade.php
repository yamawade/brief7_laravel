@include('nav')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">AJOUT ELEVE</h5>
            <div class="card-body">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        @php
                            $letters = Str::random(2);
                            $numbers = rand(1000, 9999);
                            $matricule = strtoupper($letters) . '-' . $numbers;
                        @endphp
                        <label for="matEleve">Matricule</label>
                        <input type="text" class="form-control" id="matricule" name="matEleve"
                            value="{{ $matricule }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nomEleve">Nom Eleve</label>
                        <input type="text" class="form-control" id="nomEleve" placeholder="Enter un nom"
                            name="titre">
                    </div>
                    <div class="form-group">
                        <label for="nomEleve">Prénom Eleve</label>
                        <input type="text" class="form-control" id="nomEleve" placeholder="Enter un prénom"
                            name="contenu">
                    </div>
                    <div class="form-group">
                        <label for="dateNaiss">Date De Naissance</label>
                        <input type="date" class="form-control" id="dateNaiss" name="dateNaiss">
                    </div>
                   
                    <button type="submit" class="btn btn-dark offset-4 mt-2">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</div>

