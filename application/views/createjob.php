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
        <div class="row ">
            <form>
                <div class="mb-3">
                    <label lass="form-label">Job title</label>
                    <input type="text" class="form-control" name="title">

                </div>
                <div class="mb-3">
                    <label class="form-label">description </label>
                    <textarea name="desc" id=""></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">location </label>
                    <input type="text" class="form-control" name="location">
                </div>

                <div class="mb-3">
                    <select name="jobtype" id="">
                        <option value="fulltime">fulltime</option>
                        <option value="parttime">parttime</option>
                        <option value="contract">contract</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>




</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

</html>