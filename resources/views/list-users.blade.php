<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                    Laravel ph38

                    <a href="'{{route('user.show', 1)}}'">Show user</a>
                    <a href="{{route('admin-images')}}">List image</a>
                    <a href="{{\URL::temporarysignedRoute('pass-reset', 
                    \Carbon\Carbon::now()->addMinutes(1), ['token' => 'a12ce4231'])}}">Reset pass</a>
                    <h1> List Users: </h1>
                    <table>
                        <thead>
                            <tr>
                                <td> Name</td>
                                <td> Email</td>
                                <td> Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listUser as $item)
                                <tr>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td><a href="{{route('user.edit', $item->id)}}">Edit</a>
    <form action="{{route('user.delete', $item->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </body>
</html>
