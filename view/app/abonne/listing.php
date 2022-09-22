<h2> Liste des abonnes</h2>
<p>Nombres d'abonnees:<?=$count ?></p>


<section class="abonne">
<?php foreach($abonnes as $abonne){
 ?>
 <div>
     <p><?= $abonne->nom;?></p>
 </div>
 <ul> <li><a href="<?= $view->path('abonne',[$abonne->id]) ?>">show</a></li>
</ul>
<?php } ?>
</section>