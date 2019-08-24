<?php
?>
<table class="table">
    <thead>
        <tr>
            <th>title</th>
            <th>date</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($activities as $activity): ?>
        <tr>
            <td><?= $activity->title ?></td>
            <td><?= $activity->dateStart ?></td>
            <td><a href="/activity/view?id=<?=$activity->id?>">view</a> | <a href="/activity/edit?id=<?=$activity->id?>"">edit</a></td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>