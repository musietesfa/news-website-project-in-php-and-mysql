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
            
<h1>Jobs</h1>

            <div class="analyse">
                <?php
                        $sql = "SELECT *FROM jobs ORDER BY id DESC LIMIT 6" ;  
                        $headline = $conn->query($sql);       

                        while ($row = mysqli_fetch_array($headline)) { 

?>
                <div class="sales">
                   
                    <div class="status">
                         <div class="user-profile">
                <div class="logo">
                    <img src="./handlers/posts/<?php echo $row["jobimg"]; ?>">
                    <h2><?php echo $row["job"]; ?></h2>
                    <p><a style="background:red; color: white; border-radius: 10px; padding-inline: 8px;" href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></p>
                </div>
            </div>
        
        </div>
            </div>
                <?php } ?>
            </div>


<!--ads-->
    <h1>ADS</h1>
    <div class="analyse">
         <?php
                        $sql = "SELECT *FROM ads ORDER BY id DESC LIMIT 6" ;  
                        $headline = $conn->query($sql);       

                        while ($row = mysqli_fetch_array($headline)) { 

?>
                <div class="sales">
                    <div class="status">
                         <div class="user-profile">
                <div class="logo">
                    <img src="./handlers/posts/<?php echo $row["adimg"]; ?>">
                    <h2><?php echo $row["ads"]; ?></h2>
                    <p><a style="background:red; color: white; border-radius: 10px; padding-inline: 8px;" href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></p>
                </div>
            </div>
                    </div>
                </div>
                <?php } ?>
            </div>

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