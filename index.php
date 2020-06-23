<div class="m-4 p-4 col-4 border border-secondary">
    <form method="get" action="user.php">
        <p class="font-weight-bold text-center text-uppercase">Formulaire de contact</p>
        <div class="form-group">
            <label for="formGroupExampleInput">Nom</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="lastName" placeholder="Dupont">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prénom</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="firstName" placeholder="Philippe">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>

<p>EXERCICE 2</p>

<!-- Création du formulaire demandant le nom et le prénom avec la méthode post. -->

<div class="m-4 p-4 col-4 border border-secondary">
    <form method="post" action="user.php">
        <p class="font-weight-bold text-center text-uppercase">Formulaire de contact</p>
        <div class="form-group">
            <label for="formGroupExampleInput">Nom</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="lastName" placeholder="Dupont">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prénom</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="firstName" placeholder="Philippe">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>

<p>EXERCICE 3 ET 4</p>

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
    $lastName = $_GET['lastName'] ?? '';
    $firstName = $_GET['firstName'] ?? '';
    $lastNamePost = $_POST['lastName'] ?? '';
    $firstNamePost = $_POST['firstName'] ?? '';
?>


<!-- Affichage des données lastName et firstName avec la méthode GET. -->

<p><?php echo trim(htmlspecialchars($lastName)) ;?></p>
<p><?php echo trim(htmlspecialchars($firstName)) ;?></p>
<p><?php echo trim(strip_tags($lastNamePost)) ;?></p>
<p><?php echo trim(strip_tags($firstNamePost)) ;?></p>

<p>EXERCICE 5</p>

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'exercice5';
    include 'header.php';
    $lastNamePost = $_POST['lastName'] ?? '';
    $firstNamePost = $_POST['firstName'] ?? '';
    $civilityPost = $_POST['civility'] ?? '';
?>


<!-- Création du formulaire avec la civilité, le nom et le prénom et utilisant la méthode post. -->

<div class="m-4 p-4 col-4 border border-secondary">
    <form method="post" action="exercice5.php">
        <p class="font-weight-bold text-center text-uppercase">Formulaire de contact</p>
        <div class="form-group">
            <select class="custom-select" name="civility">
                <option selected="selected">Civilité</option>
                <option value="Monsieur">Mr</option>
                <option value="Madame">Mme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nom</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="lastName" placeholder="Dupont">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prénom</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="firstName" placeholder="Philippe">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>


<!-- Affichage des inputs du formulaire. -->
<div class="m-4">
    <p><?php echo trim(htmlspecialchars($civilityPost)) ;?></p>
    <p><?php echo trim(htmlspecialchars($lastNamePost)) ;?></p>
    <p><?php echo trim(htmlspecialchars($firstNamePost)) ;?></p>
</div>

 <p>EXERCICE 6</p>
<!-- Création de la condition d'affichage des données. -->

<?php if (!empty($_POST['civility']) && !empty($_POST['lastName']) && !empty($_POST['firstName'] && !empty($_POST['age']))) { ?>
    <p>Les données du formulaire sont : <?php echo ($_POST['civility']) ;?>; <?php echo ($_POST['lastName']) ;?>; <?php echo ($_POST['firstName']) ;?>; </p>
<?php } else { ?>
    <div class="m-4 p-4 col-4 border border-secondary">
    <form method="post" action="exercice6.php">
        <p class="font-weight-bold text-center text-uppercase">Formulaire de contact</p>
        <div class="form-group">
            <select class="custom-select" name="civility">
                <option value='' disabled="disabled" selected="selected" hidden="hidden">Civilité</option>
                <option value="Monsieur">Mr</option>
                <option value="Madame">Mme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nom</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="lastName" placeholder="Dupont">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prénom</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="firstName" placeholder="Philippe">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Age</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="age" placeholder="33">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>
<?php } ?>