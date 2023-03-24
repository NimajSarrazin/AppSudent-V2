<?php 

// validation du formulaire 
// création array error 
include_once('helpers/function.php');
require_once('models/model.php');


$error = [];
$errorMsgRequire = "<span class='text-red-500'>Ce champ est obligatoire!</span>";
$success = false;
?>


<?php 
// Je vérifie si le formulaire  est soumis 
  if(!empty($_POST['submitted'])){
    require_once('helpers/validate-input/validateInput.php');


    create($fname, $lname, $email, $age, $formation, $status, $date_of_birth);

  }

?>

<!-- Formulaire -->

<div class="flex justify-center pt-5">
    <form method="POST" class="bg-white bg-opacity-30 p-20 rounded-xl border-t border-l border-white border-opacity-30 shadow-xl">    
        <h3 class="text-center font-white uppercase text-white text-2xl pb-10">Formulaire</h3>
        <!-- input fname -->
    <div class="form-control w-full max-w-xs">
        <label class="label" for="fname">
            <span class="label-text font-black">Nom</span>
        </label>
        <input name="lname" type="text" placeholder="Nom" class=" input input-bordered w-full max-w-xs" value="<?php showInputValue('lname') ?>" />
        <p><?php errorMsg('lname') ?></p>
    </div>
        <!-- input prénom -->
    <div class="form-control w-full max-w-xs">
        <label class="label" for="fname">
            <span class="label-text font-black">Prénom</span>
        </label>
        <input name="fname" type="text" placeholder="Prénom" class=" input input-bordered w-full max-w-xs" value="<?php showInputValue('fname') ?>" />
        <p><?php errorMsg('fname') ?></p>
    </div>
  <!-- input age -->
    <div class="form-control w-full max-w-xs">
        <label class="label" for="age">
            <span class="label-text font-black">Age</span>
        </label>
        <input name="age" type="number" placeholder="Age" class="input input-bordered w-full max-w-xs" value="<?php showInputValue('age') ?>" />
        <p><?php errorMsg('age') ?></p>
    </div>
  <!--date de naissance  -->
      <div class="form-control w-full max-w-xs">
        <label class="label" for="date_of_birth">
            <span class="label-text font-black">Date de naissance</span>
        </label>
        <input name="date_of_birth" type="date" class="input input-bordered w-full max-w-xs" value="<?php showInputValue('date_of_birth') ?>" />
        <p><?php errorMsg('date_of_birth') ?></p>
      </div>
  <!-- status -->
    <div class="flex space-x-20 ">
        <div class="form-control">
            <label class="label cursor-pointer"  for="status">
                <span class="label-text font-black">Inscrit</span> 
            </label>
            <input type="radio" name="status" value="1"  class="radio checked:bg-red-500" <?php showRadioValue("status", 1) ?> />
            <p><?php errorMsg('status') ?></p>
        </div>
        <div class="form-control">
            <label class="label cursor-pointer" for="status">
                <span class="label-text font-black">Liste d'attente</span> 
            </label>
            <input type="radio" name="status" value="0" class="radio checked:bg-red-500" <?php showRadioValue("status", 0) ?> />
            <p><?php errorMsg('status') ?></p>
        </div>
    </div>
    <!-- input email -->
    <div class="form-control w-full max-w-xs">
        <label class="label" for="email">
            <span class="label-text font-black">E-mail</span>
        </label>
        <input name="email" type="email"  placeholder="exemple@exmple.fr" class="input input-bordered w-full max-w-xs" value="<?php showInputValue('email') ?>"/>
        <p><?php errorMsg('email') ?></p>
    </div>
    <!-- boucle formation  foreach-->
        <?php

        $formationOption = 
        [

        ["name" => "Dev React"],
        ["name" => "Dev Front"],
        ["name" => "Dev Laravel"],
        ["name" => "Dev Synfony"],
        ["name" => "Commerce international"],

        ]
        ?>
    <!-- input formation -->
    <div class="form-control w-full max-w-xs">
        <label class="label">
            <span class="label-text font-black">Nos formations</span>
        </label>
    <!-- Selection -->
        <select class="select select-bordered " name="formation">
            <option disabled selected >Choisis une formation</option>
            <?php foreach($formationOption as $item): ?>
            <option value="<?= $item['name'] ?>"<?php showSelectValue("formation", $item['name']) ?>>
                <?= $item['name'] ?>
            </option>
            <?php endforeach ?>
        </select>
        <p><?php errorMsg('formation') ?></p>
    </div>
    <!-- btn submit -->
    <div class="pt-10 text-center">
        <input name="submitted" type="submit" value="Envoyer" class="btn btn-active btn glass text-white hover:bg-black bg-opacity-30" id="submitted"/>
    </div>
  </form>
</div>


