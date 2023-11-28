{{-- @extends('welcome') --}}
@section('title', 'profile')

@section('content')

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> 
        <link rel="stylesheet" href="css/profile.css">
        <title>User Settings</title>
    </head>

    <body>
        <div>
            <div class="logo">
                <a href="#"><img src="LogoHabib'Tea.png"></a>
            </div>
            <header>
                <nav class= "header">
                    <ul>
                        <li class="Menu"><a href="X.html">Menu</a>
                            <ul class="submenu">
                                <li><a href="Dashboard"></a>Dashboard</li>
                                <li><a href="Logout"></a>Logout</li>
                            </ul>
                        </li>
                </nav>
            </header>
            <form class="container" action="">

                <h2 class="title-container">Edit Profile</h2>
                <div class="column">
                    <h3>First name</h3>
                    <input type="text" class="input" value="">
                    <h3>Email</h3>
                    <input type="email" class="input" value="">
                    <h3>Adress</h3>
                    <input type="text" class="input" value="">
                    <h3>City</h3>
                    <input type="text" class="input" value="">
                    <h3>Password</h3>
                    <input type="password" class="input" value="">
                </div>
                <div class="column">
                    <h3>Last name</h3>
                    <input type="text" class="input" value="">
                    <h3>Phone number</h3>
                    <input type="text" class="input" value="">
                    <h3>Postal code</h3>
                    <input type="text" class="input" value="">
                    <h3>Country</h3>
                    <input type="text" class="input" value="">
                    <div>
                        <button class="btn">Update</button>
                    </div>
                </div>
            </form>
                    <script src="jquery/jquery.js"></script>

                    <script>
                        const tabBtn =
                            document.querySelectorAll(".tab");
                        const tab =
                            document.querySelectorAll(".tabShow");

                        function tabs(panelIndex) {
                            tab.forEach(function(node) {
                                node.style.display = "none";
                            });
                            tab[panelIndex].style.display = "block";
                        }
                        tabs(0);
                    </script>
                    <script>
                        $(".tab").click(function() {
                            $(this).addClass("active").siblings().removeClass("active");
                        })
                    </script>
    </body>

   