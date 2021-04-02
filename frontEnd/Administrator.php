<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "US-ASCII">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Title>Admin Page</Title>
    <link rel="stylesheet" href="admin.css">
</head>
    
<body>

<header>
    <nav>
        <h1> Hello <?php echo $_SESSION['Fname']; ?> <?php echo $_SESSION['Lname'];?> </h1>
        <ul class="tabs">
            <li class="tab is-active">
                <a data-switcher data-tab="1"> Add Course </a>
            </li>
            <li class="tab">
                <a data-switcher data-tab="2"> Remove Course </a>
            </li>
            <li class="tab">
                <a data-switcher data-tab="3"> Add Student </a>
            </li>
            <li class="tab">
                <a data-switcher data-tab="4"> Remove Student </a>
            </li>
        </ul>
    </nav>
</header>

<main>
    <section class="pages"> 
    <div class="page is-active" data-page="1">
        <h2>Page 1</h2>
        <p>Welcome to the Add course page</p>
    </div>
    <div class="page" data-page="2">
        <h2>Page 2</h2>
        <p>Welcome to the remove Course page</p>
    </div>
    <div class="page" data-page="3">
        <h2>Page 3</h2>
        <p>Welcome to the add student page</p>
    </div>
    <div class="page" data-page="4">
        <h2>Page 4</h2>
        <p>Welcome to the remove student page</p>
    </div>
    </section>
</main>

<script src="admin.js"></script>
</body>
</html>
