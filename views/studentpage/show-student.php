<!-- BODY -->
<main class="min-h-screen py-20 px-60 text-center items-center">
<body class="">
    <div class="avatar pt-10 ">
    <div class="w-[400px] rounded-full ring ring-white">
        <img src="<?= $student['url_img']?>"/>
    </div>
    
    </div>
    <div class="pt-10 text-xl">
        <P class="font-bold"> Prénom: <span class="text-white font-bold"><?= $student['fname']?></span></p>
        <P class="font-bold">Name : <span class="text-white font-bold"><?= $student['lname']?></span></p>
        <P class="font-bold">Age: <span class="text-white font-bold"> <?= $student['age']?></span></p>
        <P class="font-bold">Date de naissance: 
            <span class="text-white font-bold"> 
                <?= 
                    $date= date("d/m/Y", strtotime($student['date_of_birth']));
                ?>
            </span>
        </p>
        <p class="font-bold">Email: <span class="text-white font-bold"><?= $student['email']?></span></p>
        <p class="font-bold">Formation :<span class="text-white font-bold"><?= $student['formation']?></span></p>
    </div>
    <div class="pt-10 space-x-10">
        <a href="modifier.php?id=<?= $student['id'] ?>"> <button class="btn btn glass text-white hover:bg-black bg-opacity-30">Modifier</button> </a>
        <!-- <a href="delete.php?id=<?= $student['id'] ?>"> <button class="btn  btn glass text-white hover:bg-black bg-opacity-30"> Supprimer</button> </a> -->
        <!-- The button to open modal -->
        <label for="my-modal-6" class="btn  btn glass text-white hover:bg-black bg-opacity-30">Supprimer</label>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="my-modal-6" class="modal-toggle" />
        <div class="modal modal-bottom sm:modal-middle">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Etes vous sur de vouloir supprimer l'étudiant ?</h3>
                <div class="modal-action">
                    <label for="my-modal-6" class="btn">
                        <a href="delete.php?id=<?= $student['id'] ?>">Oui </a>
                    </label>
                    <label for="my-modal-6" class="btn">Non</label>
                </div>
            </div>
        </div>
    </div>
</main>

    <!-- Ajout d'un moadal avant la redirection quand je clique sur le BTN supprimer  -->
    <!-- Bouton pour ouvrir le modal -->
    <!-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Ouvrir le modal
    </button> -->

    <!-- Modal -->
    <!-- <div class="fixed bg-gray-500 bg-opacity-75 inset-0 z-50 flex justify-center items-center">
    <div class="bg-white rounded-lg p-8">
        <h2 class="text-xl font-bold mb-4">L'étudiant va être supprimé</h2>
        <p class="mb-4">Etes-vous sur de vouloir continué ?</p>
        <button class="bg-blue-500 btn btn-active hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Fermer le modal
        </button>
    </div>
    </div> -->