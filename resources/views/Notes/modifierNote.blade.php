@include('nav')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">AJOUT Note</h5>
            <div class="card-body">
                <form method="POST" action="/ajouterNote">
                    @csrf
                    <input type="hidden" name="id" value="{{$id_eleve->id}}">
                    <div class="form-group">
                        <label for="matiere">Matière</label>
                        <input type="text" class="form-control" id="matiere"  value="{{$note->matiere}}" name="matiere">
                    </div>
                    <div class="form-group">
                        <label for="note">Note Obtenue</label>
                        <input type="text" class="form-control" id="note"  value="{{$note->note}}" name="note">
                    </div>
                    <button type="submit" class="btn btn-dark offset-4 mt-2">Modifier La Note</button>
                </form>
            </div>
        </div>
    </div>
</div>
