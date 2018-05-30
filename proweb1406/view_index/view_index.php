<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DataBase</title>
        <link rel="stylesheet"href="assets/css/bootstrap.min.css">
        <link rel="stylesheet"href="asset/css/floating-labels.css">
        <link rel="stylesheet"href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"href="asset/css/code.css">
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        
        <script>
            function InsertData(){
                $.ajax({
                    type: "Post",
                    url: "execute.php",
                    data: $("form").serialize(),
                    cache: false,
                    success: function (data){
                        //console.log(data);
                        //$('#dariajax').text(data);
                       //$('#DialogModalKu2').modal('show');
                       alert(data);
                       $('#komentar').text(data);
                    },
                    error: function(err){
                        console.log(err);
                    }
                }); 
            }
            
            function ShowModalKu(){
                $('#DialogModalKu2').modal('show');
            }
             
            function DeleteUser(){
                var idData = '';
                var dataString = 'id= '+idData;
                $.ajax({
                    type: "Post",
                    url: "ajax.php",
                    data: datastring,
                    cache: false,
                    success: function (data){
                        //console.log(data);
                       $('#dariajax').text(data);
                       $('#DialogModalKu2').modal('show');
                       alert(data);
                    },
                    error: function(err){
                        console.log(err);
                    }
                });
            }
        </script>
    </head>
    <body style="background-color: #fefefe;"> 
        <script src="assets/js/bootstrap.min.js"></script>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-ligth">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/images.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Dashboard
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Rumah
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Rumah1</a>
                                <a class="dropdown-item" href="#">Rumah2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Rumah3</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Halaman</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <form method='post'>
                            <input type='submit' class="btn btn-sm btn-light" name='logout' value='Logout'>
                        </form>
                    </form>
                </div>
            </nav>
        </header>
        <main role="main" class="container-fluid">
            <h3>Data User</h3>
            <div class="row mb-2">
                <div class="col-md-1">
                    <div class="modal fade" id="DialogModalKu2" tabindex="-1" role="dialog" 
                        aria-labelledby="DialogModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-light">
                                    <h5 class="modal-title text-muted" id="DialogModalLabel">Selamat Pagi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/images/matrix.ico" style="width: 50px; height: auto">
                                    <p id="dariajax">haloooo...</p>
                                    <form id="nama">
                                        
                                            <div class="form-group">
                                                <label for="id">
                                                    ID
                                                </label>
                                                <input type="text" name="id" id="id" class="form-control col-4" placeholder="ID" required>
                                            </div>
                                        
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="user">
                                                        Username
                                                    </label>
                                                    <input type="text" name="username" id="user" class="form-control" placeholder="username" required>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="full">
                                                        Fullname
                                                    </label>
                                                    <input type="text" name="fullname" id="full" class="form-control" placeholder="Fullname" required>
                                                </div>
                                            </div>
                                            
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="password">
                                                    Password
                                                </label>
                                                <input type="text" name="password" id="password" class="form-control" placeholder="password" required>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="email">
                                                    Email
                                                </label>
                                                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon">
                                                Telepon
                                            </label>
                                            <input type="text" name="telepon" id="telepon" class="form-control col-6" placeholder="Telepon" required>
                                        </div>
                                        <div class="form group">
                                            <label for="baned">Banned</label>
                                            <div class="form-group py-1">
                                                <div class="form-check form-check-inline col-4">
                                                    <input class="form-check-input" type="radio" name="banned" id="exampleRadios1" value="Y" >
                                                    <label class="form-check-label" for="exampleRadios1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline col-4">
                                                    <input class="form-check-input" type="radio" name="banned" id="exampleRadios2" value="N" >
                                                    <label class="form-check-label" for="exampleRadios1">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form group">
                                            <label for="acces">Acces</label>
                                            <div class="form-group py-1">
                                                <div class="form-check form-check-inline col-4">
                                                    <input class="form-check-input" type="checkbox" name="akses[]" id="exampleRadios1" value="1" >
                                                    <label class="form-check-label" for="exampleRadios1">Admin</label>
                                                </div>
                                                <div class="form-check form-check-inline col-4">
                                                    <input class="form-check-input" type="checkbox" name="akses[]" id="exampleRadios2" value="2" >
                                                    <label class="form-check-label" for="exampleRadios1">User</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>                               
                                    
                                </div>
                                <div class="modal-footer">
                                    <button onclick="InsertData();" class="btn btn-sm btn-success float-right"><i class="fa fa-list"></i> Simpan</button>
                                    <button class="btn btn-sm btn-danger float-right"><i class="fa fa-trash"></i> Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-success " type="button" onclick="ShowModalKu();"><i class="fa fa-plus"></i> Add</button>
                </div>
                <div class="input-group col-md-3">
                    <input class="form-control-sm py-1 border-right-0 border" placeholder="Cari">
                    <span class="input-group-append">
                        <div class="input-group-text bt-transparent">
                            <i class="fa fa-search"></i>
                        </div>
                    </span>
                </div>
            </div>
            
            <table class="table table-striped table-bordered text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Fullname</th>
                  
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Banned</th>
                    
                    <th scope="col">Access</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $main = new controller();
                    while ($row = $main->model->fetch ($user)) {
                        ?>
                        <tr scope="row" class="">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['usrnm']; ?></td>
                            <td><?php echo $row['fullname']; ?></td>
                            
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['telp']; ?></td>
                            <td><?php echo $row['banned']; ?></td>
                           
                            <td><?php echo $row['akses']; ?></td>
                            <td>
                                <button class="btn btn-sm btn-primary"><i class="fa fa-list"></i> Detail</button>
                                <button class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</button>
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button class="btn btn-sm btn-outline-dark" onClick="window.location.reload()"><i class="fa fa-refresh"></i> Refresh</button>
        </main>
    </body>
</html>



