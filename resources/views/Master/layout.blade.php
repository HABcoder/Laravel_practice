<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
           .content {
            flex: 1;
        }
        
        footer {
            background: linear-gradient(to right, #2c3e50, #4a6fa5);
            color: white;
            padding: 3rem 0 1rem;
            margin-top: 10%;
        }
        
        .footer-heading {
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        
        .footer-heading:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: #6bb9f0;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #e0e0e0;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: #6bb9f0;
            padding-left: 5px;
        }
        
        .contact-info {
            list-style: none;
            padding: 0;
        }
        
        .contact-info li {
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-info i {
            margin-right: 10px;
            color: #6bb9f0;
            margin-top: 5px;
        }
        
        .social-icons {
            margin-top: 1.5rem;
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: white;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background: #6bb9f0;
            transform: translateY(-3px);
        }
        
        .newsletter-form {
            display: flex;
            margin-top: 1rem;
        }
        
        .newsletter-form input {
            flex-grow: 1;
            padding: 10px 15px;
            border: none;
            border-radius: 4px 0 0 4px;
            outline: none;
        }
        
        .newsletter-form button {
            background: #6bb9f0;
            color: white;
            border: none;
            padding: 0 15px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .newsletter-form button:hover {
            background: #4a90c8;
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 3rem;
            text-align: center;
            color: #e0e0e0;
            font-size: 0.9rem;
        }
        
        .footer-badge {
            background: #6bb9f0;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            display: inline-block;
            margin-top: 1rem;
        }
        
        .app-download {
            margin-top: 1.5rem;
        }
        
        .app-download a {
            display: block;
            margin-bottom: 10px;
        }
        
        .app-download img {
            height: 40px;
        }
    </style>
</head>
<body>
    
    @include('Partial.header');

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('Partial.footer');


    <!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>