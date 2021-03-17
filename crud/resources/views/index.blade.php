<!----
@Registration page
@author:Varsha S
@date:17/03/2021
--->
<!DOCTYPE html>
<html>
    <head>
        <title>Registrartion</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    </head>
    <style>
    .error{
        color:red;
    }
    
    </style>
    <form action="insert" method="get">
    @csrf
    <div class="result danger">
    @if(Session::get('sucess'))
    <div class="sucess bg-info">
    {{Session::get('sucess')}}
    </div>
    @endif
    @if(Session::get('fail'))
    <div class="alert.alert-dainger">
    {{Session::get('fail')}}
    @endif
    </div>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                       
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register Here....</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <span class="error">
                                        <label for="exampleInputName"></label>
                                            <input type="text" class="form-control" id="exampleInputName"  aria-describedby="emailHelp" placeholder="First Name" name="firstname" value="{{old('firstname')}}">
                                            @error('fullname'){{$message}}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                        <span class="error">
                                         <label for="exampleInputEmail1"></label>
                                            <input type="text" class="form-control" placeholder="Last Name" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastname">
                                            @error('lastname'){{$message}}@enderror</span>
                                            </div>
                                        <div class="form-group">
                                        <span class="error">
                                            <label for="exampleInputPass"></label>
                                            <input type="password" class="form-control" placeholder="Password" aria-describedby="emailHelp" name="password">
                                            @error('password'){{$message}}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                        <span class="error">
                                         <label for="exampleInputPass"></label>
                                            <input type="text" class="form-control" id="exampleInputPass" aria-describedby="emailHelp" name="address" placeholder="Address" >
                                            @error('address'){{$message}}@enderror</span>
                                              </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                           @error('gender'){{$message}}@enderror</br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <span class="error">
                                        <label for="exampleInputPass"></label>
                                            <input type="email" class="form-control"  id="exampleInputPass" aria-describedby="emailHelp" name="email" placeholder="Your Email">
                                            @error('email'){{$message}}@enderror
                                            </span>
                                         </div>
                                         <div class="form-group">
                                         <span class="error">
                                        <label for="exampleInputPass"></label>
                                            <input type="text" minlength="8" maxlength="9"  id="exampleInputPass" aria-describedby="emailHelp" name="phone" class="form-control" placeholder="Your Phone">
                                            @error('phone'){{$message}}@enderror
                                            </span>
                                        </div>
                                       
                                        <div class="form-group">
                                        <span class="error">
                                        <label for="exampleInputPass"></label>
                                            <input type="text" class="form-control" id="exampleInputPass" aria-describedby="emailHelp" name="age" placeholder="Enter Your Age">
                                            @error('age'){{$message}}@enderror
                                            </span>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register">
                                    </div>
                                    <td><a href="view">View details</a></td>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </form>
<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</script>
</body>     
</html>