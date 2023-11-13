@include('nav')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-dark text-white">AJOUT Note</h5>
            <div class="card-body">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="nomEleve">Matière</label>
                        <input type="text" class="form-control" id="nomEleve" placeholder="Enter une matière"
                            name="matiere">
                    </div>
                    <div class="form-group">
                        <label for="nomEleve">Note Obtenue</label>
                        <input type="text" class="form-control" id="nomEleve" placeholder="Enter La Note Obtenue"
                            name="note">
                    </div>
                    <div class="form-group">
                        <label for="nomEleve">Nom </label>
                        <input type="text" class="form-control" id="nomEleve" name="nomEleve"
                            placeholder="Entrez le nom de l'élève" onkeyup="filtrerEleves(this.value)">
                    </div>

                    <button type="submit" class="btn btn-dark offset-4 mt-2">Ajouter La Note</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function filtrerEleves(nom) {
        var table, tr, td, i, txtValue;
        table = document.getElementById("tableEleves");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(nom.toUpperCase()) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
