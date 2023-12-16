<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Admin Panel')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            display: flex;
        }

        .sidebar {
            height: 100vh;
            width: 200px; 
            background-color: #f2f2f2;
            padding: 20px;
            transition: width 0.3s ease;
        }

        main {
            flex-grow: 1;
            padding: 20px;
            transition: margin-left 0.3s ease; 
        }

        .menu-toggle {
            cursor: pointer;
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .sidebar.contracted {
            width: 60px; 
        }

        .sidebar.contracted ul {
            display: none; 
        }

        .main.contracted {
            margin-left: 60px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="menu-toggle" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>
        <h3>Admin Menu</h3>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.categories') }}">Categories</a></li>
            <li><a href="{{ route('admin.courses') }}">Courses</a></li>
            <li><a href="{{ route('admin.students') }}">Students</a></li>
            <li><a href="{{ route('admin.settings') }}">Settings</a></li>
            <li><a href="{{ route('admin.profile') }}">Profile</a></li>
            <li><a href="{{ route('admin.message') }}">Message</a></li>
            <li><a href="{{ route('admin.plans') }}">Plans</a></li>
        </ul>
    </div>

    <main class="main">
        <nav>
        </nav>

        <div>
            @yield('content')
        </div>
    </main>

    <footer>
    </footer>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main');
            
            sidebar.classList.toggle('contracted');
            mainContent.classList.toggle('contracted');
        }
    </script>
</body>
</html>
