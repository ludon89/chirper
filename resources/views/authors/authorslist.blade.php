<h1>Affichage de tous les utilisateurs</h1>
<hr>

<!-- Boucle pour afficher tous les utilisateurs -->
<ul>
    @foreach ($authors as $author)
        <li>{{ $author->name }}</li>
    @endforeach
</ul>
