<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Sign-in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover; /* Cover the entire background */
            background-position: center;
            font-family: sans-serif;
            background-image: url("Assest/Bg.jpg");
            background-repeat: no-repeat;
            background-color: #1e1b1b;
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
            background-color:#dc3545; /* Primary color for sign-in */
            color: #fff; /* White text */
            border-top-left-radius: 15px; /* Match top-left border radius of the form */
            border-top-right-radius: 15px; /* Match top-right border radius of the form */
        }

        .btn-primary {
            background-color: #007bff; /* Primary color for sign-in */
            color: #fff; /* White text */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- Reduced form width to col-md-6 -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Sign In</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block mt-3">Sign In</button>
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
