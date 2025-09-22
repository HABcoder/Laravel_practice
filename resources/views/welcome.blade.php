@extends('Master.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        .welcome-card {
            transition: transform 0.3s;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        .welcome-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.12);
        }
        .hero-section {
            background: linear-gradient(120deg, #4e54c8, #8f94fb);
            color: white;
            border-radius: 0 0 30px 30px;
        }
        .btn-primary {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #3a3fa0, #6b70e0);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-section py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Welcome to Our Application</h1>
                    <p class="lead mb-4">Manage student records, track academic progress, and streamline administrative tasks with our comprehensive education management system.</p>
                    <a href="{{route('students.index')}}" class="btn btn-light btn-lg px-4 py-2 mt-3">
                        Manage Students <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="img-fluid rounded shadow" alt="Students studying">
                </div>
            </div>
        </div>
    </div>


    <!-- Main Content -->
    <div class="container mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="mb-4">Why Choose Our System?</h2>
                <p class="text-muted">Our platform provides educators with powerful tools to enhance the learning experience and simplify administrative tasks.</p>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card welcome-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-gradient rounded-circle p-3 d-inline-block mb-3">
                            <i class="bi bi-people-fill text-white fs-2"></i>
                        </div>
                        <h4 class="card-title">Student Management</h4>
                        <p class="card-text">Easily manage student profiles, academic records, and personal information in one centralized system.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card welcome-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-gradient rounded-circle p-3 d-inline-block mb-3">
                            <i class="bi bi-clipboard-data text-white fs-2"></i>
                        </div>
                        <h4 class="card-title">Performance Analytics</h4>
                        <p class="card-text">Track and analyze student performance with detailed reports and visual analytics tools.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card welcome-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="bg-info bg-gradient rounded-circle p-3 d-inline-block mb-3">
                            <i class="bi bi-chat-dots text-white fs-2"></i>
                        </div>
                        <h4 class="card-title">Communication Tools</h4>
                        <p class="card-text">Connect with students and parents through integrated messaging and notification systems.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="row">
            <div class="col-12">
                <div class="card welcome-card bg-dark text-white">
                    <div class="card-body p-5 text-center">
                        <h2 class="mb-3">Ready to Get Started?</h2>
                        <p class="mb-4">Join thousands of educators who are already using our platform to enhance their institution's management system.</p>
                        <a href="{{route('students.create')}}" class="btn btn-primary btn-lg px-5">
                            Add Student <i class="bi bi-arrow-right-circle ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection