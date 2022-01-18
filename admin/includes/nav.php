
<header class="topHeaderWrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navstyle">
        <a class="navbar-brand mainbox" href="#" onclick="openfunction()"><i class="fas fa-bars"></i></a>
        <a class="navbar-brand ml-3 mr-4"  href="#">Rs-X</a>
        <form class="form-inline my-2 my-lg-0 d-none d-lg-block">
            <input class="form-control mr-sm-2 searchInput" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <?php
        $selectQuery="SELECT * FROM `login`";
        $runQuery=mysqli_query($connect,$selectQuery);
        while($row=mysqli_fetch_assoc($runQuery)){?>
            <?php

            if(isset($_COOKIE['currentAdmin'])){ ?>
                <a class="navbar-brand ml-auto" href="#"><i class="fas fa-user-tie"></i> <?php echo $row['email'] ?></a>
            <?php
                }

            ?>
        <?php
        }
        ?>
    </nav>
    <div id='menu' class='sidemenu'>