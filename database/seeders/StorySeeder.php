<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Story;
use App\Models\Chapter;
use App\Models\Choice;


class StorySeeder extends Seeder
{
    public function run()
    {
        $story1 = Story::create([
            'title' => 'À l\'orée de la forêt',
            'description' => "Dans une forêt profonde, une trace sanglante t’attire. Tu devras choisir entre suivre l'inconnu ou rester en sécurité. Trois fins possibles...",
        ]);

        // Créer le chapitre 1
        $chapter1 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 1,
            'title' => 'Le début',
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
        $chapter21 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 21,
            'title' => "L'exploration",
            'content' => "Je repousse quelques branches et me faufile dans les buissons, suivant les petites gouttes sombres au sol. Elles ne forment pas une ligne parfaite, mais elles tracent un chemin de douleur.
                Au bout de quelques mètres, je remarque des traces de glissement dans la boue. Quelqu’un a chuté, ou a été traîné. Mon cœur s’accélère. Je retiens ma respiration.
                J’avance encore. Un bruit sec m’arrête net. Une branche cassée… pas sous mon pied.
                Quelqu’un est là.
                Je reste immobile. Les feuilles frémissent. Et puis… plus rien.",
            ]);

        // Créer le chapitre 22
        $chapter22 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 22,
            'title' => "L'appelle à l'aide",
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
        $chapter211 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 211,
            'title' => 'Le courage',
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
        $chapter212 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 212,
            'title' => "La curiosité",
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
        $chapter2111 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 2111,
            'title' => "Le vieil homme",
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
        $chapter2112 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 2112,
            'title' => 'Le sauvetage',
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
        $chapter222 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 222,
            'title' => 'La découverte',
            'content' => "Je fais volte-face, les pieds un peu lourds, le cœur partagé entre raison et peur.
                    Je remonte lentement le sentier par lequel je suis venue. Les arbres m’encerclent toujours, silencieux. Je jette un œil à mon téléphone toutes les deux minutes. Toujours rien.
                    Puis soudain, à une intersection que je ne reconnais pas, je vois quelque chose.
                    Un objet. Par terre. Une gourde en métal, cabossée. Et un peu plus loin… une chaussure de marche, recouverte de terre et partiellement ensanglantée.
                    Je m'arrête net.
                    Cette personne... elle est passée par là. Et elle n’allait pas dans la même direction que les gouttes de sang.",
                ]);

        // Créer le chapitre 2221
        $chapter2221 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 2221,
            'title' => 'Je ne suis pas seule',
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
        $chapter2222 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 2222,
            'title' => 'Le retour prudent',
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
        $chapter22221 = Chapter::create([
            'story_id' => $story1->id,
            'id' => 22221,
            'title' => "L'histoire sans fin",
            'content' => "Je serre les poings, ferme les yeux une seconde pour me donner du courage. Puis j'écrase la peur et je cours.
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

        // Créer des fins
        $chapter21111 = Chapter::create([
            'story_id'=>$story1->id,
            'id'=> 21111,
            'title' => 'Fin : La patience sauve les deux',
            'content' => "Tu n’as pas agi seule — et tu as bien fait. L’arrivée d’un autre randonneur a facilité la prise en charge. La femme est sauvée, et tu n'es pas restée une cible isolée.",
        ]);

        $chapter21121 = Chapter::create([
            'story_id'=>$story1->id,
            'id'=> 21121,
            'title' => 'Fin : Le Courage sauve une vie',
            'content' => "u as sauvé la femme. Grâce à ton action rapide, elle a été prise en charge à temps.
             Mais l’agresseur, lui, court toujours dans la forêt...",
        ]);

        $chapter222211 = Chapter::create([
            'story_id'=>$story1->id,
            'id'=> 13,
            'title' => 'Fin : Témoin prudent',
            'content' => 'Tu as choisi la prudence : tu as survécu, tu as alerté les secours à temps.
             Mais quelque chose en toi murmure que tu as peut-être laissé passer une chance… de sauver une vie.',
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
            'chapter_id' => $chapter21->id,
            'text' => "Je crie : “Il y a quelqu’un ?!”",
            'next_chapter_id' => $chapter211->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter21->id,
            'text' => 'Je me cache immédiatement derrière un arbre pour observer discrètement.',
            'next_chapter_id' => $chapter212->id, 
        ]);

        // Créer les choix pour le chapitre 22
        Choice::create([
            'chapter_id' => $chapter22->id,
            'text' => 'Je décide de suivre les gouttes, prudemment. Il y a peut-être quelqu’un qui a besoin d’aide ',
            'next_chapter_id' => $chapter21->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter22->id,
            'text' => 'Je décide de revenir sur mes pas, en espérant capter un signal plus haut dans le sentier.',
            'next_chapter_id' => $chapter222->id, 
        ]);

        // Créer les choix pour le chapitre 211
        Choice::create([
            'chapter_id' => $chapter211->id,
            'text' => "Je tente de porter la femme jusqu'au sentier pour chercher du réseau et appeler de l'aide.",
            'next_chapter_id' => $chapter2111->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter211->id,
            'text' => 'Je décide de rester sur place, de la surveiller, en espérant que quelqu’un d’autre viendra.',
            'next_chapter_id' => $chapter2112->id, 
        ]);

        // Créer les choix pour le chapitre 212
        Choice::create([
            'chapter_id' => $chapter212->id,
            'text' => "J’attends encore quelques minutes pour être sûre que l’homme est bien parti, puis Je tente de porter la femme jusqu'au sentier pour chercher du réseau et appeler de l'aide.",
            'next_chapter_id' => $chapter2112->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter212->id,
            'text' => 'Je décide de fuir immédiatement vers la clairière et retrouver le chemin du parking.',
            'next_chapter_id' => $chapter22221->id, 
        ]);

        // Créer les choix pour le chapitre 2111 -> fin 
        Choice::create([
            'chapter_id' => $chapter2111->id,
            'text' => "La fin de l'histoire...",
            'next_chapter_id' => $chapter21111->id,
        ]);

        // Créer les choix pour le chapitre 2112 -> fin
        Choice::create([
            'chapter_id' => $chapter2112->id,
            'text' => "La fin de l'histoire...",
            'next_chapter_id' => $chapter21121->id,
        ]);

        // Créer les choix pour le chapitre 2221
        Choice::create([
            'chapter_id' => $chapter2221->id,
            'text' => 'Je me cache immédiatement derrière un arbre pour observer discrètement.',
            'next_chapter_id' => $chapter212->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter2221->id,
            'text' => 'Je crie : “Il y a quelqu’un ?!”',
            'next_chapter_id' => $chapter211->id, 
        ]);

        // Créer les choix pour le chapitre 2222
        Choice::create([
            'chapter_id' => $chapter2222->id,
            'text' => 'Je décide de fuir immédiatement vers la clairière et retrouver le chemin du parking.',
            'next_chapter_id' => $chapter22221->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter2222->id,
            'text' => 'Je fais demi-tour et retourne voir ce qu’il se passe. Quelqu’un est peut-être encore en vie.',
            'next_chapter_id' => $chapter2221->id, 
        ]);

        //fin
        Choice::create([
            'chapter_id' => $chapter22221->id,
            'text' => "La fin de l'histoire...",
            'next_chapter_id' => $chapter222211->id,
        ]);




        //Histoire2
        $story2 = Story::create([
            'title' => 'La Clé Enchantée',
            'description' => "Une clé ancienne te conduit vers un monde magique… ou vers ta perte. Deux chemins, trois fins. Quelle porte ouvriras-tu ?",
        ]);

        // Créer le chapitre 2
        $chapter2 = Chapter::create([
            'story_id' => $story2->id,
            'id' => 2,
            'title' => 'Le début',
            'content' => "Une pluie battante s’abattait sur les vitres lorsque tu montas au grenier de ta grand-mère. Une odeur de poussière, de bois ancien, et de souvenirs t’envahit. En fouillant dans un vieux coffre, tu découvres une petite boîte tapissée de velours. À l’intérieur : une clé dorée, ornée de symboles étranges. Elle semble… vibrer doucement. Quelque chose t’attire vers elle.",
        ]);

         // Créer le chapitre 31
         $chapter31 = Chapter::create([
            'story_id' => $story2->id,
            'id' => 31,
            'title' => 'La malle',
            'content' => "La clé s’insère parfaitement dans la serrure de la malle. Un cliquetis résonne et, lentement, le couvercle s’ouvre. Une lumière bleutée jaillit, t’aveuglant un instant. Au fond de la malle, un portail iridescent flotte dans l’air, semblant murmurer ton prénom."]);

         // Créer le chapitre 41
         $chapter41 = Chapter::create([
            'story_id' => $story2->id,
            'id' => 41,
            'title' => 'Le jardin',
            'content' => "Le jardin, à l’abandon depuis des années, dégage une atmosphère étrange. La clé se met à chauffer dans ta poche. Près du vieux puits, elle brille plus fort. Tu t’approches, et un grondement sourd s’élève des profondeurs…"]);

            $chapter311 = Chapter::create([
                'story_id'=>$story2->id,
                'id'=> 311,
                'title' => 'Fin : L’Élu.e du Royaume Caché',
                'content' => 'Tu franchis le portail et te retrouves dans un royaume ancien peuplé d’êtres magiques. Une voix t’accueille : "Tu es l’élu(e), porteur de la Clé du Passage." Tu choisis de rester, prêt(e) à vivre une nouvelle vie.'
            ]);
    
            $chapter321 = Chapter::create([
                'story_id'=>$story2->id,
                'id'=> 321,
                'title' => 'Le Secret Resté Clos',
                'content' => 'Tu refermes la malle. La lumière disparaît, les murmures cessent. Tu caches la clé. Certaines portes ne devraient jamais être ouvertes.']);
    
            $chapter411 = Chapter::create([
                'story_id'=>$story2->id,
                'id'=> 411,
                'title' => 'Le Gardien du Puits',
                'content' => 'La clé tombe dans le puits et une ombre en émerge. Un ancien gardien libéré de sa prison. Il te confie une mission : protéger l’équilibre du monde magique. Tu acceptes.']);
    
            $chapter421 = Chapter::create([
                'story_id'=>$story2->id,
                'id'=> 421,
                'title' => 'Fuir l’Inconnu',
                'content' => 'Tu cours, le cœur battant. En te retournant, tu ne vois plus rien d’anormal. Peut-être que c’était ton imagination... mais tu ne retourneras jamais près du puits.']);
    
        //choix histoire2 chap2
        Choice::create([
            'chapter_id' => $chapter2->id,
            'text' => 'Essayer la clé sur une vieille malle',
            'next_chapter_id' =>$chapter31->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter2->id,
            'text' => 'L’emporter avec toi et explorer le jardin',
            'next_chapter_id' =>$chapter41->id,
        ]);

        //choix histoire2 chap31
        Choice::create([
            'chapter_id' => $chapter31->id,
            'text' => 'Entrer dans le portail',
            'next_chapter_id' =>$chapter311->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter31->id,
            'text' => 'Refermer la malle',
            'next_chapter_id' =>$chapter321->id,
        ]);

        //choix histoire2 chap41
        Choice::create([
            'chapter_id' => $chapter41->id,
            'text' => 'Jeter la clé dans le puit',
            'next_chapter_id' =>$chapter411->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter2->id,
            'text' => ' Fuir le jardin ',
            'next_chapter_id' =>$chapter421->id,
        ]);

        
            

        //Histoire3
        $story3 = Story::create([
            'title' => 'Mission sur Mars',
            'description' => "Une base en péril, une décision cruciale, et la survie en jeu. Ton choix déterminera le destin de la mission martienne."]);

        // Créer le chapitre 3
        $chapter3 = Chapter::create([
            'story_id' => $story3->id,
            'id' => 3,
            'title' => 'Alerte sur la Base',
            'content' => "L’alarme retentit, te tirant brutalement de ton sommeil. Sur l’écran principal : Communication interplanétaire : PERDUE. Tu es seul dans le module principal. L’extérieur est balayé par une tempête de poussière. Deux options s’offrent à toi..."]);

         // Créer le chapitre 51
         $chapter51 = Chapter::create([
            'story_id' => $story3->id,
            'id' => 51,
            'title' => 'La Tempête',
            'content' => "Tu enfiles ta combinaison et sors affronter les vents martiens. L’antenne est couverte de poussière rouge.
            "]);

         // Créer le chapitre 61
         $chapter61 = Chapter::create([
            'story_id' => $story3->id,
            'id' => 61,
            'title' => 'Le Générateur',
            'content' => "Tu descends dans le noir. Le générateur principal clignote : surchauffe imminente. Si tu ne fais rien, la base entière pourrait exploser."]);

            $chapter511 = Chapter::create([
                'story_id'=>$story3->id,
                'id'=> 511,
                'title' => 'Héros dans la Tempête',
                'content' => 'Tu réussis à rétablir la communication, mais une rafale t’arrache de la plateforme. Tu es projeté, inconscient... Ton sacrifice sauve la mission.' ]);
    
            $chapter521 = Chapter::create([
                'story_id'=>$story3->id,
                'id'=> 521,
                'title' => 'Le Survivant Silencieux',
                'content' => 'Tu rentres sain et sauf. Les secours te retrouvent une semaine plus tard. Tu es vivant, mais seul, marqué par la peur.']);
    
            $chapter611 = Chapter::create([
                'story_id'=>$story3->id,
                'id'=> 611,
                'title' => 'Le Dernier Acte de Courage',
                'content' => 'Tu arrêtes le générateur de justesse. L’explosion est évitée. Tu t’évanouis, mais te réveilles un héros.']);
    
            $chapter621 = Chapter::create([
                'story_id'=>$story3->id,
                'id'=> 621,
                'title' => 'L’Éveil de l’Inconnu',
                'content' => 'L’IA relance tout avec succès… puis déclenche un message d’urgence : "présence inconnue détectée dans le module B."']);
        
        //choix histoire3 chap3
        Choice::create([
            'chapter_id' => $chapter3->id,
            'text' => ' Grimper sur le toit pour vérifier l’antenne.',
            'next_chapter_id' =>$chapter51->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter3->id,
            'text' => 'Descendre dans la salle de maintenance pour inspecter les systèmes.',
            'next_chapter_id' =>$chapter61->id,
        ]);

        //choix histoire2 chap51
        Choice::create([
            'chapter_id' => $chapter51->id,
            'text' => 'Tenter une réparation rapide malgré le vent.',
            'next_chapter_id' =>$chapter511->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter51->id,
            'text' => 'Abandonner et revenir à l’intérieur.',
            'next_chapter_id' =>$chapter521->id,
        ]);

        //choix histoire2 chap61
        Choice::create([
            'chapter_id' => $chapter61->id,
            'text' => 'Forcer l’arrêt manuel. ',
            'next_chapter_id' =>$chapter611->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter61->id,
            'text' => 'Laisser l’intelligence artificielle tenter un redémarrage automatique',
            'next_chapter_id' =>$chapter621->id,
        ]);

        }
}
