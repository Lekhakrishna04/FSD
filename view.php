<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <nav class="navbar navbar-expand bg-dark navbar-dark sticky-top" >
        <a href="index.html" class="navbar-brand">
            <img src="">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="register.html" class="nav-link">Register</a></li>
        </ul>
    </nav>
        </header>
        <main>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>Qualification</th>
                            <th>Image</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require_once 'db.php';
                        $stmt = $conn->prepare("SELECT * from user");
                        $stmt->execute();
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        $rows = $stmt->FetchAll();//$stmt is used to call anywhere and it consumes less memory//

                        foreach($rows as $row){
                            $fname = $row['fname'];
                            $lname = $row['lname'];
                            $dob = $row['dob'];
                            $qualification = $row['qualification'];
                            $file = $row['file'];
                            $email = $row['email'];
                            ?>
                            <tr>
                                <td><?php echo $fname;?></td>
                                <td><?php echo $lname;?></td>
                                <td><?php echo $dob;?></td>
                                <td><?php echo $qualification;?></td>
                                <td><img src="<?php echo $file;?>" alt="Image not found" width = 50px></td>
                                <td><?php echo $email;?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
            

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
