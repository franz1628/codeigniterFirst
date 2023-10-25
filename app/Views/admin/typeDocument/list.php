<h1>Type Document List</h1>
<hr>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-info" href="admin/typeDocument/add">Add</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type Document</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($list as $key=>$value): ?>
                <tr>
                <td><?= $key; ?></td>
                <td><?= $value["description"]; ?></td>
                <td>
                    <a href="<?='admin/typeDocument/edit/'.$value['id']?>" class="btn btn-info"><i class="bi bi-pencil-square"></i>Edit</a>
                    <a href="<?='admin/typeDocument/delete/'.$value['id']?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Delete</a>
           
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>