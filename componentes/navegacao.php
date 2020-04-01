<nav class="blue">
    <div class="nav-wrapper container">
        <?php
            if(isset($_SESSION['sessoes']['login'])){
        ?>
    	   <a href="home.php" class="brand-logo left">LBFF</a>
        <?php
            }else{
        ?>
            <a href="index.php" class="brand-logo left">LBFF</a>
        <?php
            }
        ?>
    	<a href="#" data-target="mobile-demo" class="sidenav-trigger right">
    		<i class="material-icons">menu</i>
    	</a>
    	<ul class="right hide-on-med-and-down">
        	<?php
                if(!isset($_SESSION['sessoes']['login'])){
            ?>
            <li>
                <a href="logar.php">Logar</a>
            </li>
            <?php
                }else{
            ?>
            <li>
                <a href="home.php">Voltar</a>
            </li>
            <li>
                <a href="assets/php/deslogar.php">Sair</a>
            </li>
            <?php
                }
            ?>
      </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <?php
        if(!isset($_SESSION['sessoes']['login'])){
    ?>
    <li>
    	<a href="logar.php">Logar</a>
    </li>
    <?php
        }else{
    ?>
    <li>
        <a href="home.php">Voltar</a>
    </li>
    <li>
        <a href="assets/php/deslogar.php">Sair</a>
    </li>
    <?php
        }
    ?>
</ul>