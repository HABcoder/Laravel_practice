<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }
        .update-container {
            max-width: 700px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }
        .form-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eaeaea;
        }
        .form-header h4 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .form-header p {
            color: #7f8c8d;
            font-size: 15px;
        }
        .form-label {
            font-weight: 500;
            color: #34495e;
            margin-bottom: 8px;
            display: block;
        }
        .form-control {
            border: 1px solid #dce4ec;
            border-radius: 4px;
            padding: 10px 12px;
            font-size: 15px;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        .required-field::after {
            content: "*";
            color: #e74c3c;
            margin-left: 4px;
        }
        .btn-update {
            background-color: #2980b9;
            color: white;
            padding: 12px 24px;
            font-weight: 500;
            border: none;
            width: 100%;
            border-radius: 4px;
            transition: all 0.3s;
            margin-top: 15px;
        }
        .btn-update:hover {
            background-color: #2471a3;
            transform: translateY(-2px);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .input-icon {
            position: relative;
        }
        .input-icon i {
            position: absolute;
            left: 12px;
            top: 12px;
            color: #7f8c8d;
        }
        .input-icon input {
            padding-left: 40px;
        }
    </style>
</head>
<body>
    <div class="update-container">
        <div class="form-header">
            <h4><i class="fas fa-user-edit me-2"></i>Update Your Details</h4>
            <p>Please review and update your information as needed</p>
        </div>

        <form action="{{route('students.update', $student->id)}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <div class="input-icon">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="form-label required-field">Email:</label>
                <div class="input-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_of_birth" class="form-label">Date of Birth:</label>
                        <div class="input-icon">
                            <i class="fas fa-calendar-days"></i>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{$student->date_of_birth}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="age" class="form-label">Age:</label>
                        <div class="input-icon">
                            <i class="fas fa-birthday-cake"></i>
                            <input type="number" class="form-control" id="age" name="age" value="{{$student->age}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="class" class="form-label">Class:</label>
                <div class="input-icon">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="text" class="form-control" id="class" name="class" value="{{$student->class}}">
                </div>
            </div>

            <button type="submit" class="btn btn-update"><i class="fas fa-save me-2"></i>Update Details</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>