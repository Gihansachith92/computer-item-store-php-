<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechHaven</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
            background: #1e1b1b;
             /* Background color set to #1e1b1b */
        }

        .navbar {
            background-color: transparent;
            position: relative;
        }

        .navbar-toggler-icon {
            background-color: orange;
        }

        .navbar-nav .nav-link {
            color: orange !important; /* Override Bootstrap styles for link color */
        }

        .navbar-nav .nav-item.active .nav-link {
            color: white !important; /* Override Bootstrap styles for active link color */
        }

        .navbar-nav .nav-link:hover {
            color: white !important; /* Override Bootstrap styles for link color on hover */
        }

        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        /* Left Section - 20% */
        .left-section {
            background-color: #6c757d;
            padding: 20px;
            min-height: 50vh; /* Adjust as needed */
        }

        /* Right Section - 80% */
        .right-section {
            background-color: #f8f9fa;
            padding: 20px;
        }

        /* Vertical Cards in Left Section */
        .left-card {
            background-color: #ffffff;
            margin-bottom: 5px;
            padding: 10px;
        }

        /* Three Cards Per Row in Right Section */
        .right-card {
            background-color: #ffffff;
            margin-bottom: 20px;
            padding: 20px;
        }

        @media (min-width: 768px) {
            .right-card {
                width: calc(33.3333% - 20px); /* 3 cards per row with margin between them */
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand " href="#">Your Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 ml-5 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Left Section - 20% -->
            <div class="col-md-3 left-section">
                <div class="left-card">
                    <h5>Card 1</h5>
                    <p>Content of Card 1</p>
                </div>
                <div class="left-card">
                    <h5>Card 2</h5>
                    <p>Content of Card 2</p>
                </div>
                <div class="left-card">
                    <h5>Card 3</h5>
                    <p>Content of Card 3</p>
                </div>
                <!-- Add more left-side content as needed -->
                <div class="left-card">
                    <h5>Card 4</h5>
                    <p>Content of Card 4</p>
                </div>
                <div class="left-card">
                    <h5>Card 5</h5>
                    <p>Content of Card 5</p>
                </div>
            </div>

            <!-- Right Section - 80% -->
            <div class="col-md-9 right-section">
                <div class="row">
                    <div class="col-md-4 right-card">
                        <h5>Card 1</h5>
                        <p>Content of Card 1</p>
                    </div>
                    <div class="col-md-4 right-card">
                        <h5>Card 2</h5>
                        <p>Content of Card 2</p>
                    </div>
                    <div class="col-md-4 right-card">
                        <h5>Card 3</h5>
                        <p>Content of Card 3</p>
                    </div>
                    <!-- Add more right-side content as needed -->
                    <div class="col-md-4 right-card">
                        <h5>Card 4</h5>
                        <p>Content of Card 4</p>
                    </div>
                    <div class="col-md-4 right-card">
                        <h5>Card 5</h5>
                        <p>Content of Card 5</p>
                    </div>
                    <div class="col-md-4 right-card">
                        <h5>Card 6</h5>
                        <p>Content of Card 6</p>
                    </div>
                </div>
                <!-- Add more rows of cards as needed -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
