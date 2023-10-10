<h1>Brand List</h1>
<hr>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Brand</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($list as $key=>$value): ?>
                <tr>
                <td><?= $key; ?></td>
                <td><?= $value["description"]; ?></td>
                <td>
                    <button class="btn btn-info"><i class="bi bi-pencil-square"></i>Edit</button>
                    <button class="btn btn-danger"><i class="bi bi-trash3"></i>Delete</button>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>