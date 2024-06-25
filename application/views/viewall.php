<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view all jobs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col m-5">
                <a href="http://localhost/jobstore/index.php/crud/create" class="btn btn-outline-primary">Add
                    Job</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">job title</th>
                        <th scope="col">job description</th>
                        <th scope="col">job location</th>
                        <th scope="col">job type</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0;?>
                    <?php foreach($jobs as $job){?>
                    <tr>

                        <th scope="row"><?php echo ++$count; ?></th>
                        <td><?php echo $job->job_title; ?> </td>
                        <td><?php echo $job->job_desc; ?> </td>
                        <td><?php echo $job->job_location; ?> </td>
                        <td><?php echo $job->job_type; ?> </td>
                        <td>
                            <a href="http://localhost/jobstore/index.php/crud/edit/<?php echo $job->jobid; ?>"
                                class="btn btn-outline-primary">Edit</a>
                            <a href="http://localhost/jobstore/index.php/crud/delete/<?php echo $job->jobid; ?>"
                                class="btn btn-outline-danger">Delete</a>

                    </tr>
                    <?php }?>

                </tbody>
            </table>

        </div>

    </div>




</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

</html>