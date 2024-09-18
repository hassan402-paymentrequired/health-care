<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

    @vite('resources/css/app.css')
</head>

<body class="bg-[#131619] h-screen">

    {{ $slot }}


    <script>
        function showFile() {
            if (this.file) {
                this.imageUri = URL.createObjectURL(this.file)
            }
        }

        document.querySelector(".open").addEventListener("click", e => {
            console.log('hello');

        })
    </script>
</body>

</html>
