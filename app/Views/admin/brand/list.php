<h1>Brand List</h1>
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
                    <th>Brand</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($list as $key=>$value): ?>
                <tr>
                <td><?= $key+1; ?></td>
                <td><?= $value["description"]; ?></td>
                <td>
                    <a href="<?='admin/brand/edit/'.$value['id']?>" class="btn btn-info"><i class="bi bi-pencil-square"></i>Edit</a>
                    <a href="<?='admin/brand/delete/'.$value['id']?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Delete</a>
           
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>