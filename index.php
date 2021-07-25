<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Video.php';
        require_once 'Aluno.php';
        require_once 'Visualizacao.php';

        //Alunos
        $a[0] = new Aluno('Carlos', 19, 'M', 'cacá');
        $a[1] = new Aluno('Fátima', 21, 'F', 'fafa123');
        $a[2] = new Aluno('Vinnícius', 35, 'M', 'Vini7');

        //Vídeos
        $v[0] = new Video('Curso PHP7 POO');
        $v[1] = new Video('Aulão HTML5');
        $v[3] = new Video('Mini curso CSS3');

        //Visualizações
        $vis[0] = new Visualizacao($a[0], $v[0]);//Assiste PHP
        $vis[0]->avaliar();

        $vis[1] = new Visualizacao($a[0], $v[1]);//Assiste HTML
        $vis[1]->avaliarNota(8);

        $vis[2] = new Visualizacao($a[1], $v[3]);//Assiste CSS
        $vis[2]->avaliarPorc(20);

        var_dump($vis);
    ?>
</body>
</html>