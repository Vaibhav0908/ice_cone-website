<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="images/profile.png">
  <title>Landing Page</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
</head>

<body>
  <div class="text-center">
    <h2 class="text-warning">We have the new Enquiry from Contact Form </h2>
    <span class="h5">Name is: </span>
    <span>{{ session('firstname') }} {{ session('lastname') }}</span><br>
    <span class="h5">Email is: </span>
    <span>{{ session('email') }}</span><br>
    <span class="h5">Inquiry: </span><br>
    <span>{{ session('desc') }}</span>
  </div>
</body>

</html>