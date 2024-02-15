<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event On search button</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       $(document).ready(function(){
           $(".btn.btn-danger").click(function(){
               var ch=$(this).text();
               $.post(
                  "one_retrieve.php",{btn:ch},function(data){
                      $("#record").html(data);
                  }
               )
           })
       })
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
           <?php
               for($i='A';$i<='Z';$i++){
                    echo "<button class='btn btn-danger'>".$i."</button>";
                    if($i=='Z'){
                        break;
                    }
               }
           ?>
           <div class="col-sm-12" id="record"></div>
    </div>
</div>
</body>
</html>