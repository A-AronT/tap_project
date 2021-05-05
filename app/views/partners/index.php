<?php require_once APPROOT . '/views/inc/header.php'; ?>
<?php
echo '<pre>';
print_r($data);
?>
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
            <th scope="row">1</th>
            <td>Quinton</td>
            <td>12345</td>
            <td>quin71@gmail.com</td>
            <td>1234567</td>
            <td>basseinid</td>
            <td>kloriini käsitlus</td>
            <td>uus meremaa</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Toomas Peeterson</td>
            <td>23456</td>
            <td>toomasp@gmail.com</td>
            <td>2345678</td>
            <td>katused</td>
            <td>plekkkatused</td>
            <td>üle eesti</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Toomas Peeterson</td>
            <td>23456</td>
            <td>toomasp@gmail.com</td>
            <td>2345678</td>
            <td>katused</td>
            <td>puitkatused</td>
            <td>üle eesti</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Juhan</td>
            <td>52312</td>
            <td>jupats@gmail.com</td>
            <td>3456789</td>
            <td>põrandad</td>
            <td>puitpõrandad</td>
            <td>tartumaa</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Jüri</td>
            <td>63136</td>
            <td>ratas@eesti.ee</td>
            <td>4567891</td>
            <td>maja ehitus</td>
            <td>palkmajad</td>
            <td>üle eesti</td>
        </tr>
        </tbody>
    </table>
    <!-- table -->
<?php require_once APPROOT . '/views/inc/footer.php'; ?>