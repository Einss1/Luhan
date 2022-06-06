<?php
require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php';
session_start();

if(!isset($_SESSION['id'])) {
    $sql="SELECT * FROM kanjis WHERE level = '1' ORDER BY rand()";
    $results = mysqli_query($conn,$sql);
    
    if ($results) {
        while ($row=mysqli_fetch_array($results)) {
            $id = $row['id'];
        }
    }    

  $_SESSION['id'] = $id;
  $_SESSION['seenRight'] = array();
  $_SESSION['seenWrong'] = array();
}

else{
    if (count($_SESSION['seenRight']) == 10) {
        echo "hi"; // Save number of wrong ones and return to review page while also locking level 1 accordingly with the amount of wrong ones
    }
    if(isset($_POST['next'])){
        $userLevel = returnUserLevel($conn);
        $sql="SELECT * FROM kanjis WHERE level = '1' and id = '".$_SESSION['id']."'";
        $results = mysqli_query($conn,$sql);
    
        if ($results) {
            while ($row=mysqli_fetch_array($results)) {
                $id = $row['id'];
                $kanji = $row['kanji'];
                $meaning = $row['meaning'];
            }
            if(isset($meaning)){
                $meaningCaps = strtoupper($meaning);
                $meaningFirstLetterCaps =  ucfirst($meaning);
                $meaningInput = $_POST['meaningInput'];

                if ($meaningInput == $meaning || $meaningInput == $meaningCaps || $meaningInput == $meaningFirstLetterCaps) {
                    if (!in_array($id, $_SESSION['seenRight'])) {
                        array_push($_SESSION['seenRight'],$id);
                        if (count($_SESSION['seenRight']) == 10) {
                            echo "hi"; // Save number of wrong ones and return to review page while also locking level 1 accordingly with the amount of wrong ones
                        }
                    }

                    if (in_array($id, $_SESSION['seenRight'])) {
                        $sql="SELECT * FROM kanjis WHERE level = '1' ORDER BY rand()";
                        $results2 = mysqli_query($conn,$sql);
                        
                        if ($results2) {
                            while ($row=mysqli_fetch_array($results2)) {
                                $id = $row['id'];
                            }
                        }
                        if (in_array($id, $_SESSION['seenRight'])){
                            $results2 = mysqli_query($conn,$sql);
                        
                            if ($results2) {
                                while ($row=mysqli_fetch_array($results2)) {
                                    $id = $row['id'];
                                }
                            }
                            if (in_array($id, $_SESSION['seenRight'])){
                                $results2 = mysqli_query($conn,$sql);
                            
                                if ($results2) {
                                    while ($row=mysqli_fetch_array($results2)) {
                                        $id = $row['id'];
                                    }
                                }   
                            } else {
                                $_SESSION['id'] = $id;
                            }
                            if (in_array($id, $_SESSION['seenRight'])){
                                $results2 = mysqli_query($conn,$sql);
                            
                                if ($results2) {
                                    while ($row=mysqli_fetch_array($results2)) {
                                        $id = $row['id'];
                                    }
                                }
                                if (in_array($id, $_SESSION['seenRight'])){
                                    $results2 = mysqli_query($conn,$sql);
                                
                                    if ($results2) {
                                        while ($row=mysqli_fetch_array($results2)) {
                                            $id = $row['id'];
                                        }
                                    }
                                        if (in_array($id, $_SESSION['seenRight'])){
                                            $results2 = mysqli_query($conn,$sql);
                                    
                                            if ($results2) {
                                                while ($row=mysqli_fetch_array($results2)) {
                                                    $id = $row['id'];
                                                }
                                            }
                                            if (in_array($id, $_SESSION['seenRight'])){
                                                $results2 = mysqli_query($conn,$sql);
                                        
                                                if ($results2) {
                                                    while ($row=mysqli_fetch_array($results2)) {
                                                        $id = $row['id'];
                                                    }
                                                }
                                                if (in_array($id, $_SESSION['seenRight'])){
                                                    $results2 = mysqli_query($conn,$sql);
                                            
                                                    if ($results2) {
                                                        while ($row=mysqli_fetch_array($results2)) {
                                                            $id = $row['id'];
                                                        }
                                                    }
                                                    if (in_array($id, $_SESSION['seenRight'])){
                                                        $results2 = mysqli_query($conn,$sql);
                                                
                                                        if ($results2) {
                                                            while ($row=mysqli_fetch_array($results2)) {
                                                                $id = $row['id'];
                                                            }
                                                        }
                                                        if (in_array($id, $_SESSION['seenRight'])){
                                                            $results2 = mysqli_query($conn,$sql);
                                                    
                                                            if ($results2) {
                                                                while ($row=mysqli_fetch_array($results2)) {
                                                                    $id = $row['id'];
                                                                }
                                                            }
                                                            if (in_array($id, $_SESSION['seenRight'])){
                                                                $results2 = mysqli_query($conn,$sql);
                                                        
                                                                if ($results2) {
                                                                    while ($row=mysqli_fetch_array($results2)) {
                                                                        $id = $row['id'];
                                                                    }
                                                                }
                                                                if (in_array($id, $_SESSION['seenRight'])){
                                                                    $results2 = mysqli_query($conn,$sql);
                                                            
                                                                    if ($results2) {
                                                                        while ($row=mysqli_fetch_array($results2)) {
                                                                            $id = $row['id'];
                                                                        }
                                                                    } 
                                                                    if (in_array($id, $_SESSION['seenRight'])){
                                                                        $results2 = mysqli_query($conn,$sql);
                                                                
                                                                        if ($results2) {
                                                                            while ($row=mysqli_fetch_array($results2)) {
                                                                                $id = $row['id'];
                                                                            }
                                                                        }
                                                                        if (in_array($id, $_SESSION['seenRight'])){
                                                                            $results2 = mysqli_query($conn,$sql);
                                                                    
                                                                            if ($results2) {
                                                                                while ($row=mysqli_fetch_array($results2)) {
                                                                                    $id = $row['id'];
                                                                                }
                                                                            }
                                                                            if (in_array($id, $_SESSION['seenRight'])){
                                                                                $results2 = mysqli_query($conn,$sql);
                                                                        
                                                                                if ($results2) {
                                                                                    while ($row=mysqli_fetch_array($results2)) {
                                                                                        $id = $row['id'];
                                                                                    }
                                                                                }
                                                                                if (in_array($id, $_SESSION['seenRight'])){
                                                                                    $results2 = mysqli_query($conn,$sql);
                                                                            
                                                                                    if ($results2) {
                                                                                        while ($row=mysqli_fetch_array($results2)) {
                                                                                            $id = $row['id'];
                                                                                        }
                                                                                    }
                                                                                    if (in_array($id, $_SESSION['seenRight'])){
                                                                                        $results2 = mysqli_query($conn,$sql);
                                                                                
                                                                                        if ($results2) {
                                                                                            while ($row=mysqli_fetch_array($results2)) {
                                                                                                $id = $row['id'];
                                                                                            }
                                                                                        }
                                                                                        if (in_array($id, $_SESSION['seenRight'])){
                                                                                            $results2 = mysqli_query($conn,$sql);
                                                                                    
                                                                                            if ($results2) {
                                                                                                while ($row=mysqli_fetch_array($results2)) {
                                                                                                    $id = $row['id'];
                                                                                                }
                                                                                            }
                                                                                            if (in_array($id, $_SESSION['seenRight'])){
                                                                                                $results2 = mysqli_query($conn,$sql);
                                                                                        
                                                                                                if ($results2) {
                                                                                                    while ($row=mysqli_fetch_array($results2)) {
                                                                                                        $id = $row['id'];
                                                                                                    }
                                                                                                }
                                                                                                if (in_array($id, $_SESSION['seenRight'])){
                                                                                                    $results2 = mysqli_query($conn,$sql);
                                                                                            
                                                                                                    if ($results2) {
                                                                                                        while ($row=mysqli_fetch_array($results2)) {
                                                                                                            $id = $row['id'];
                                                                                                        }
                                                                                                    }
                                                                                                    if (in_array($id, $_SESSION['seenRight'])){
                                                                                                        $results2 = mysqli_query($conn,$sql);
                                                                                                
                                                                                                        if ($results2) {
                                                                                                            while ($row=mysqli_fetch_array($results2)) {
                                                                                                                $id = $row['id'];
                                                                                                            }
                                                                                                        }
                                                                                                        if (in_array($id, $_SESSION['seenRight'])){
                                                                                                            $results2 = mysqli_query($conn,$sql);
                                                                                                    
                                                                                                            if ($results2) {
                                                                                                                while ($row=mysqli_fetch_array($results2)) {
                                                                                                                    $id = $row['id'];
                                                                                                                }
                                                                                                            }                           
                                                                                                        } else {
                                                                                                            $_SESSION['id'] = $id;
                                                                                                        }                           
                                                                                                    } else {
                                                                                                        $_SESSION['id'] = $id;
                                                                                                    }                           
                                                                                                } else {
                                                                                                    $_SESSION['id'] = $id;
                                                                                                }                           
                                                                                            } else {
                                                                                                $_SESSION['id'] = $id;
                                                                                            }                           
                                                                                        } else {
                                                                                            $_SESSION['id'] = $id;
                                                                                        }                           
                                                                                    } else {
                                                                                        $_SESSION['id'] = $id;
                                                                                    }                           
                                                                                } else {
                                                                                    $_SESSION['id'] = $id;
                                                                                }                           
                                                                            } else {
                                                                                $_SESSION['id'] = $id;
                                                                            }                       
                                                                        } else {
                                                                            $_SESSION['id'] = $id;
                                                                        }                        
                                                                    } else {
                                                                        $_SESSION['id'] = $id;
                                                                    }                          
                                                                } else {
                                                                    $_SESSION['id'] = $id;
                                                                }
                                                            } else {
                                                                $_SESSION['id'] = $id;
                                                            }
                                                        } else {
                                                            $_SESSION['id'] = $id;
                                                        }
                                                    } else {
                                                        $_SESSION['id'] = $id;
                                                    }
                                                } else {
                                                    $_SESSION['id'] = $id;
                                                }
                                            } else {
                                                $_SESSION['id'] = $id;
                                            }
                                        } else {
                                            $_SESSION['id'] = $id;
                                        }
                                    } else {
                                        $_SESSION['id'] = $id;
                                    }
                                } else {
                                    $_SESSION['id'] = $id;
                                }
                            } else {
                                $_SESSION['id'] = $id;
                        }
                    }
                }

                if ($meaningInput != $meaning && $meaningCaps && $meaningFirstLetterCaps) {
                    echo '<div class="meaning">'."The correct answer was: ".$meaningFirstLetterCaps.'</div>';
                    if (!in_array($id, $_SESSION['seenWrong']) ) {
                        array_push($_SESSION['seenWrong'],$id);
                    }

                    if (in_array($id, $_SESSION['seenWrong'])) {
                        $sql="SELECT * FROM kanjis WHERE level = '1' ORDER BY rand()";
                        $results2 = mysqli_query($conn,$sql);
                        if ($results2) {
                            while ($row=mysqli_fetch_array($results2)) {
                                $id = $row['id'];
                            }
                        }
                        if (in_array($id, $_SESSION['seenRight'])) {
                            $results2 = mysqli_query($conn,$sql);
                            if ($results2) {
                                while ($row=mysqli_fetch_array($results2)) {
                                    $id = $row['id'];
                                }  
                            }
                            if (in_array($id, $_SESSION['seenRight'])) {
                                $results2 = mysqli_query($conn,$sql);
                                if ($results2) {
                                    while ($row=mysqli_fetch_array($results2)) {
                                        $id = $row['id'];
                                    }  
                                }
                                if (in_array($id, $_SESSION['seenRight'])) {
                                    $results2 = mysqli_query($conn,$sql);
                                    if ($results2) {
                                        while ($row=mysqli_fetch_array($results2)) {
                                            $id = $row['id'];
                                        }  
                                    }
                                    if (in_array($id, $_SESSION['seenRight'])) {
                                        $results2 = mysqli_query($conn,$sql);
                                        if ($results2) {
                                            while ($row=mysqli_fetch_array($results2)) {
                                                $id = $row['id'];
                                            }  
                                        }
                                        if (in_array($id, $_SESSION['seenRight'])) {
                                            $results2 = mysqli_query($conn,$sql);
                                            if ($results2) {
                                                while ($row=mysqli_fetch_array($results2)) {
                                                    $id = $row['id'];
                                                }  
                                            }
                                            if (in_array($id, $_SESSION['seenRight'])) {
                                                $results2 = mysqli_query($conn,$sql);
                                                if ($results2) {
                                                    while ($row=mysqli_fetch_array($results2)) {
                                                        $id = $row['id'];
                                                    }  
                                                }
                                                if (in_array($id, $_SESSION['seenRight'])) {
                                                    $results2 = mysqli_query($conn,$sql);
                                                    if ($results2) {
                                                        while ($row=mysqli_fetch_array($results2)) {
                                                            $id = $row['id'];
                                                        }  
                                                    }
                                                    if (in_array($id, $_SESSION['seenRight'])) {
                                                        $results2 = mysqli_query($conn,$sql);
                                                        if ($results2) {
                                                            while ($row=mysqli_fetch_array($results2)) {
                                                                $id = $row['id'];
                                                            }  
                                                        }
                                                        if (in_array($id, $_SESSION['seenRight'])) {
                                                            $results2 = mysqli_query($conn,$sql);
                                                            if ($results2) {
                                                                while ($row=mysqli_fetch_array($results2)) {
                                                                    $id = $row['id'];
                                                                }  
                                                            }
                                                        } else {
                                                            $_SESSION['id'] = $id;
                                                        }
                                                    } else {
                                                        $_SESSION['id'] = $id;
                                                    }
                                                } else {
                                                    $_SESSION['id'] = $id;
                                                }
                                            } else {
                                                $_SESSION['id'] = $id;
                                            }
                                        } else {
                                            $_SESSION['id'] = $id;
                                        }
                                    } else {
                                        $_SESSION['id'] = $id;
                                    }
                                } else {
                                    $_SESSION['id'] = $id;
                                }
                            } else {
                                $_SESSION['id'] = $id;
                            }
                        } else {
                            $_SESSION['id'] = $id;
                        }

                        while (in_array($id, $_SESSION['seenRight'])) {
                            $sql="SELECT * FROM kanjis WHERE level = '1' ORDER BY rand()";
                            $results2 = mysqli_query($conn,$sql);
                            
                            if ($results2) {
                                while ($row=mysqli_fetch_array($results2)) {
                                    $id = $row['id'];
                                }
                            }
                                $_SESSION['id'] = $id;
                        }
                    }
                }
            }
        }
    }
}

