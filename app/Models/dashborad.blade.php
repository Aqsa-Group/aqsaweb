<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    <!-- Style Css -->
    <link rel="stylesheet" href={{ asset('css/stylecss.css')}}>
    
    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>
    <div class="container grid w-[96%] mx-auto gap-1 grid-cols-[14rem_minmax(auto)_23rem] bg-amber-500">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src={{ asset('images/LOGO.jpg') }} alt="">
                    <h2 class="text-red-500">AQSA <span>Group</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Contact Management</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add Post</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Page</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>User & Roles</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
    </div>
</body>
</html>