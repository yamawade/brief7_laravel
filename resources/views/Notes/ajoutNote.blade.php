@include('nav')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">AJOUT Note</h5>
            <div class="card-body">
                <form method="POST" action="/ajoutNote/{id}">
                    @csrf
                    <div class="form-group">
                        <label for="nomEleve">Matière</label>
                        <input type="text" class="form-control" id="nomEleve"  placeholder="Enter une matière" name="matiere">
                    </div>
                    <div class="form-group">
                        <label for="nomEleve">Note Obtenue</label>
                        <input type="text" class="form-control" id="nomEleve"  placeholder="Enter La Note Obtenue" name="note">
                    </div>


                    <button type="submit" class="btn btn-dark offset-4 mt-2">Ajouter La Note</button>
                </form>
            </div>
        </div>
    </div>
</div>
