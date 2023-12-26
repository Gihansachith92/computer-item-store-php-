<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Sign-up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
            background-image: url("Assest/Bg.jpg");
        }

        .container {
            margin-top: 5rem;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px; /* Increased border radius */
        }

        .card-header {
            background-color: #dc3545; /* Danger color */
            color: #fff; /* White text */
            border-top-left-radius: 15px; /* Match top-left border radius of the form */
            border-top-right-radius: 15px; /* Match top-right border radius of the form */
        }

        .btn-warning {
            background-color: #ffc107; /* Yellow color */
            color: #212529; /* Dark text */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- Reduced form width to col-md-6 -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Sign Up </h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="termsCheck" required>
                            <label class="form-check-label" for="termsCheck">I agree to the terms and conditions</label>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block mt-3">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
