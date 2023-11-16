<?php
require_once '../connection.php';

session_start();
if (!isset($_SESSION['admin_name'])) {

    header('location:login.php');

}
$admin_name = $_SESSION['admin_name'];

// Get the current user's information from the database.
$sql = "SELECT * FROM user_form WHERE name = '{$admin_name}'";
$result = mysqli_query($conn, $sql);

// Get the current user's information from the database.
$admin = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
    <style>
        input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: white;
    color: red;
}
    </style>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="../img/etv.png">
                    <h2>ETV<span class="danger"> ADMIN</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <div class="sidebar">
                <a href="index.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="contents.php">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Update contents</h3>
                </a>
                <a href="user.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Users</h3>
                </a>
                <a href="history.php">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>History</h3>
                </a>
                
                </a>
                <a href="settings.php">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>
                </a>
                <a href="logout.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Settings</h1>

            
            
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="new-users">
                <h2>New Users</h2>

                <div class="user-list">
                    <?php
                        $sql = "SELECT *FROM user_form ORDER BY id DESC LIMIT 4" ;  
                        $headline = $conn->query($sql);       

                        while ($row = mysqli_fetch_array($headline)) { 

?>
                    <div class="user">
                        
                        <img src="../upload/<?php echo $row["profile_image"]; ?>">
                        <h2><?php echo $row["name"]; ?></h2><?php
                        if ($row["name"] != $_SESSION["admin_name"]) 
                        {
                        ?>
                        <p><a style="background:red; color: white; border-radius: 10px; padding-inline: 8px;" href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></p>
                            <?php } ?>
                        
                    
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="new-users">
                <h2>Delete Reporter</h2>
                <div class="user-list">
                    <?php
                    $sql = "SELECT * FROM user_form WHERE user_type IN ('reporter') ORDER BY id DESC LIMIT 4";
                    $repo = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($repo)) {

?>
                    <div class="user">
                        <img src="../upload/<?php echo $row["profile_image"]; ?>">
                        <h2><?php echo $row["name"]; ?></h2>
                        <p><?php echo $row["user_type"]; ?></p>
                        <p><a style="background:red; color: white; border-radius: 10px; padding-inline: 8px;" href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a>
                    </div>
                <?php } ?>
                    
                </div>
            </div>


            <div class="new-users">
                <h2>Delete HR user</h2>
                <div class="user-list">
                    <?php
                    $sql = "SELECT * FROM user_form WHERE user_type IN ('employer') ORDER BY id DESC LIMIT 4";
                    $repo = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($repo)) {

?>
                    <div class="user">
                        <img src="../upload/<?php echo $row["profile_image"]; ?>">
                        <h2><?php echo $row["name"]; ?></h2>
                        <p><?php echo $row["user_type"]; ?></p>
                        <p><a style="background:red; color: white; border-radius: 10px; padding-inline: 8px;"> href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a>
                    </div><?php } ?>
                    <!--<div class="user">
                        <img src="images/profile-3.jpg">
                        <h2>Amir</h2>
                        <p>3 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="images/profile-4.jpg">
                        <h2>Ember</h2>
                        <p>6 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="images/plus.png">
                        <h2>More</h2>
                        <p>New User</p>
                    </div>-->
                </div>
            </div>
            <!-- End of New Users Section -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?php echo $admin['name']; ?></b></p>
                        <small class="text-muted"><?php echo $admin['user_type']; ?></small>
                    </div>
                    <div class="profile-photo">
                        <img src="../upload/<?php echo $admin['profile_image']; ?>">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="../img/etv.png">
                    <h2>ETV</h2>
                    <p>Your Trusted News Channel</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>
</html>