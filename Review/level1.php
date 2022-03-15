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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <style><?php include '../CSS/review.css'; ?></style>
        
</head>

<body>
    
</body>
    <center>
        <img src="../Images/logo2.png" id="icon"> <br><br>

        <?php 
            if(isset($_SESSION["useruid"])) {
                echo "<li><a href='../homepage.php'>Homepage</a></li>";
            }else {
                header("location: login.php");
            }
        ?>
        
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