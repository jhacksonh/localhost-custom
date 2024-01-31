<html>

<head>
    <title>Meus Projetos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="<?= $dir ?>zroot/styles/style.css">
</head>

<body>
    <!--lista de nomes do gifs contidos na pasta imgs do zroot-->
    <?php $giffs = ['macaquinho', 'heroi', 'leao', 'mario', 'garota', 'gatinho', 'sonic']; ?>
    <header>
        <!-- criação dos gifs dentro do header -->
        <?php foreach ($giffs as $gif) : ?>
            <img class="gif <?= $gif ?>" src="<?= $dir ?>zroot/imgs/<?= $gif ?>.gif" alt="GiF do <?= $gif ?>" srcset="">
        <?php endforeach ?>
    </header>
    <main class="container">
        <div class="info">
            <a href='?viewInfo=1'>Informações sobre o server</a>
        </div>
        <h1><img src="<?= $dir ?>zroot/imgs/logo.png" alt="Meus projetos"></h1>
        <ul class="content">
            <?php
            foreach ($projetos as $projeto) {
                echo "<li><a href='./{$projeto}'>{$projeto}</a></li>";
            }
            ?>
        </ul>
    </main>
    <footer>
        <!-- criação dos gifs dentro do footer -->
        <?php for ($i = (count($giffs) - 1); $i >= 0; $i--) : ?>
            <img class="gif <?= $giffs[$i] ?>" src="<?= $dir ?>zroot/imgs/<?= $giffs[$i] ?>.gif" alt="GiF do <?= $giffs[$i] ?>" srcset="">
        <?php endfor ?>
    </footer>
    <script src="<?= $dir ?>zroot/js/javascript.js"></script>
</body>

</html>