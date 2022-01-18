<a href="<?php echo base_url('Admin_login/add_menu');?>" class="btn btn-sm btn-info mb-5">Add new Menu</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Details</th>
            <th scope="col">price</th>
            <th scope="col">Image</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=1;
        foreach ($menu as $s) { ?>
            <tr>
                <td><?php echo $i++  ?></td>
                <td><?php echo $s->name ?></td>
                <td><?php echo $s->details ?></td>
                <td><?php echo $s->price ?></td>
                <td><img src="<?php echo base_url('assets/img/').$s->img ?>" width="100 px" alt=""></td>
                <td><?php echo $s->type ?></td>
                <td>
                    <a href="<?php echo base_url('Admin_login/edit_menu/'); echo $s->id;?>" class="btn btn-sm btn-success">Edit</a>
                    <a href="<?php echo base_url('Admin_login/delete_menu/'); echo $s->id;?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>