<?php
// validation du formulaire 
// création array error 
include_once('helpers/function.php');
require_once('models/model.php');

$error = [];
$errorMsgRequire = "<span class='text-red-500'>Ce champ est obligatoire!</span>";
$success = false;


// recupere l'étuddiant avec le bon ID
$student= get('students');
// $student = $students['students'];
// debugArray($students);

// Je vérifie si le formulaire  est soumis 
    if(!empty($_POST['submitted'])){

    require_once('helpers/validate-input/validateInput.php');
    update($fname, $lname, $email, $age, $formation, $date_of_birth, $status, $id);

    }
?>


<!-- Formulaire -->


<div class="flex justify-center pt-5 ">
    <form method="POST" class="bg-black bg-opacity-30 rounded-xl p-20 border-t border-l border-black border-opacity-50 shadow-xl">    
    <!-- input fname -->
    <h3 class="text-center font-white text-white uppercase text-2xl pb-10">Formulaire</h3>
        <div class="form-control w-full max-w-xs">
            <label class="label" for="fname">
                <span class="label-text font-black text-white">Nom</span>
            </label>
            <input name="lname" type="text" placeholder="Nom" class="input input-bordered w-full max-w-xs" value="<?= $student['lname'] ?>" />
            <p><?php errorMsg('lname') ?></p>
        </div>
            <!-- input prénom -->
        <div class="form-control w-full max-w-xs">
            <label class="label" for="fname">
                <span class="label-text font-black text-white">Prénom</span>
            </label>
            <input name="fname" type="text" placeholder="Prénom" class="input input-bordered w-full max-w-xs" value="<?= $student['fname'] ?>" />
            <p><?php errorMsg('fname') ?></p>
        </div>
    <!-- input age -->
        <div class="form-control w-full max-w-xs">
            <label class="label" for="age">
                <span class="label-text font-black text-white">Age</span>
            </label>
            <input name="age" type="number" placeholder="Age" class="input input-bordered w-full max-w-xs" value="<?= $student['age'] ?>"/>
            <p><?php errorMsg('age') ?></p>
        </div>
    <!--date de naissance  -->
        <div class="form-control w-full max-w-xs">
            <label class="label" for="date_of_birth">
                <span class="label-text font-black text-white">Date de naissance</span>
            </label>
            <input name="date_of_birth" type="date" class="input input-bordered w-full max-w-xs" value="<?= $student['date_of_birth'] ?>" />
            <p><?php errorMsg('date_of_birth') ?></p>
        </div>
    <!-- status -->
        <div class="flex space-x-20 ">
            <div class="form-control">
                <label class="label cursor-pointer"  for="status">
                    <span class="label-text font-black text-white">Inscrit</span> 
                </label>
                <input type="radio" name="status" value="1"  class="radio checked:bg-black" <?php showUpdateRadioValue($student['status'], 1) ?> />
                <p><?php errorMsg('status') ?></p>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer" for="status">
                    <span class="label-text font-black text-white">Liste d'attente</span> 
                </label>
                <input type="radio" name="status" value="0" class="radio checked:bg-black" <?php showUpdateRadioValue($student['status'], 0) ?>/>
                <p><?php errorMsg('status') ?></p>
            </div>
        </div>
    <!-- input e-mail -->
        <div class="form-control w-full max-w-xs">
            <label class="label" for="email">
                <span class="label-text font-black text-white">E-mail</span>
            </label>
            <input name="email" type="email"  placeholder="exemple@exmple.fr" class="input input-bordered w-full max-w-xs" value="<?=$student['email']?>" />
            <p><?php errorMsg('email') ?></p>
        </div>

        <!-- array boucle formation -->
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
                <span class="label-text font-black text-white">Formation</span>
            </label>
        <!-- Selection -->
            <select class="select select-bordered " name="formation">
                <option disabled selected >Choisis une formation</option>
                <?php foreach($formationOption as $item): ?>
                <option value="<?= $item['name'] ?>" 
                <?php showUpdateSelectValue($student['formation'], $item['name']) ?>>
                <?= $item['name'] ?>
                </option>
                <?php endforeach ?>
            </select>
            <p><?php errorMsg('formation') ?></p>
        </div>
        <input type="hidden" name="id" value="<?= $student["id"] ?>"> 
    <!-- btn submit -->
        <div class="pt-5 text-center pt-10">
            <input name="submitted" type="submit" value="Envoyer" class="btn btn-active btn-active btn glass font-black text-white hover:bg-black bg-opacity-30" id="submitted"/>
        </div>
    </form>
</div>


