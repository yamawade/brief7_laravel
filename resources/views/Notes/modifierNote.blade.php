@include('nav')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">MODIFICATION NOTE</h5>
            <div class="card-body">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="matiere">Matière</label>
                        <input type="text" class="form-control" id="matiere"  placeholder="Enter une matière" name="matiere" value="{{$note->matiere}}">
                    </div>
                    <div class="form-group">
                        <label for="note">Note Obtenue</label>
                        <input type="text" class="form-control" id="note"  placeholder="Enter La Note Obtenue" name="note" value="{{$note->note}}">
                    </div>
                    <button type="submit" class="btn btn-dark offset-4 mt-2">Modifier Note</button>
                </form>
            </div>
        </div>
    </div>
</div>