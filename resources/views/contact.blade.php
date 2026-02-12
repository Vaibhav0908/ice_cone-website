@extends("com_layouts")

<style>
    .card {
        box-shadow: 0px 0px 15px black;
    }

    .card-body {
        height: 400px;
    }

    form label {
        width: 200px;
    }

    form input {
        display: inline-block;
        width: 50%;
        padding: 5px;
    }

    form textarea {
        display: inline-block;
        width: 50%;
        padding: 5px;
    }
</style>

@section("content")
    <div class="row m-5 p-5">
        <div class="col-lg-3 m-0 p-0"></div>
        <div class="col-lg-6 m-0 p-0">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-primary">Contact Form</h4>
                </div>
                <div class="card-body">
                    <form action="/contact_page" method="POST">
                        @csrf
                        <label for="firstname" class="text-dark">First Name:</label>
                        <input type="text" name="Fname" id="firstname" placeholder="First Name" pattern="[A-Za-z ]{2,10}"
                            required autofocus autocomplete="on""><br><br>
                        <label for="lastname" class="text-dark">Last Name:</label>
                        <input type="text" name="Lname" id="lastname" placeholder="Last Name" pattern="[A-Za-z ]{2,10}"
                            required><br><br>
                        <label for="mail" class="text-dark">Email:</label>
                        <input type="email" name="email" id="mail" placeholder="abc12@gmail.com" required><br><br>
                        <label for="desc" class="text-dark">Cover Letter:</label>
                        <textarea name="desc" id="desc" placeholder="Write about Inquiry...." required></textarea>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary" onclick="submitform()">Submit</button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3 m-0 p-0"></div>
    </div>
@endsection