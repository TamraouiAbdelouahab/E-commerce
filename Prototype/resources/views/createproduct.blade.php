<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un Produit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('produit.store')}}" method="POST">
                @csrf <!-- Laravel CSRF token -->
                <div class="form-group">
                    <label for="nom">Nom du Produit :</label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom du produit" required>
                </div>
                <div class="form-group">
                    <label for="prix">Prix :</label>
                    <input type="number" name="prix" id="prix" class="form-control" placeholder="Entrez le prix" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="stock">Stock :</label>
                    <input type="number" name="stock" id="stock" class="form-control" placeholder="Entrez la quantité en stock" required>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Entrez une description du produit"></textarea>
                </div>
                <div class="form-group">
                    <div style="display: flex; justify-content: flex-end">
                        <x-adminlte-button class="btn-flat" type="submit" label="Ajouter" theme="success" icon="fas fa-lg fa-save"/>
                    </div>
                </div>
                <button type="submit">ajouter</button>
            </form>
        </div>
