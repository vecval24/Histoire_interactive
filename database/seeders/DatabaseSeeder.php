<?php

use Illuminate\Database\Seeder;
use App\Models\Chapter;
use App\Models\Choice;
use App\Models\End;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Créer le chapitre 1
        $chapter1 = Chapter::create([
            'title' => 'Chapitre 1 : Le début',
            'content' => "Je suis venue ici pour fuir. Les gens, le bruit, mon téléphone, mes pensées. La forêt a toujours eu cet effet calmant sur moi. Les arbres épais, le craquement des feuilles sous mes pieds, ce silence vibrant qu'on ne trouve qu'en pleine nature. Il n'y avait que moi, mon sac, ma bouteille d'eau... et l’odeur de mousse fraîche.
                J’étais à mi-parcours du sentier jaune quand je l’ai vu.
                Un bout de tissu.
                Rouge. Déchiré. Presque... poisseux.
                Je me suis figée.
                Je me suis penchée. J’ai tendu la main. Mes doigts se sont refermés sur le tissu.
                Du sang. Du vrai. Et, juste à côté, une trace brunâtre, déjà un peu sèche.
                Puis une autre. Et encore une. De petites gouttes qui formaient une traînée irrégulière, à peine visible, s’enfonçant plus profondément dans les bois.
                ",
        ]);

        // Créer le chapitre 21
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "Je repousse quelques branches et me faufile dans les buissons, suivant les petites gouttes sombres au sol. Elles ne forment pas une ligne parfaite, mais elles tracent un chemin de douleur.
                Au bout de quelques mètres, je remarque des traces de glissement dans la boue. Quelqu’un a chuté, ou a été traîné. Mon cœur s’accélère. Je retiens ma respiration.
                J’avance encore. Un bruit sec m’arrête net. Une branche cassée… pas sous mon pied.
                Quelqu’un est là.
                Je reste immobile. Les feuilles frémissent. Et puis… plus rien.",
            ]);

        // Créer le chapitre 22
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "Je recule de quelques pas, mon cœur battant un peu trop vite. J’attrape mon téléphone dans la poche de ma veste. Mes doigts tremblent légèrement. Je déverrouille l’écran. Il est 14h23. J’appuie sur l’icône de téléphone et compose le 117.
                Une seconde. Deux. Rien. Pas de tonalité.
                Je regarde l’écran. Aucun service. Pas une barre. Même pas de faux espoir en 2G.
                Je lève les yeux vers les cimes des arbres. Trop hautes, trop denses. Le sentier est loin des routes, des villages. Je le savais. C’était précisément pour ça que j’avais choisi ce coin-là.
                Je regarde à nouveau le tissu sanglant dans ma main. Il est rigide. Sec par endroits. Mais il n’est pas là depuis longtemps.

                J’inspire. J’hésite.

                Je pourrais continuer ma balade. Faire comme si je n’avais rien vu. Mais si quelqu’un est blessé là-bas ?
                Et si je m’éloigne davantage, je pourrais perdre encore plus le signal. Peut-être que rebrousser chemin serait plus intelligent. Peut-être même que le réseau reviendrait.

                Je range lentement mon téléphone. Et je prends une décision.",
            ]);

        // Créer le chapitre 211
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "La gorge serrée, j’inspire profondément. Puis je crie, la voix plus forte que je ne l’aurais cru : Il y a quelqu’un ?!
                Le silence me répond d’abord. Juste le vent dans les feuilles. Mon propre souffle court.
                Puis, un bruit.
                Un mouvement brusque, derrière moi, à droite.
                Quelque chose ou quelqu’un s’éloigne rapidement à travers les buissons, faisant craquer les branches avec précipitation. Pas un animal. Un humain.
                Je me retourne vivement, mais je ne vois qu'une masse sombre disparaître entre les arbres, trop loin pour être poursuivie.
                Je reste immobile, haletante.
                Le calme revient, presque oppressant. Je n’ai aucune idée de qui c'était — ou de ce qu’il voulait. Mais il a fui. Peut-être grâce à mon cri. Peut-être qu’il avait de mauvaises intentions.
                Je me tourne vers la femme au sol.
                Elle est toujours là, pâle, fragile, vulnérable.
                Je m’agenouille près d’elle, cette fois sans crainte immédiate d'être attaquée dans le dos.
                Je pose à nouveau deux doigts sur son cou. Le pouls est faible... mais il existe.
                Ses lèvres bougent à peine. Un murmure s'échappe, presque inaudible.
                ...aide... pas seul... attention...
                Je tends l'oreille. Mais ses yeux se ferment à nouveau. Elle retombe dans l'inconscience.
                Je dois agir vite.",
            ]);

        // Créer le chapitre 212
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "Je retiens mon souffle et me plaque contre un tronc, priant pour n’avoir pas été vue.
                Le bruit s'intensifie.
                Des pas lourds écrasent les feuilles mortes. Une silhouette émerge de l’ombre : un homme, grand, large, vêtu d’une parka sombre, la capuche rabattue.
                Dans sa main : un grand couteau de chasse, taché de brun.
                Mon cœur se serre.
                Il s'avance vers la femme étendue. Il la pousse du bout du pied. Pas de réaction.
                Puis, méthodiquement, il commence à fouiller dans ses poches.
                Je le vois sortir un téléphone portable, une carte d'identité, et un petit carnet. Il les inspecte rapidement, avant de les glisser dans sa propre poche.
                Il jette un dernier regard autour de lui.
                Mon sang se glace. Pendant une seconde, son regard passe presque sur moi.
                Mais il ne semble pas me repérer. Finalement, il rebrousse chemin, disparaissant lentement dans les arbres, du côté opposé au mien.
                Le silence retombe.
                La femme ne bouge toujours pas.",
            ]);

        // Créer le chapitre 2111
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "Je décide de rester.
                    La porter serait risqué : je n’ai aucune idée de la distance, et si l’homme rôde encore, il me verrait.
                    Je m’assois près de la femme, gardant les yeux et les oreilles aux aguets.
                    Chaque bruissement dans les feuilles me fait sursauter.
                    Je vérifie son pouls de temps en temps : toujours là, fragile, mais constant.
                    Le temps semble s'étirer à l'infini.
                    Le vent fraîchit.
                    Soudain, un mouvement sur ma droite.
                    Un autre randonneur ? Un danger ?
                    Je me lève d’un bond, prête à fuir si nécessaire.
                    Mais c’est une silhouette familière. Un vieil homme en veste orange fluo, un marcheur avec un grand sac à dos.
                    Il s’arrête net en me voyant.
                    Vous allez bien ?! Qu'est-ce qu'il s’est passé ? crie-t-il.
                    Je lui explique brièvement.
                    Il sort son téléphone : lui aussi capte une barre de réseau plus haut dans le sentier. Ensemble, nous appelons les secours.",
                 ]);

        // Créer le chapitre 2112
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "Je range mon téléphone dans ma poche et glisse mes bras sous ses épaules.
                    Elle est légère. Trop légère.
                    Je la hisse avec difficulté. Son corps est mou, inerte, difficile à porter seule.
                    Mes jambes ploient sous son poids, mais je commence à avancer.
                    Chaque pas est un effort.
                    Le sentier est encore loin. La forêt semble vouloir m’engloutir.
                    Derrière moi, j’entends un autre craquement. Pas loin.
                    Je n’ose pas me retourner.
                    Je continue, poussée par l’adrénaline pure.
                    Je débouche enfin sur un chemin un peu plus dégagé, reconnaissable — peut-être celui du retour.
                    Je m’arrête une seconde pour reprendre mon souffle.
                    Et là, miracle : une barre de réseau sur mon téléphone.
                    Tremblante, je compose le 117.
                    Police secours, quelle est votre situation ?
                    Je leur décris, entre deux halètements, ma position approximative, la femme blessée, le danger.
                    Ils m'ordonnent de rester immobile et d'attendre les secours, qui arrivent en urgence.",
             ]);

        // Créer le chapitre 222
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "Je fais volte-face, les pieds un peu lourds, le cœur partagé entre raison et peur.
                    Je remonte lentement le sentier par lequel je suis venue. Les arbres m’encerclent toujours, silencieux. Je jette un œil à mon téléphone toutes les deux minutes. Toujours rien.
                    Puis soudain, à une intersection que je ne reconnais pas, je vois quelque chose.
                    Un objet. Par terre. Une gourde en métal, cabossée. Et un peu plus loin… une chaussure de marche, recouverte de terre et partiellement ensanglantée.
                    Je m'arrête net.
                    Cette personne... elle est passée par là. Et elle n’allait pas dans la même direction que les gouttes de sang.",
                ]);

        // Créer le chapitre 2221
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "Je m’approche de la gourde, la ramasse avec précaution. Elle est encore tiède. Quelqu’un n’est pas loin. Je scrute les alentours : un petit sentier s’enfonce entre les arbres, presque invisible.
                    Je décide de le suivre.
                    À chaque pas, je découvre des indices épars : un foulard déchiré accroché à une ronce, une trace de main sur un tronc, une chaussette sale... Chaque signe semble me pousser un peu plus loin, un peu plus profondément dans cette forêt étrangère.
                    Au bout d’une centaine de mètres, je débouche sur une petite clairière.
                    Et là, je la vois.
                    Une femme, étendue sur le sol, immobile.
                    Son pantalon de randonnée est déchiré au niveau de la jambe. Une grande tâche sombre s’étend autour d’elle. Je m'approche lentement, le cœur tambourinant.
                    Soudain, un bruit derrière moi.
                    Une branche craque.
                    Quelqu’un d’autre est ici.",
                ]);

        // Créer le chapitre 2222
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "Je détourne les yeux de la gourde et de la chaussure. Je ne suis pas une héroïne. Pas aujourd'hui.
                Je reprends ma marche, cette fois d’un pas rapide, presque paniqué.
                Le sentier semble interminable. Chaque détour ressemble au précédent. Le vent bruisse dans les arbres comme un murmure de reproches. Mon téléphone reste désespérément muet. Pas de réseau. Toujours pas.
                Après ce qui me semble être une éternité, je vois enfin la pancarte en bois qui marque l’entrée du sentier.
                Presque arrivée.
                Mais avant que je n’atteigne la clairière, un son me fige.
                Un hurlement. Long. Humain. Désespéré.
                Il vient de la direction que je viens de quitter.",
            ]);

        // Créer le chapitre 22221
        $chapter2 = Chapter::create([
            'title' => 'Chapitre 2 : Exploration',
            'content' => "VJe serre les poings, ferme les yeux une seconde pour me donner du courage. Puis j'écrase la peur et je cours.
                    Pas question de jouer à la sauveteuse solitaire. Pas ici. Pas seule.
                    Chaque foulée fait grincer les branches sous mes pieds. Les arbres défilent. Les pierres roulent sous mes chaussures. Mon souffle devient court, irrégulier.
                    Mon sac cogne contre mes hanches mais je ne ralentis pas.
                    Enfin, au détour d’un chemin creux, je l’aperçois : Ma voiture, garée sur le petit parking poussiéreux du départ de randonnée.
                    Je me précipite jusqu’à la portière, la main tremblante. Je grimpe, claque la porte, tourne la clé. Le moteur tousse, puis démarre.
                    Mon téléphone vibre. Une barre. Deux. Réseau !
                    Sans réfléchir, j'appelle la police.
                    Quelques minutes plus tard, je suis en ligne avec un opérateur. Je leur explique ce que j'ai vu — ou plutôt, ce que je n'ai pas vu : Le tissu, les traces de sang, les objets abandonnés. Le hurlement.
                    Ils m'écoutent attentivement, notent ma position, et m’ordonnent de rester sur place, les secours étant déjà en route.
                    Je m’adosse à mon siège, les mains crispées sur le volant. Je regarde par le rétroviseur. La forêt est toujours là, silencieuse, immobile.
                    Et quelque part, là-dedans, une histoire continue sans moi.",
                 ]);

        // Créer les choix pour le chapitre 1
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je décide de suivre les gouttes, prudemment. Il y a peut-être quelqu’un qui a besoin d’aide.',
            'next_chapter_id' => $chapter21->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je sors mon téléphone pour appeler la police',
            'next_chapter_id' => $chapter22->id, 
        ]);

        // Créer les choix pour le chapitre 21
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => "Je crie : “Il y a quelqu’un ?!”",
            'next_chapter_id' => $chapter21->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je me cache immédiatement derrière un arbre pour observer discrètement.',
            'next_chapter_id' => $chapter22->id, 
        ]);

        // Créer les choix pour le chapitre 22
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je décide de suivre les gouttes, prudemment. Il y a peut-être quelqu’un qui a besoin d’aide ',
            'next_chapter_id' => $chapter21->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je décide de revenir sur mes pas, en espérant capter un signal plus haut dans le sentier.',
            'next_chapter_id' => $chapter22->id, 
        ]);

        // Créer les choix pour le chapitre 211
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => "Je tente de porter la femme jusqu'au sentier pour chercher du réseau et appeler de l'aide.",
            'next_chapter_id' => $chapter21->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je décide de rester sur place, de la surveiller, en espérant que quelqu’un d’autre viendra.',
            'next_chapter_id' => $chapter22->id, 
        ]);

        // Créer les choix pour le chapitre 212
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => "J’attends encore quelques minutes pour être sûre que l’homme est bien parti, puis Je tente de porter la femme jusqu'au sentier pour chercher du réseau et appeler de l'aide.",
            'next_chapter_id' => $chapter21->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je décide de fuir immédiatement vers la clairière et retrouver le chemin du parking.',
            'next_chapter_id' => $chapter22->id, 
        ]);

        // Créer les choix pour le chapitre 2111 -> fin 
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => "La fin de l'histoire...",
            'next_chapter_id' => $chapter21->id,
        ]);

        // Créer les choix pour le chapitre 2112 -> fin
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => "La fin de l'histoire...",
            'next_chapter_id' => $chapter21->id,
        ]);

        // Créer les choix pour le chapitre 2221
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je me cache immédiatement derrière un arbre pour observer discrètement.',
            'next_chapter_id' => $chapter21->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je crie : “Il y a quelqu’un ?!”',
            'next_chapter_id' => $chapter22->id, 
        ]);

        // Créer les choix pour le chapitre 2222
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je décide de fuir immédiatement vers la clairière et retrouver le chemin du parking.',
            'next_chapter_id' => $chapter21->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Je fais demi-tour et retourne voir ce qu’il se passe. Quelqu’un est peut-être encore en vie.',
            'next_chapter_id' => $chapter22->id, 
        ]);

        // Créer les choix pour le chapitre 22221 -> fin 
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => "La fin de l'histoire...",
            'next_chapter_id' => $chapter21->id,
        ]);


        // Créer des fins
        End::create([
            'title' => 'Fin : La patience sauve les deux',
            'content' => "Tu n’as pas agi seule — et tu as bien fait. L’arrivée d’un autre randonneur a facilité la prise en charge. La femme est sauvée, et tu n'es pas restée une cible isolée.",
        ]);

        End::create([
            'title' => 'Fin : Le Courage sauve une vie',
            'content' => "u as sauvé la femme. Grâce à ton action rapide, elle a été prise en charge à temps.
             Mais l’agresseur, lui, court toujours dans la forêt...",
        ]);

        End::create([
            'title' => 'Fin : Témoin prudent',
            'content' => 'Tu as choisi la prudence : tu as survécu, tu as alerté les secours à temps.
             Mais quelque chose en toi murmure que tu as peut-être laissé passer une chance… de sauver une vie.',
        ]);
    }
}
