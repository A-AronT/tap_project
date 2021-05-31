<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT ?>/partners/index" class="btn btn-info">tagasi</a>
    <div class="card card-body bg-light mt-5">
        <h2>Lisa koostööpartner</h2>
        <p>Lisa partner vormi kaudu</p>
        <form action="<?php echo URLROOT ?>/partners/add/" method="post">
            <div class="form-group">
                <label for="title">Nimi: <sup>*</sup></label>
                <input type="text" name="name"
                       class="form-control form-control-lg <?php echo (!empty($data['field_err'])) ? 'is-invalid' : ''; ?>"
                >
                <span class="invalid-feedback"><?php echo $data['field_err']; ?></span>
                <label for="title">Reg nr: <sup>*</sup></label>
                <input type="text" name="reg_nr"
                       class="form-control form-control-lg <?php echo (!empty($data['field_err'])) ? 'is-invalid' : ''; ?>"
                >
                <span class="invalid-feedback"><?php echo $data['field_err']; ?></span>
                <label for="title">Email: <sup>*</sup></label>
                <input type="text" name="email"
                       class="form-control form-control-lg <?php echo (!empty($data['field_err'])) ? 'is-invalid' : ''; ?>"
                >
                <span class="invalid-feedback"><?php echo $data['field_err']; ?></span>
                <label for="title">Phone: <sup>*</sup></label>
                <input type="text" name="phone"
                       class="form-control form-control-lg <?php echo (!empty($data['field_err'])) ? 'is-invalid' : ''; ?>"
                >
                <span class="invalid-feedback"><?php echo $data['field_err']; ?></span>
                <label for="title">Activity (nr): <sup>*</sup></label>
                <input type="text" name="activity"
                       class="form-control form-control-lg <?php echo (!empty($data['field_err'])) ? 'is-invalid' : ''; ?>"
                >
                <span class="invalid-feedback"><?php echo $data['field_err']; ?></span>
                <label for="title">Location: <sup>*</sup></label>
                <input type="text" name="location"
                       class="form-control form-control-lg <?php echo (!empty($data['field_err'])) ? 'is-invalid' : ''; ?>"
                >
                <span class="invalid-feedback"><?php echo $data['field_err']; ?></span>
            </div>
            <input type="submit" class="btn btn-success" value="Lisa">
        </form>
    </div>
    </div><?php require_once APPROOT . '/views/inc/footer.php'; ?>