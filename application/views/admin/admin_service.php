<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Headline</th>
            <th scope="col">Details</th>
            <th scope="col">Image</th>
            <th scope="col">Icon</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=1;
        foreach ($service as $s) { ?>
            <tr>
                <td><?php echo $i++  ?></td>
                <td><?php echo $s->head ?></td>
                <td><?php echo $s->details ?></td>
                <td><img src="<?php echo base_url('assets/img/').$s->img ?>" width="100 px" alt=""></td>
                <td><?php echo $s->icon ?></td>
                <td>
                    <a href="<?php echo base_url('Admin_login/edit_service/'); echo $s->id;?>" class="btn btn-sm btn-success mb-2">Edit</a>
                    <a href="<?php echo base_url('Admin_login/delete_service/'); echo $s->id;?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>