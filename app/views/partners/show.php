<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <h1><?php echo $data['title']; ?></h1>
    <!-- table -->
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">NR</th>
            <th scope="col">Nimi</th>
            <th scope="col">Registrikood</th>
            <th scope="col">e-post</th>
            <th scope="col">Telefon</th>
            <th scope="col">Tegevusala</th>
            <th scope="col">Tegevusala täpsemalt</th>
            <th scope="col">Asukoht</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><?php echo $data['partner']->partner_id; ?></th>
            <td><?php echo $data['partner']->partner_name; ?></td>
            <td><?php echo $data['partner']->reg_nr; ?></td>
            <td><?php echo $data['partner']->email; ?></td>
            <td><?php echo $data['partner']->phone; ?></td>
            <td><?php echo $data['partner']->partner_activity; ?></td>
            <td>
                <ul class="list-group">
                    <?php foreach ($data['activity'] as $activity): ?>
                        <li class="list-group-item"><?php echo $activity->activity_name; ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
            <td><?php echo $data['partner']->location; ?></td>
        </tr>
        </tbody>
    </table>
    <!-- table -->
<?php require_once APPROOT . '/views/inc/footer.php'; ?>