$userLevel = returnUserLevel($conn);
$sql="SELECT * FROM kanjis WHERE level <= '$userLevel' and id = '".$_SESSION['id']."'";
$results = mysqli_query($conn,$sql);

if ($results) {
    while ($row=mysqli_fetch_array($results)) {
        $id = $row['id'];
        $kanji = $row['kanji'];
        $meaning = $row['meaning'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Lumorah</title>
        <link rel="icon" type="image/x-icon" href="Images/monkeylogo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <style><?php include '../CSS/newkanjis.css'?></style>
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">Lumorah</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php 
                if(isset($_SESSION["useruid"])) {
                    echo '<li class="nav-item"><a class="nav-link"href="../homepage.php">Homepage </a></li>';
                    echo '<li class="nav-item"><a class="nav-link"href="../profile.php">Profile </a></li>';
                    echo '<li class="nav-item"><a class="nav-link"href="../includes/logout.inc.php"> Log out </a></li>';
                }
                else {
                    header("location: ../luhan/login.php");
                }
            ?>
                        </ul>
                    </div>
                </div>
            </nav>
    
</body>
    <center>
        <img src="https://dummyimage.com/600x300/343a40/6c757d" id="icon"> <br><br>
        
        <br><br><br><br>

        <div>
            <p><?php if(isset($kanji) && ($kanji!==null)) {
                        echo $kanji;
                        ?><form name="exam" method="post" action="level1.php" autocomplete="off">
                            <input type=text name="meaningInput" required> <br> <br>

                            <input type="submit" name="next" value="Next">
                        </form> <?php
                    } else {
                        echo "No more kanjis for now!";
                    }     ?></p>
        </div>
    </center>
</html>