@include('nav')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center mt-4">
            <h4 class="alert alert-info">Liste Des Notes</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                       
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Note</th>
                        <th>Matiere</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach($note as $n)
                    <tr>
                        @foreach($eleve as $e)
                            @if($e->id == $note->eleve_id)
                                <td>{{$e->nomEleve}}</td>
                                <td>{{$e->prenomEleve}}</td>
                            @endif
                        @endforeach
                        <td>{{$n->note}}</td>
                        <td>{{$n->matiere}}</td>
                    </tr>
                @endforeach 
            </table>
        </div>
    </div>
</div>
