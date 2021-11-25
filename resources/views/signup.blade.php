<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="signup.css">
    <title>SignUp</title>
</head>

<body id="body">

    <div class="container">
        {{-- <div id="logo"><img src="./images/eaziblog.png" alt=""></div> --}}

        <div class="left">
            @if ($errors->any())
                @foreach ($errors->all() as $error)

                    <p class="danger">{{ $error }}</p>


                @endforeach

            @endif
            {{-- <i class="fa fa-home fa-2x"> --}}
            <div class="sign-up">
                @if ($message = Session::get('message'))

                    <h1 style="color:green;">{{ $message }}</h1> <br>


                @endif

                <h2>SIGN UP</h2>

                <form action="/signup" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="label">First Name</label><br>
                    <input placeholder="First Name" class="input1" type="text" name="name" required><br>
                    <label class="e-label">Email</label><br>
                    <input placeholder="example@email.com" class="input1" type="email" name="email"
                        required><br><br>
                    <label class="label">Password</label><br>
                    <input placeholder="Last Name" class="input1" type="password" name="password" required><br>
                    {{-- <label class="label">Image</label><br> --}}
                    {{-- <input placeholder="" class="input1" type="file" name="image" --}}
                        <br><br>
                        {{-- <input type="file" name="image"/> --}}
                    <button class="Sign-up-btn" type="submit" name="submit">Sign Up</button>

                </form>

            </div>
        </div>
    </div>
</body>

</html>
