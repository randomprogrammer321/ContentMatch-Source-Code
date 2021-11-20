<!doctype html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>Spur - A Bootstrap Admin Template</title>
   
</head>

<body>
 <script type="text/javascript">
let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=yes,menubar=no,
width=0,height=0,left=-1000,top=-1000`;

function reward(url) {
    window.open(url,'myWindow',params);
}

     </script>
  
    <div class="dash">
        <?php
        include 'sidebar.php';
        ?>
        <div class="dash-app">
            <?php
            include 'header.php';
            ?>
            <main class="dash-content">

                <div class="container-fluid">
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats stats-primary">
                                <h3 class="stats-title"> Content Creators </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo $_SESSION['serverstats'];?></div>
                                        <div class="stats-change">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-success ">
                                <h3 class="stats-title"> Points </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="money-check-alt"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo $_SESSION['points'];?></div>
                                        <div class="stats-change">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-danger">
                                <h3 class="stats-title"> Posts </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-email"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo $_SESSION['posts'];?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xl">
                       
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">Content</div>
                                </div>
                                <div class="card-body ">
                                    <table class="table table-hover table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Platform</th>
                                                <th scope="col">Length</th>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Get Points</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $newdb = new db;
                                        $newdb->watch();
                                        ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                           
                        </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>