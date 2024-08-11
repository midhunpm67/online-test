<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href={{asset("assets/css/user.css")}} rel="stylesheet" type="text/css">
</head>

<body>
    <div class="row container-fluid">
        <div class="container">
            <div class="row">
                <h3 style="font-weight:bold">Search</h3>
                <input type="text" id="search" placeholder="Search by Name, Department or Designation">
            </div>
        <div id="userContainer">
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-sm-6">
                        <div class="card">
                            <h4 style="font-weight: bold">{{ $user->name }}</h4>
                            <p>{{ $user->departments->name }}</p>
                            <p>{{ $user->designations->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    
    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#userContainer .card").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
                
            });
        });
    </script>
</body>

</html>
