<header>
    <div id="logo">
        <a href="index.php">InFoot</a>
    </div>
    <nav id="pages">
        <ul id="nav">
            <?php
            $sub='';
            if(str_contains($_SERVER['REQUEST_URI'],'upload_image.php')){
                $sub='../';
            }   
            ?>
            <li><a class="<?php echo ($pageActive == 'accueil') ? 'actif' : ''; ?>" href="<?php echo $sub; ?>index.php">ACCUEIL</a></li>
            <li><a class="<?php echo ($pageActive == 'donnees') ? 'actif' : ''; ?>" href="<?php echo $sub; ?>donnees.php">DONNÉES</a></li>
            <li><a class="<?php echo ($pageActive == 'galerie') ? 'actif' : ''; ?>" href="<?php echo $sub; ?>galerie.php">GALERIE</a></li>
            <li><a class="<?php echo ($pageActive == 'contact') ? 'actif' : ''; ?>" href="<?php echo $sub; ?>contact.php">CONTACT</a></li>
            <li><a class="<?php echo ($pageActive == 'partenaires') ? 'actif' : ''; ?>" href="<?php echo $sub; ?>partenaires.php">PARTENAIRES</a></li>
        </ul>
    </nav>
</header>
