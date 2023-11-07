<?php $validation = \Config\Services::validation(); ?>

<h3>Add Model</h3>

<div class="row">
    <div class="col-md-6">

        <form action="" method="POST">
            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" id="description" required>
                    <?php if ($validation->getError('description')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?php echo $validation->getError('description'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="mb-3">

                <button class="btn btn-success" type="submit" name="submit"><i class="bi bi-download"></i> Save</button>

                <a class="btn btn-danger" href="admin/typeDocument"><i class="bi bi-backspace"></i> Cancel</a>
            </div>
        </form>
    </div>
</div>