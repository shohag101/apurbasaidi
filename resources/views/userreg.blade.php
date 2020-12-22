<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <form action="{{route('user.store')}}" method="post">
  @csrf
    <div class="row">
      <div class="col-md-6">
                  <div class="form-group">
                    <label for="#">First Name</label>
                    <input type="text" name="txt1st" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <label for="#">Last Name</label>
                    <input type="text" name="txtlast" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <label for="#">Name of organization</label>
                    <input type="text" name="txtOrg" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <label for="#">Street</label>
                    <input type="text" name="UsrStreet" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <label for="#">City</label>
                    <input type="text" name="UsrCty" class="form-control" id="">
                  </div>

      </div>
      <div class="col-md-6">
         
                  <div class="form-group">
                    <label for="#">Email</label>
                    <input type="text" name="UsrEmail" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <label for="#">Mobile Number</label>
                    <input type="number" name="usernmbr" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <label for="#">Password</label>
                    <input type="text" name="pwd" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <label for="#">Confirm Passward</label>
                    <input type="text" name="rePwd" class="form-control" id="">
                  </div>

      </div>

    
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
                  
   </form>
   </div>















   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>