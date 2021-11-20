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
    <div class="dash">
    <?php
        include 'sidebar.php';
        ?>
        <div class="dash-app">
            <?php
            include 'header.php';

         
            $youtubeUri = "^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$^";
            $twitchUri ="^(?:https?:\/\/)?(?:www\.|go\.)?twitch\.tv\/([a-z0-9_]+)($|\?)^";

            $obj = new db;

          

            if (isset($_POST['submit'])) {
                $url = $_POST['url'];
                if (preg_match($youtubeUri,$url) == 1 || preg_match($twitchUri,$url) ==1 ){
                   
                    $platform =$_POST['platform'];
                    $length = $_POST['length'];
                    echo $length;
                    $obj->post($platform,$length,$url);
                }
               else {
                   echo "Please enter a valid Youtube or twitch url";
               }

               
            }
           
            ?>
            <main class="dash-content">
                <div class="container-fluid">
                    <h1 class="dash-title">SUBMIT YOUR CONTENT NO VIDEO LONGER THEN 10 MINUTES </h1>
                    <div class="row">
                        <div class="col-xl">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> CONTENT FORM </div>
                                </div>
                                <div class="card-body ">
                                    <form action="forms.php" method ="post">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">YOUTUBE OR TWITCH LINK</label>
                                            <input type="url" class="form-control" name = "url" id="exampleFormControlInput1" placeholder="https://www.youtube.com or https://www.twitch.tv">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Platform</label>
                                            <select class="form-control"  name="platform" id="exampleFormControlSelect1">
                                                <option value="Youtube">Youtube</option>
                                                <option value="Twitch">Twitch</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Length</label>
                                          
                                           <select class="form-control"  name="length" id="exampleFormControlSelect1">
                                           
                                           <option value="00:01:00">1 minute</option>
                                           <option value="00:02:00">2 minutes</option>
                                           <option value="00:03:00">3 minutes</option>
                                           <option value="00:04:00">4 minutes</option>
                                           <option value="00:05:00">5 minutes</option>
                                           <option value="00:06:00">6 minutes</option>
                                           <option value="00:07:00">7 minutes</option>
                                           <option value="00:08:00">8 minutes</option>
                                           <option value="00:09:00">9 minutes</option>
                                           <option value="00:10:00">10 minutes</option>
                                           <option value="00:00:00">Twitch Account</option>
                                            </select>
                                        </div>
                                       
                                       <input type="submit" name="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        
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