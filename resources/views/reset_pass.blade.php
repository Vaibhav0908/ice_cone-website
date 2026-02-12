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
        <div class="row m-0 p-0">
            <div class="col-lg-4 m-0 p-0"></div>
            <div class="col-lg-4 p-0" style="margin-top: 170px;">
                <div class="card my-5">
                    <div class="card-header">
                        <h3 class="text-primary">Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form action="/reset_pass_page" method="POST">
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
                                    <input type="text" name="password" id="pass" placeholder="124347" required><br><br>
                                </div>
                                <div class="col-lg-4">
                                    <label for="conf_password">Confirm Password:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="conf_password" id="conf_pass" placeholder="124347"
                                       oninput="this.setCustomValidity(this.value !== password.value ? 'Password & Confirm Passwords not match' : '')" required>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" onclick="set_pass()">Set Password</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 m-0 p-0"></div>
        </div>
    </div>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>