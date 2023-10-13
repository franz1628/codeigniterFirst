<?php $validation = \Config\Services::validation(); ?>

<h3>Editar Brand</h3>

<div class="row">
    <div class="col-md-6">

        <form action="" method="POST">
            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" id="description" value="<?= $model["description"] ?>" required>
                    <?php if ($validation->getError('description')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('descripcion'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        
            <div class="mb-3">
                <input type="submit" name="submit" value="Guardar" class="btn btn-success">
            </div>
        </form>
    </div>
</div>