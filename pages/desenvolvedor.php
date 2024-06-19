<div class="container text-center">
    <h1>Desenvolvedores</h1>
    <div class="desaparecer">
        <div class="row">

            <?php
                $url = "http://localhost/projects/api/equipe.php";

            $dados = file_get_contents($url);

            $dados = json_decode($dados);

            foreach ($dados as $equipe) {
            ?>
                <div class="col-12 col-md-3 text-center">
                    
                    <div class="card">
                     <img src="<?= $equipe->foto ?>" alt="<?= $equipe->nome ?> class=" w-100">
                        <p>
                            <strong><?php echo $equipe->nome; ?></strong>
                        </p>
                        <p>
                           <strong><?php echo $equipe->cargo; ?></strong>
                        </p>

                </div>

        </div>
            <?php

        }

        ?>

        </div>
    </div>

</div>
