<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .registration-container {
            max-width: 700px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
            color: #3b5bdb;
        }
        .form-header h3 {
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .form-control:focus {
            border-color: #3b5bdb;
            box-shadow: 0 0 0 0.25rem rgba(59, 91, 219, 0.25);
        }
        .btn-primary {
            background-color: #3b5bdb;
            border-color: #3b5bdb;
            padding: 0.75rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background-color: #2b4ac7;
            border-color: #2b4ac7;
            transform: translateY(-2px);
        }
        .input-group-text {
            background-color: #e9ecef;
        }
        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        .required-field::after {
            content: "*";
            color: #dc3545;
            margin-left: 4px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="registration-container">
            <div class="form-header">
                <h3><i class="fas fa-user-graduate me-2"></i>Student Registration Form</h3>
                <p class="text-muted">Please fill out all required fields</p>
            </div>

            <form action="{{route('students.store')}}" method="POST">
                @csrf
                
                <div class="row mb-4">
                    <div class="col-md-12">
                        <label for="name" class="form-label required-field">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <label for="email" class="form-label required-field">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-days"></i></span>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="age" class="form-label">Age</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                            <input type="number" class="form-control" id="age" name="age" placeholder="Enter age">
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <label for="class" class="form-label">Class</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                            <input type="text" class="form-control" id="class" name="class" placeholder="Enter your class">
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-paper-plane me-2"></i>Submit Registration</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>