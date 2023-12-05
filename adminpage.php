            <?php
    // Start session
    session_start();

    $editbutton_pressed = false;

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "userdb");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle form submission
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    
        // Update the user information in the database
        $update_sql = "UPDATE user SET name='$name', email_address='$email', messagedata='$message' WHERE id='$id'";
        mysqli_query($conn, $update_sql);
    
        header("Location: adminpage.php");
        exit();
    }
    
    // If 'edit' parameter is present in URL, display the edit form
    if (isset($_GET['edit'])) {
        $editbutton_pressed = true;
        $id = $_GET['edit'];
    
        $sql = "SELECT * FROM user WHERE id = $id";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $email = $row['email_address'];
            $message = $row['messagedata'];
        }
    
    }
    //Query database for data
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    ?>



    <!DOCTYPE html>
    <html>
    <head>
        <title>Admin Page</title>
            <link rel="icon" href="icon_path" type="image/logo.png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    </head>
    <style>
        /* Navbar styles */
        .navbar-custom {
            background: linear-gradient(135deg, #8A2BE2, #4169E1);
        }
    </style>
    <body>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="img/logo.png" alt="" width="35" height="30" class="d-inline-block align-text-top"> 5B PRINTING </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white fw-bold">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <br>


        <section class="intro">
        <div class="bg-image h-100" style="background-image: url('img/bg.png');">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card mask-custom">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-borderless text-white mb-0">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                <tbody>
                <?php
                // Fetch data from the database
                while ($row = $result->fetch_assoc()):?>
                <tr>
                <td style="color: white; font-weight: bold; font-family: sans-serif;"><?php echo $row['name']; ?></td>
<td style="color: white; font-weight: bold; font-family: sans-serif;"><?php echo $row['email_address']; ?></td>
<td style="color: white; font-weight: bold; font-family: sans-serif;"><?php echo $row['messagedata']; ?></td>


                    <td>
                        <a href="adminpage.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                        <a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>
                <?php endwhile; ?>
                </table>
        
    </div>

    
    
    <?php if ($editbutton_pressed): ?>
    <!-- Display edit form -->
   <br><br> <h2>Edit User Information</h2>
    <form method="post" action="adminpage.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea class="form-control" id="message" name="message"><?php echo $message; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php endif; ?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>
