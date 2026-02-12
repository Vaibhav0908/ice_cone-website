<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/profile.png">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluids m-0 p-0">
        <div class="row m-0 p-0" >
            <div class="col-lg-4 m-0 p-0"></div>
            <div class="col-lg-4 p-0" style="margin-top: 170px;">
                <div class="card my-5">
                    <div class="card-header">
                        <h3 class="text-primary">Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form action="/common_page" method="POST">
                            @csrf
                            <div class="row m-0 p-0">
                                <div class="col-lg-4">
                                    <label for="user">User:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="user" id="user" placeholder="sdgfre" required
                                        autocomplete="on"><br><br>
                                </div>
                                <div class="col-lg-4">
                                    <label for="mail">Email Id:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="email" name="mail" id="emai" placeholder="abc39@gmail.com" required
                                        autocomplete="on"><br><br>
                                </div>
                                <div class="col-lg-4">
                                    <label for="password">Password:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="password" id="pass" placeholder="124347" required>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                    </form>
                </div>
                <p class="text-center">Sign In with your <small><i
                            class="fa-brands fa-google text-white bg-primary p-1 border rounded-circle"></i></small>
                    account <a href="{{ url('/auth/google') }}">Sign In</a></p>
                <p class="text-center">or</p>
                <p class="text-center">Forgot Password <a href="{{ url('/reset_pass_page') }}"> Reset</a></p>
                <!-- <p class="text-center">Sign In with your <big><i class="fa-brands fa-facebook text-primary"></i></big>
                    account <a href="{{ url('/auth/google') }}">Sign In</a></p> -->
            </div>
            <div class="col-lg-4 m-0 p-0"></div>
        </div>
    </div>
</body>

</html>