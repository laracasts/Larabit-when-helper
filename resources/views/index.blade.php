<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracasts Larabit: when() Helper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-full bg-slate-700">
    <div class="flex w-full flex-col items-center">
        <div class="w-1/2 text-2xl p-5 text-slate-200">
            <h3 class="text-4xl text-white">Employees</h3>
            <ul>
                @foreach ($users as $user)
                    <li class="my-3 {{ when($user->award, 'text-yellow-500') }}">
                        <a href="{{$user->id}}">{{$user->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
