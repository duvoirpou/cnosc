<form action="{{ route('search') }}" method="GET">
    <input class="form-control" name="q" type="text"
        placeholder="Que cherchez-vous ?" required>
    <div class="mt-5" style="margin-top: 10px">
        <button type="submit" class="btn btn-primary btn-sm">Rechercher</button>
        <button type="reset" class="btn btn-danger btn-sm">Annuler</button>
    </div>
</form>
