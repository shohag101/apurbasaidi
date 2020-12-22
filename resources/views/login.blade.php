<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
<fieldset style="width:200px;margin:5px auto">
  <legend>Login</legend>
    <form action="{{route('login.store')}}" method="post" >
      @csrf
      
          
        <div>
            <label for="#">Email or Phone</label>
          <input type="text" class="@error('EmailXnumber') is-invalid @enderror" name="EmailXnumber" id="">
          @error('EmailXnumber')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
          <div class="form-group">
              <label for="#">Passward</label>
              <input type="passward" name="passward" id="">
          </div>


        <input  type="submit" value="login">
                      
    </form>
</body>
</html>