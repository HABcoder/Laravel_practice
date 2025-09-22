<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Portal</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.6rem 1rem;
        }
        .navbar-brand {
            font-weight: 700;
            color: #3b5998 !important;
            display: flex;
            align-items: center;
        }
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 6px;
            margin: 0 2px;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
        }
        .nav-link.active {
            background-color: #e9ecef;
            color: #3b5998 !important;
        }
        .navbar-toggler {
            border: none;
            padding: 0.25rem 0.5rem;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
        .badge-notification {
            position: absolute;
            top: 3px;
            right: 3px;
            font-size: 0.6rem;
            padding: 0.15rem 0.4rem;
        }
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-top: 0.5rem;
        }
        .dropdown-item {
            padding: 0.5rem 1rem;
            transition: all 0.2s ease;
        }
        .dropdown-item:hover {
            background-color: #f8f9fa;
            padding-left: 1.5rem;
        }
        .student-img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e9ecef;
        }
        @media (max-width: 991.98px) {
            .navbar-collapse {
                padding: 1rem 0;
            }
            .nav-item {
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="fas fa-graduation-cap me-2"></i>
            EduPortal
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        <i class="fas fa-home me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-book me-1"></i> Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-chart-bar me-1"></i> Grades
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-calendar-alt me-1"></i> Schedule
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-file-alt me-1"></i> Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                        <li><a class="dropdown-item" href="#">Library</a></li>
                        <li><a class="dropdown-item" href="#">Documents</a></li>
                        <li><a class="dropdown-item" href="#">Tutorials</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Help Center</a></li>
                    </ul>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link position-relative" href="#">
                        <i class="fas fa-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger badge-notification">
                            3
                        </span>
                    </a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" class="student-img me-2" alt="Student">
                        <span>John Doe</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-lock me-2"></i> Privacy</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            
          
        </div>
    </div>
</nav>


</body>
</html>