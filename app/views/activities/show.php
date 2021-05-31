<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <h1><?php echo $data['activity']->name; ?></h1>
    <!-- table -->
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">NR</th>
            <th scope="col">Nimi</th>
            <th scope="col">Registrikood</th>
            <th scope="col">e-post</th>
            <th scope="col">Telefon</th>
            <th scope="col">Asukoht</th>
            <th scope="col">detailne info</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['partners'] as $partner): ?>
            <tr>
                <th scope="row"><?php echo $partner->id; ?></th>
                <td><?php echo $partner->partner_name; ?></td>
                <td><?php echo $partner->reg_nr; ?></td>
                <td><?php echo $partner->email; ?></td>
                <td><?php echo $partner->phone; ?></td>
                <td><?php echo $partner->location; ?></td>
                <td><a href="<?php echo URLROOT . '/partners/show/' . $partner->partner_id; ?>">vaata lähemalt</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <!-- table -->
<?php require_once APPROOT . '/views/inc/footer.php'; ?>