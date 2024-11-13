<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Code 00</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    <header class="navbar flex items-center justify-between px-3 border-b-2">
        <x-app-logo />
        <nav>
            <div class="dropdown dropdown-end">
                <button tabindex="0" class="btn btn-circle btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </button>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-40 p-2 shadow">
                    <li>
                        <a href="">Read</a>
                    </li>
                    <li>
                        <a href="">Write</a>
                    </li>
                    <li>
                        <a href="">Learn</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>
