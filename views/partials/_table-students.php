<div class="overflow-x-auto pt-10">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Formation</th>
        <th>Status</th>
        <th>Voir</th>
        <th>Modifier</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
    <?php foreach ($students as $student){?>
      <tr class= "text-green" >
        <th><?= $student['id']?></th>
        <td><?= $student['lname']?> </td>
        <td><?= $student['fname']?></td>
        <td><?= $student['formation']?></td>
        <td><?= $student['status'] == 0 ?"Liste d'attente": "Inscrit" ?></td>
        <td>
          <a href="show-student.php?id=<?=$student['id'] ?>&name=<?=$student['lname'] ?>"?>
            <i class="text-green-600 fa-solid fa-eye"></i>
          </a>
        </td>
        <td>
          <a href="modifier.php?id=<?= $student['id'] ?>&name=<?=$student['lname'] ?>"?>
            <i class="fa-solid fa-pencil"></i>
          </a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>