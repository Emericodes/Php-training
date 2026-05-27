<?php 
$name = 'Le Journal de Emeric'; 

$articles = [
    [
      'title' => 'Top 3 des livres indispensables pour développeurs',
      'content' => 'Avant de commencer, il faut qu\'on discute du pourquoi tu devrais acheter un livre quand tu as les internets mondiales à ta disposition. La réponse simple. Il n\'y a aucune comparaison de qualité.',
    ],
    [
      'title' => '8 habitudes de développeurs qui font progresser',
      'content' => 'Avec le temps, j\'ai fini par comprendre que ce qui comptait le plus dans ce métier, c\'était les habitudes. Toutes ces petites décisions, ces façons de faire et de voir les choses. Ça a l\'air de rien au jour le jour, mais mis bout à bout, c\'est une locomotive pour ta progression. OK vas-y on en parle.',
    ],
    [
      'title' => 'Faut-il être passionné pour être développeur ?',
      'content' => 'La passion chez les développeurs est un concept qui met une pression folle à beaucoup de gens. Tu en entends parler en permanence. Tu le vois dans toutes les offres d\'emplois, comme une obligation absolue.',
    ],
    [
      'title' => 'Compétences clefs pour développeurs',
      'content' => 'Résoudre des problèmes c\'est ton activité principale et donc ta principale compétence clef. Si tu deviens bon là-dedans, tu vas commencer à léviter dans l\'open space et rien ne pourra t\'arrêter.',
    ],
    [
      'title' => 'Conseils pour développeur junior',
      'content' => 'Je reçois énormément de mails de développeur(euse)s juniors concernant ce sujet. Du coup, pourquoi ne pas répondre à tous le monde en même temps ? Assieds-toi bien confort j\'ai plein de trucs à te raconter.',
    ],
    [
      'title' => 'Comment bien donner et recevoir une code review',
      'content' => 'Il y a bien longtemps, dans une galaxie lointaine, très lointaine je bossais dans une équipe d\'une dizaine de développeurs. Lorsque du nouveau code devait être intégré dans le système, il passait d\'abord par la grande instance de la code review.',
    ],
    [
      'title' => 'Design patterns : l\'indispensable à savoir',
      'content' => 'Les design patterns sont inévitables pour tous les développeurs. Si tu ne les connais pas, sache que tu les utilises déjà sans le savoir. Il y a des choses indispensables à savoir pour ne pas être complètement perdu au milieu du champ des design patterns. Ça te servira toute ta carrière, peu importe ton poste.',
    ],
    [
      'title' => '20 outils webs indispensables pour développeurs',
      'content' => 'Avoir les bons outils en tant que développeur va te faire gagner un temps fou sur tout. Que ce soit pour produire du code, vérifier de la donnée ou valider des commandes et des configurations, ça devient vite indispensable. Je te dévoile mon dossier favoris, j\'ai mis plusieurs années à construire cette liste !',
    ],
  ];
?>


<!DOCTYPE html>
<html lang="fr">

<head>
   
    <title><?= $name; ?>  | Le site de news</title>
</head>


<body> 
    <header>
        <h1><?= $name; ?></h1>
    </header>


    <section class="cards-container">
       

       
       <section class="cards-container">
              <?php foreach ($articles as $article) { ?>
                <article class="card">
                  <h2><?= $article['title'] ?></h2>
                      <p><?= $article['content'] ?></p>
                      <a href="#">Lire la suite...</a>
                </article>
              <?php } ?>

</section>
   </section>

     
    </section>


    <footer>
        <?php 
        echo "&copy; . date('Y') . - " . $name; 
        ?>
    </footer>
</body> 


</html>
