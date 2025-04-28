<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Histoire interactive</title>

    
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
               
            </style>
        @endif
    </head>
        <body>
            <header>

            </header>
            <main>
                <h1>Le sentier du silence</h1>
                <h3>Synopsis</h3>
                
                <p>Je suis venue ici pour fuir. Fuir le bruit, fuir les regards, fuir ce monde qui m'étouffe. <br><br>La forêt m’avait toujours accueillie, silencieuse et familière. C’est ce que je cherchais : le calme, les arbres, ce craquement rassurant sous mes pas. Mais aujourd’hui, quelque chose est différent.
                Au détour du sentier, j’ai vu un morceau de tissu accroché à une branche. Rouge. Déchiré.
                Quand je l’ai touché, mes doigts ont rencontré la rigidité du sang séché.
                Et sur le sol, une traînée irrégulière de gouttes sombres s’enfonçait dans les bois.
                Je voulais appeler de l’aide, mais il n'y avait aucun réseau ici.
                <br><br>Alors j'ai dû choisir :
                Suivre ces traces incertaines, espérant trouver quelqu’un en vie…
                Ou rebrousser chemin, même si chaque détour me ramenait un peu plus près de l'inconnu.
                <br><br>Quelque chose me suit.
                <br>Quelque chose m'observe.
                <br><br>Dans ce sentier où le silence semble peser comme une menace, mes choix pourraient être ma seule chance de survie.
                </p>
                <h4>Commencer l'histoire...</h4>
            </main>
    </body>
</html>
