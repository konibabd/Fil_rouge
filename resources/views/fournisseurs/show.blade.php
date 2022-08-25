<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mt-4">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Email</th>
                    <th scope="col">Téléphone</th>
                </tr>
            </thead>
            <tbody>
            <th scope="row">#</th>
                <td>{{ $fournisseurs->nom }}</td>
                <td>{{ $fournisseurs->adresse }}</td>
                <td>{{ $fournisseurs->email }}</td>
                <td>{{ $fournisseurs->telephone }}</td>
            </tbody>           
        </table>
    </div>
</div>