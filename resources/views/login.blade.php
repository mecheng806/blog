<html>
    <body>
        <h1>
            @foreach($users as $user)
                <p>
                    the username is {{ $user->username }}
                </p>
                <p>
                    the password is {{ $user->password }}
                </p>
                <p>
                    the create_time is {{ $user->create_time }}
                </p>
            @endforeach
        </h1>
    </body>
</html>