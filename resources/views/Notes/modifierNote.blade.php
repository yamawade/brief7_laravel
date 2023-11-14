@include('nav')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">Modification Note</h5>
            <div class="card-body">
                @foreach($notes as $note)
                    <form method="POST" action="/modifNote/{{$note->id}}">
                        @csrf
                        <div class="form-group">
                            <label for="matiere">Matière</label>
                            <input type="text" class="form-control" id="matiere"  value="{{$note->matiere}}" name="matiere">
                        </div>
                        <div class="form-group">
                            <label for="note">Note Obtenue</label>
                            <input type="text" class="form-control" id="note"  value="{{$note->note}}" name="note">
                        </div>
                        <button type="submit" class="btn btn-dark offset-4 mt-2">Modifier La Note</button>


                        <a href="/supprimerNote/{{$note->id}}" class="btn btn-warning ">supprimer Note</a>
                      
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
