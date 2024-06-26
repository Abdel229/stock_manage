
<div class="home-content">
    <div class="overview-boxes">
         <div class="box">
            <form action="<?= !empty($_GET['id']) ? "../model/modifCategorie.php" : "../model/ajoutCategorie.php" ?>" method="post">
            <label for="libelle_categorie"> Catégorie</label>
            <input value="<?= !empty($_GET['id']) ? $categorie['libelle_categorie'] : "" ?>" type="text" name="libelle_categorie" id="libelle_categorie" placeholder="veuillez entrez le libelle du categorie"/>
            <input value="<?= !empty($_GET['id']) ? $categorie['id'] : "" ?>" type="hidden" name="id" id="id"/>

             <button type="submit">Valider</button>

                 <?php 

                 if (!empty($_SESSION['message']['text'])) {
                ?>
                <div class="alert <?= ($_SESSION['message']['type']) ?>">
                <?= ($_SESSION['message']['text']) ?>
            </div>

                <?php      
               }
                ?>

            </form>
              
         </div> 

         <div class="box">
            <table class="mtable">
                <tr>
                    <th>ID</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
                <?php 
                
                $categories = getCategorie();
                if (!empty($categories) && is_array($categories)){
                    foreach ($categories as $key => $value){
                        ?>  
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['libelle_categorie'] ?></td>
                    <td>
                        <a href="?id=<?= $value['id']?>"><i class='bx bx-edit-alt'></i></a>
                        <a href="../model/supCategorie.php?= $value['id']?>"><i class='bx bx-message-rounded-x'></i></a>
                   </td>

                </tr>
                
                <?php
                    }
                }
                ?>
            </table>
        </div>
     
     </div>

</section>

</div>
<?php
	include 'pied.php';
?>