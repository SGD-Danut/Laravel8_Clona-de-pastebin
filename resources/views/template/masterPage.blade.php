<!DOCTYPE html>
<html>
    <head>
        @yield('pageTitle')
        <!-- Bootstrap: CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
    </head>
    <body>
        <div class="px-4 py-5 my-5 text-center col-lg-6 mx-auto">
            <a href="/">
                <img class="d-block mx-auto mb-4" src="https://icons-for-free.com/iconfiles/png/512/pastebin-1324440210742173072.png" alt="" width="180" id="appImage">
            </a>
            <h1 class="display-5 fw-bold">Clonă de pastebin</h1>
            @yield('navigation')
            <br>
            @yield('addButton')
            @yield('addTextForm')
            @yield('tableWithTexts')
        </div>
        <!-- Bootstrap: JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
