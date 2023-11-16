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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="style.css">
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
            <h1>Users</h1>
            <span class="searchbar">
                <input type="text" placeholder="Search..">
    </span><br><br>
            <div class="analyse">
                <?php
                   $limit = 12;  

                        $getQuery = "select *from user_form";    

                        $result = mysqli_query($conn, $getQuery);  

                        $total_rows = mysqli_num_rows($result);    

                        $total_pages = ceil ($total_rows / $limit);    

                        if (!isset ($_GET['page']) ) {  

                            $page_number = 1;  

                        } else {  

                            $page_number = $_GET['page'];  

                        }    

                        $initial_page = ($page_number-1) * $limit;   


                        $getQuery = "SELECT *FROM user_form ORDER BY id DESC LIMIT " . $initial_page . ',' . $limit;  

                        $result = mysqli_query($conn, $getQuery);        

                        while ($row = mysqli_fetch_array($result)) { 

?>
                <div class="searches">
                    
                    <div class="status">
                        
                        <div class="info">
                            <h3><?php echo $row["name"]; ?></h3>
                            <h1><?php echo $row["user_type"]; ?></h1>
                            <?php 
                            if ($row["name"] != $_SESSION["admin_name"]) {
                                ?>
                            <p><a style="background:red; color: white; border-radius: 10px; padding-inline: 8px;" href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></p><?php } ?>
                        </div>
                        <div class="progresss">
                            <div class="images">
                        <img style="width:100%; height:100px; border-radius:40%; object-fill:cover;" src="../upload/<?php echo $row["profile_image"]; ?>" alt="">
                        
                        </div>
                    </div>
                    </div>
                     
                </div>
            <?php } ?>
            </div><br><br>
            <?php for($page_number = 1; $page_number<= $total_pages; $page_number++) {  

        echo '<a style="padding-inline:8px; background-color:red; color:white; font-size:18px;" href = "user.php?page=' . $page_number . '">' . $page_number . ' </a>';  

    }    ?>
                    

               

            <!-- Recent Orders Table -->
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
                    <h2>Advertisement</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                
                <form action="./handlers/ads.php" method="post" class="form" enctype="multipart/form-data">

                    <label for="job">type the name of the ad here...</label>
                    <input type="text" required id="ads" name="ads">

                    <label for="job">type the description of the ad here...</label>
                    <textarea required id="addes" name="addes"></textarea>

                    <label for="image">attach image</label>
                    <input type="file" id="file" required name="file" accept="image/jpeg, image/jpg, image/png">
  
                    <input type="submit" value="submit">
                </form>
            </div>

        </div>

    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>