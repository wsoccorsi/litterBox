
<!DOCTYPE html>
<?php  include "top.php"; ?>
<html lang="en">
<head>
  <title>litterBox</title>
  <meta charset="utf-8">
  <meta name="author" content="Codefest Team 7">
  <meta name="description" content="A home page for the codefest project">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <p>This is the beginning of a great lost and found project.</p
  <ol>
    <li><a href="lost.php">lost.php</a></li>
    <li><a href="found.php">found.php</a></li>
    <li><a href="about.php">about.php</a></li>
  </ol>

  <div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lost</button>
    <button type="button2" class="btn btn-info btn-lg" data-toggle="modal"
    data-target="#myModal">Found</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Lost</h4>
          </div>
          <div class="modal-body">
            <p>Enter Lost Item.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button2" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Founf</h4>
          </div>
          <div class="modal-body">
            <p>Enter Founf Item.</p>
          </div>
          <div class="modal-footer">
            <button type="button2" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    
  </div>

</body>
</html>
<?php include "footer.php";?>