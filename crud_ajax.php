<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD AJAX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="crud.js"></script>
</head>
<body>
<div class="container">
    <h1 class="text-center text-warning" id="hmmm">Ajax Crud</h1>
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
        open form
        </button>

<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">FORM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
            <div class="modal-body">
            <label for="name">NAME</label>
                <input type="text" class="form-control" id="exampleInputName" name="formname" placeholder="name">
            <label for="name">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword" name="formpassword" placeholder="password">
            </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="saveform" data-dismiss="modal"> Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <h1 class="text-center mt-5">Table</h1>
        <table class="table">
        <thead>

            <th>ID</th>
            <th>NAME</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
            <!-- <th>ACTION</th> -->
        </thead>
    
        <tbody id="tablebody"></tbody>
        </table>


        <!-- modal again -->
        <div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="">UPDATE FORM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
            <div class="modal-body">
            <label for="name">NAME</label>
                <input type="text" class="form-control" id="update_name" name="formname" placeholder="name">
            <label for="name">Password</label>
                <input type="password" class="form-control" id="update_password" name="formpassword" placeholder="password">
                <input type="hidden" id="update_hidden">
            </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="update_save" onclick="update()" data-dismiss="modal"> Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
</div>

</body>
</html>