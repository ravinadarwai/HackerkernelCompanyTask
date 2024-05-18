@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    


<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container mt-5">
            <div class="uh">
            <h2 style="color: #448fef;text-transform: uppercase;">Add user</h2>
            <form action="{{ route('userstore') }}" method="post" class="ug">
    @csrf

    <div class="row">
        <div class="col-lg-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{ old('name') }}">
        </div>
        <div class="col-lg-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="col-lg-6">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="mobile">
            @error('mobile')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary my-3" name="done">Save</button>
    <button type="submit" class="btn btn-danger" name="done">Cancel</button>
</form>

            </div>
        </div>


    </div>
</div>


<script>
$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault();

        var email = $('#email').val();

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        
        if (!email.match(emailPattern)) {
            $('#email-error').text('Invalid email address');
        } else {
            this.submit();
        }
    });
});
</script>


</body>
</html>