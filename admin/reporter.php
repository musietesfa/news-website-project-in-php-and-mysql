<?php

require_once '../connection.php';
// php select option value from database

session_start();
// mysql select query
$query = "SELECT * FROM Badges";


$result1 = mysqli_query($conn, $query);

if (!isset($_SESSION['reporter_name'])) {

    header('location:login.php');

}
$reporter_name = $_SESSION['reporter_name'];

// Get the current user's information from the database.
$sql = "SELECT * FROM user_form WHERE name = '{$reporter_name}'";
$result = mysqli_query($conn, $sql);

// Get the current user's information from the database.
$reporter = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
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

.form {
    border-radius: 5px;
    padding: 40px;
}

.tabs {
  display: flex;
  flex-wrap: wrap;
  font-family: sans-serif;
  width:100%;
}

.tabs__label {
  padding: 10px 16px;
  cursor: pointer;
}

.tabs__radio {
  display: none;
}

.tabs__content {
  order: 1;
  width: 100%;
  border-bottom: 3px solid red;
  line-height: 1.5;
  font-size: 0.9em;
  display: none;
}

.tabs__radio:checked + .tabs__label {
  font-weight: bold;
  color: red;
  border-bottom: 2px solid red;
}

.tabs__radio:checked + .tabs__label + .tabs__content {
  display: initial;
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
                    <h2>ETV<span class="danger"> Reporter</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="contents.php">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Update contents</h3>
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
            <h1>Dashboard</h1>

            <!-- Recent Orders Table -->
            

            <div class="recent-orders">
                <h2>news</h2>


              <div class="tabs">
                    <input type="radio" class="tabs__radio" name="tabs-example" id="tab1" checked>
                    <label for="tab1" class="tabs__label">Headlines</label>
                    <div class="tabs__content">


                    <form action="./handlers/headline.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="news">type the news here...</label>
                    <textarea id="news" required name="news" type="text"></textarea>

                    <label for="image">attach image</label>
                    <input type="file" id="file" name="file" required accept="image/jpeg, image/jpg, image/png">
                    <br><br>
                    <label for="badges"><b>Badges</b></label>
                    <select id="badges" name="badges" required>

            <?php
            $query = "SELECT * FROM Badges";


            $result1 = mysqli_query($conn, $query);

            while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

                    </select>

  
                    <input type="submit" name="submit" value="submit">
                </form>
                    </div>

                    <input type="radio" class="tabs__radio" name="tabs-example" id="tab2">
                    <label for="tab2" class="tabs__label">Popular</label>
                    <div class="tabs__content">

                    <form action="./handlers/popular.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="news">type the news here...</label>
                    <textarea required id="news" name="news"></textarea>

                    <label for="image">attach image</label>
                    <input type="file" id="file" name="file" required accept="image/jpeg, image/jpg, image/png">
                    <br><br>
                    <label for="badges"><b>Badges</b></label>
                    <select id="badges" name="badges" required>

            <?php
            $query = "SELECT * FROM Badges";


            $result1 = mysqli_query($conn, $query);

            while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>
                    </select>

  
                    <input type="submit" name="submit" value="submit">
                </form>
                    </div>

                    <input type="radio" class="tabs__radio" name="tabs-example" id="tab4">
                    <label for="tab4" class="tabs__label">Breaking</label>
                    <div class="tabs__content">

                    <form action="./handlers/breaking.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="news">type the news here...</label>
                    <textarea required id="news" name="news"></textarea>

                    <label for="image">attach image</label>
                    <input type="file" id="file" name="file" required accept="image/jpeg, image/jpg, image/png">
                    <br><br>
                    <label for="badges"><b>Badges</b></label>
                    <select id="badges" name="badges" required>

            <?php
            $query = "SELECT * FROM Badges";


            $result1 = mysqli_query($conn, $query);

            while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

                    </select>

  
                    <input type="submit" name="submit" value="submit">
                </form>
                    </div>

                    <input type="radio" class="tabs__radio" name="tabs-example" id="tab5">
                    <label for="tab5" class="tabs__label">Featured</label>
                    <div class="tabs__content">

                    <form action="./handlers/featured.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="news">type the news here...</label>
                    <textarea required id="news" name="news"></textarea>

                    <label for="image">attach image</label>
                    <input type="file" id="file" name="file" required accept="image/jpeg, image/jpg, image/png">
                    <br><br>
                    <label for="badges"><b>Badges</b></label>
                    <select id="badges" name="badges" required>

            <?php
            $query = "SELECT * FROM Badges";


            $result1 = mysqli_query($conn, $query);

            while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

                    </select>

  
                    <input type="submit" name="submit" value="submit">
                </form>
                    </div>

                    <input type="radio" class="tabs__radio" name="tabs-example" id="tab6">
                    <label for="tab6" class="tabs__label">Large Latest</label>
                    <div class="tabs__content">

                    <form action="./handlers/lln.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="news">type the news here...</label>
                    <textarea required id="news" name="news"></textarea>

                    <label for="image">attach image</label>
                    <input type="file" id="file" required name="file" accept="image/jpeg, image/jpg, image/png">
                    <br><br>
                    <label for="badges"><b>Badges</b></label>
                    <select id="badges" name="badges" required>

            <?php
            $query = "SELECT * FROM Badges";


            $result1 = mysqli_query($conn, $query);

            while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

                    </select>

  
                    <input type="submit" name="submit" value="submit">
                </form>
                    </div>

                    <input type="radio" class="tabs__radio" name="tabs-example" id="tab7">
                    <label for="tab7" class="tabs__label">Medium Latest</label>
                    <div class="tabs__content">

                    <form action="./handlers/mln.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="news">type the news here...</label>
                    <textarea required id="news" name="news"></textarea>

                    <label for="image">attach image</label>
                    <input type="file" id="file" required name="file" accept="image/jpeg, image/jpg, image/png">
                    <br><br>
                    <label for="badges"><b>Badges</b></label>
                    <select id="badges" name="badges" required>

            <?php
            $query = "SELECT * FROM Badges";


            $result1 = mysqli_query($conn, $query);

            while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

                    </select>

  
                    <input type="submit" name="submit" value="submit">
                </form>
                    </div>

                    <input type="radio" class="tabs__radio" name="tabs-example" id="tab8">
                    <label for="tab8" class="tabs__label">Small Latest</label>
                    <div class="tabs__content">

                    <form action="./handlers/sln.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="news">type the news here...</label>
                    <textarea required id="news" name="news"></textarea>

                    <label for="image">attach image</label>
                    <input type="file" id="file" required name="file" accept="image/jpeg, image/jpg, image/png">
                    <br><br>
                    <label for="badges"><b>Badges</b></label>
                    <select id="badges" name="badges" required>

            <?php
            $query = "SELECT * FROM Badges";


            $result1 = mysqli_query($conn, $query);

            while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>
                    </select>

  
                    <input type="submit" name="submit" value="submit">
                </form>
                    </div>

                    <input type="radio" class="tabs__radio" name="tabs-example" id="tab9">
                    <label for="tab9" class="tabs__label">Trending</label>
                    <div class="tabs__content">

                    <form action="../handlers/trending.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="news">type the news here...</label>
                    <textarea required id="news" name="news"></textarea>

                    <label for="image">attach image</label>
                    <input type="file" id="file" required name="file" accept="image/jpeg, image/jpg, image/png">
                    <br><br>
                    <label for="badges"><b>Badges</b></label>
                    <select id="badges" name="badges" required>

            <?php
            $query = "SELECT * FROM Badges";


            $result1 = mysqli_query($conn, $query);

            while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

                    </select>

  
                    <input type="submit" name="submit" value="submit">
                </form>
                    </div>
                </div>


                <!--add badges-->

                <form action="./handlers/badges.php" method="post" class="form" enctype="multipart/form-data">
                    <label for="job">Badges</label>
                    <input type="text" required id="badge" name="badge">
                    <input type="submit" name="submit" value="Add Badges">
                </form>
            <!--End of Recent Orders -->

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
                        <p>Hey, <b><?php echo $reporter['name']; ?></b></p>
                        <small class="text-muted"><?php echo $reporter['user_type']; ?></small>
                    </div>
                    <div class="profile-photo">
                        <img src="../upload/<?php echo $reporter['profile_image']; ?>">
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

           

        </div>

    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>