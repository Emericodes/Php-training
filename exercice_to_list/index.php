<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To do list</title>
</head>
<body>
    <?php
    $tasks = [
    [
        "titre" => "Apprendre les bases de PHP", 
        "statut" => "fait", 
        "priorite" => 1
    ],
    [
        "titre" => "Apprendre les bases de Python", 
        "statut" => "en_cours", 
        "priorite" => 2
    ],
    [
        "titre" => "Finir l'exercice", 
        "statut" => "en_cours", 
        "priorite" => 1
    ],
    ];

    $tasksNotEnd = 0;

    foreach ($tasks as $task) {
        if  ($task['statut'] === 'en_cours'){
            $tasksNotEnd++;
        }
    }
    ?>
    
    <h1 aria-label = "title"> Ma liste de tâches</h1> 

    <p>Il vous reste <?= $tasksNotEnd ?> tâches à accomplir.</p>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <?php $classStatut = '';
            if ($task['statut'] === 'fait'){
                $classStatut = 'couleur-verte';
            } elseif ($task ['statut'] === 'en_cours'){
                $classStatut = 'couleur-orange';
            }
            
            ?>
      

        <li class="<?= $classStatut ?>">
            <?php if ($task['priorite'] === 1 && $task['statut'] !== 'fait'): ?>
                 🚨 
            <?php endif; ?>
            <?= $task['titre'] ?> (<?= $task['statut'] ?>)
        </li>
       
        <?php endforeach; ?>
    </ul>
</body>
</html>