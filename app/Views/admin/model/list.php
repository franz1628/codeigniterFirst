<h1>Model List</h1>
<hr>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-info" href="admin/brand/add">Add</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Model</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($list as $key=>$value): ?>
                <tr>
                <td><?= $key; ?></td>
                <td><?= $value["description"]; ?></td>
                <td>
                    <a href="<?='admin/model/edit/'.$value['id']?>" class="btn btn-info"><i class="bi bi-pencil-square"></i>Edit</a>
                    <button class="btn btn-danger"><i class="bi bi-trash3"></i>Delete</button>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>