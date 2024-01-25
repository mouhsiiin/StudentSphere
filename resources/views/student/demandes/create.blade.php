<!-- create.blade.php -->

<form action="{{ route('demandes.store') }}" method="post">
    @csrf
    <label for="contenu">Contenu:</label>
    <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
<br>
    <label for="type_demande">Type de Demande:</label>
    <select name="type_demande" id="type_demande">
        <option value="rendez-vous">Rendez-vous</option>
        <option value="Justifier une absence">Justifier une absence</option>
        <option value="autre">Autre</option>
    </select>
<br>
    <button type="submit">Créer Demande</button>
</form>
