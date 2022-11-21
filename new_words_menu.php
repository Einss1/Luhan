<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
session_start();
$userLevel = returnUserLevel($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>New Kanjis</title>
        <link rel="icon" type="image/x-icon" href="Images/monkeylogo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <style><?php include 'CSS/newkanjis.css'?></style>
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
                    echo '<li class="nav-item"><a class="nav-link"href="homepage.php">Homepage </a></li>';
                    echo '<li class="nav-item"><a class="nav-link"href="profile.php">Profile </a></li>';
                    echo '<li class="nav-item"><a class="nav-link"href="includes/logout.inc.php"> Log out </a></li>';
                }
                else {
                    header("location: ../luhan/login/index.php");
                }
            ?>
                        </ul>
                    </div>
                </div>
            </nav>
    <center> 
        <img src="https://dummyimage.com/600x300/343a40/6c757d" id="icon"> <br><br>

        <div class="slideshow-container">
            <div class="mySlides">
            <?php if ($userLevel >= 1){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>1 <?php if ($userLevel < 1){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 2){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=2'" ;>2 <?php if ($userLevel < 2){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 3){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=3'" ;>3 <?php if ($userLevel < 3){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 4){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=4'" ;>4 <?php if ($userLevel < 4){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 5){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=5'" ;>5 <?php if ($userLevel < 5){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 6){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=6'" ;>6 <?php if ($userLevel < 6){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 7){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>7 <?php if ($userLevel < 7){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 8){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>8 <?php if ($userLevel < 8){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 9){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>9 <?php if ($userLevel < 9){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 10){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>10 <?php if ($userLevel < 10){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 11){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>11 <?php if ($userLevel < 11){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 12){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>12 <?php if ($userLevel < 12){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 13){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>13 <?php if ($userLevel < 13){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 14){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>14 <?php if ($userLevel < 14){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 15){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>15 <?php if ($userLevel < 15){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 16){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>16 <?php if ($userLevel < 16){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 17){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>17 <?php if ($userLevel < 17){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 18){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>18 <?php if ($userLevel < 18){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 19){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>19 <?php if ($userLevel < 19){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 20){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>20 <?php if ($userLevel < 20){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 21){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>21 <?php if ($userLevel < 21){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 22){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>22 <?php if ($userLevel < 22){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 23){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>23 <?php if ($userLevel < 23){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 24){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>24 <?php if ($userLevel < 24){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 25){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>25 <?php if ($userLevel < 25){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 26){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>26 <?php if ($userLevel < 26){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 27){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>27 <?php if ($userLevel < 27){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 28){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>28 <?php if ($userLevel < 28){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 29){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>29 <?php if ($userLevel < 29){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 30){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>30 <?php if ($userLevel < 30){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 31){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>31 <?php if ($userLevel < 31){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 32){ ?> <button class="button button2" onclick="window.location.href='new_kanjis.php?level=1'" ;>32 <?php if ($userLevel < 32){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 33){ ?> <button class="button button2" onclick="window.location.href='review.php?level=33'" ;>33 <?php if ($userLevel < 33){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 34){ ?> <button class="button button2" onclick="window.location.href='review.php?level=34'" ;>34 <?php if ($userLevel < 34){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 35){ ?> <button class="button button2" onclick="window.location.href='review.php?level=35'" ;>35 <?php if ($userLevel < 35){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 36){ ?> <button class="button button2" onclick="window.location.href='review.php?level=36'" ;>36 <?php if ($userLevel < 36){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 37){ ?> <button class="button button2" onclick="window.location.href='review.php?level=37'" ;>37 <?php if ($userLevel < 37){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 38){ ?> <button class="button button2" onclick="window.location.href='review.php?level=38'" ;>38 <?php if ($userLevel < 38){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 39){ ?> <button class="button button2" onclick="window.location.href='review.php?level=39'" ;>39 <?php if ($userLevel < 39){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 40){ ?> <button class="button button2" onclick="window.location.href='review.php?level=40'" ;>40 <?php if ($userLevel < 40){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 41){ ?> <button class="button button2" onclick="window.location.href='review.php?level=41'" ;>41 <?php if ($userLevel < 41){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 42){ ?> <button class="button button2" onclick="window.location.href='review.php?level=42'" ;>42 <?php if ($userLevel < 42){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 43){ ?> <button class="button button2" onclick="window.location.href='review.php?level=43'" ;>43 <?php if ($userLevel < 43){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 44){ ?> <button class="button button2" onclick="window.location.href='review.php?level=44'" ;>44 <?php if ($userLevel < 44){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 45){ ?> <button class="button button2" onclick="window.location.href='review.php?level=45'" ;>45 <?php if ($userLevel < 45){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 46){ ?> <button class="button button2" onclick="window.location.href='review.php?level=46'" ;>46 <?php if ($userLevel < 46){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 47){ ?> <button class="button button2" onclick="window.location.href='review.php?level=47'" ;>47 <?php if ($userLevel < 47){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 48){ ?> <button class="button button2" onclick="window.location.href='review.php?level=48'" ;>48 <?php if ($userLevel < 48){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 49){ ?> <button class="button button2" onclick="window.location.href='review.php?level=49'" ;>49 <?php if ($userLevel < 49){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 50){ ?> <button class="button button2" onclick="window.location.href='review.php?level=50'" ;>50 <?php if ($userLevel < 50){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>

            <div class="mySlides">
            <?php if ($userLevel >= 51){ ?> <button class="button button2" onclick="window.location.href='review.php?level=51'" ;>51 <?php if ($userLevel < 51){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 52){ ?> <button class="button button2" onclick="window.location.href='review.php?level=52'" ;>52 <?php if ($userLevel < 52){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 53){ ?> <button class="button button2" onclick="window.location.href='review.php?level=53'" ;>53 <?php if ($userLevel < 53){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 54){ ?> <button class="button button2" onclick="window.location.href='review.php?level=54'" ;>54 <?php if ($userLevel < 54){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 55){ ?> <button class="button button2" onclick="window.location.href='review.php?level=55'" ;>55 <?php if ($userLevel < 55){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 56){ ?> <button class="button button2" onclick="window.location.href='review.php?level=56'" ;>56 <?php if ($userLevel < 56){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 57){ ?> <button class="button button2" onclick="window.location.href='review.php?level=57'" ;>57 <?php if ($userLevel < 57){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 58){ ?> <button class="button button2" onclick="window.location.href='review.php?level=58'" ;>58 <?php if ($userLevel < 58){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 59){ ?> <button class="button button2" onclick="window.location.href='review.php?level=59'" ;>59 <?php if ($userLevel < 59){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 60){ ?> <button class="button button2" onclick="window.location.href='review.php?level=60'" ;>60 <?php if ($userLevel < 60){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 61){ ?> <button class="button button2" onclick="window.location.href='review.php?level=61'" ;>61 <?php if ($userLevel < 61){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 62){ ?> <button class="button button2" onclick="window.location.href='review.php?level=62'" ;>62 <?php if ($userLevel < 62){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 63){ ?> <button class="button button2" onclick="window.location.href='review.php?level=63'" ;>63 <?php if ($userLevel < 63){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 64){ ?> <button class="button button2" onclick="window.location.href='review.php?level=64'" ;>64 <?php if ($userLevel < 64){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 65){ ?> <button class="button button2" onclick="window.location.href='review.php?level=65'" ;>65 <?php if ($userLevel < 65){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 66){ ?> <button class="button button2" onclick="window.location.href='review.php?level=66'" ;>66 <?php if ($userLevel < 66){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 67){ ?> <button class="button button2" onclick="window.location.href='review.php?level=67'" ;>67 <?php if ($userLevel < 67){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 68){ ?> <button class="button button2" onclick="window.location.href='review.php?level=68'" ;>68 <?php if ($userLevel < 68){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 69){ ?> <button class="button button2" onclick="window.location.href='review.php?level=69'" ;>69 <?php if ($userLevel < 69){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 70){ ?> <button class="button button2" onclick="window.location.href='review.php?level=70'" ;>70 <?php if ($userLevel < 70){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 71){ ?> <button class="button button2" onclick="window.location.href='review.php?level=71'" ;>71 <?php if ($userLevel < 71){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 72){ ?> <button class="button button2" onclick="window.location.href='review.php?level=72'" ;>72 <?php if ($userLevel < 72){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 73){ ?> <button class="button button2" onclick="window.location.href='review.php?level=73'" ;>73 <?php if ($userLevel < 73){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 74){ ?> <button class="button button2" onclick="window.location.href='review.php?level=74'" ;>74 <?php if ($userLevel < 74){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 75){ ?> <button class="button button2" onclick="window.location.href='review.php?level=75'" ;>75 <?php if ($userLevel < 75){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 76){ ?> <button class="button button2" onclick="window.location.href='review.php?level=76'" ;>76 <?php if ($userLevel < 76){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 77){ ?> <button class="button button2" onclick="window.location.href='review.php?level=77'" ;>77 <?php if ($userLevel < 77){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 78){ ?> <button class="button button2" onclick="window.location.href='review.php?level=78'" ;>78 <?php if ($userLevel < 78){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 79){ ?> <button class="button button2" onclick="window.location.href='review.php?level=79'" ;>79 <?php if ($userLevel < 79){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 80){ ?> <button class="button button2" onclick="window.location.href='review.php?level=80'" ;>80 <?php if ($userLevel < 80){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 81){ ?> <button class="button button2" onclick="window.location.href='review.php?level=81'" ;>81 <?php if ($userLevel < 81){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 82){ ?> <button class="button button2" onclick="window.location.href='review.php?level=82'" ;>82 <?php if ($userLevel < 82){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 83){ ?> <button class="button button2" onclick="window.location.href='review.php?level=83'" ;>83 <?php if ($userLevel < 83){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 84){ ?> <button class="button button2" onclick="window.location.href='review.php?level=84'" ;>84 <?php if ($userLevel < 84){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 85){ ?> <button class="button button2" onclick="window.location.href='review.php?level=85'" ;>85 <?php if ($userLevel < 85){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 86){ ?> <button class="button button2" onclick="window.location.href='review.php?level=86'" ;>86 <?php if ($userLevel < 86){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 87){ ?> <button class="button button2" onclick="window.location.href='review.php?level=87'" ;>87 <?php if ($userLevel < 87){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 88){ ?> <button class="button button2" onclick="window.location.href='review.php?level=88'" ;>88 <?php if ($userLevel < 88){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 89){ ?> <button class="button button2" onclick="window.location.href='review.php?level=89'" ;>89 <?php if ($userLevel < 89){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 90){ ?> <button class="button button2" onclick="window.location.href='review.php?level=90'" ;>90 <?php if ($userLevel < 90){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 91){ ?> <button class="button button2" onclick="window.location.href='review.php?level=91'" ;>91 <?php if ($userLevel < 91){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 92){ ?> <button class="button button2" onclick="window.location.href='review.php?level=92'" ;>92 <?php if ($userLevel < 92){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 93){ ?> <button class="button button2" onclick="window.location.href='review.php?level=93'" ;>93 <?php if ($userLevel < 93){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 94){ ?> <button class="button button2" onclick="window.location.href='review.php?level=94'" ;>94 <?php if ($userLevel < 94){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 95){ ?> <button class="button button2" onclick="window.location.href='review.php?level=95'" ;> 95 <?php if ($userLevel < 95){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 96){ ?> <button class="button button2" onclick="window.location.href='review.php?level=96'" ;>96 <?php if ($userLevel < 96){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 97){ ?> <button class="button button2" onclick="window.location.href='review.php?level=97'" ;>97 <?php if ($userLevel < 97){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 98){ ?> <button class="button button2" onclick="window.location.href='review.php?level=98'" ;>98 <?php if ($userLevel < 98){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 99){ ?> <button class="button button2" onclick="window.location.href='review.php?level=99'" ;>99 <?php if ($userLevel < 99){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 100){ ?> <button class="button button2" onclick="window.location.href='review.php?level=100'" ;>100 <?php if ($userLevel < 100){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>

            <div class="mySlides">
            <?php if ($userLevel >= 101){ ?> <button class="button button2" onclick="window.location.href='review.php?level=101'" ;>101 <?php if ($userLevel < 101){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 102){ ?> <button class="button button2" onclick="window.location.href='review.php?level=102'" ;>102 <?php if ($userLevel < 102){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 103){ ?> <button class="button button2" onclick="window.location.href='review.php?level=103'" ;>103 <?php if ($userLevel < 103){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 104){ ?> <button class="button button2" onclick="window.location.href='review.php?level=104'" ;>104 <?php if ($userLevel < 104){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 105){ ?> <button class="button button2" onclick="window.location.href='review.php?level=105'" ;>105 <?php if ($userLevel < 105){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 106){ ?> <button class="button button2" onclick="window.location.href='review.php?level=106'" ;>106 <?php if ($userLevel < 106){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 107){ ?> <button class="button button2" onclick="window.location.href='review.php?level=107'" ;>107 <?php if ($userLevel < 107){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 108){ ?> <button class="button button2" onclick="window.location.href='review.php?level=108'" ;>108 <?php if ($userLevel < 108){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 109){ ?> <button class="button button2" onclick="window.location.href='review.php?level=109'" ;>109 <?php if ($userLevel < 109){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 110){ ?> <button class="button button2" onclick="window.location.href='review.php?level=110'" ;>110 <?php if ($userLevel < 110){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 111){ ?> <button class="button button2" onclick="window.location.href='review.php?level=111'" ;>111 <?php if ($userLevel < 111){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 112){ ?> <button class="button button2" onclick="window.location.href='review.php?level=112'" ;>112 <?php if ($userLevel < 112){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 113){ ?> <button class="button button2" onclick="window.location.href='review.php?level=113'" ;>113 <?php if ($userLevel < 113){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 114){ ?> <button class="button button2" onclick="window.location.href='review.php?level=114'" ;>114 <?php if ($userLevel < 114){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 115){ ?> <button class="button button2" onclick="window.location.href='review.php?level=115'" ;>115 <?php if ($userLevel < 115){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 116){ ?> <button class="button button2" onclick="window.location.href='review.php?level=116'" ;>116 <?php if ($userLevel < 116){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 117){ ?> <button class="button button2" onclick="window.location.href='review.php?level=117'" ;>117 <?php if ($userLevel < 117){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 118){ ?> <button class="button button2" onclick="window.location.href='review.php?level=118'" ;>118 <?php if ($userLevel < 118){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 119){ ?> <button class="button button2" onclick="window.location.href='review.php?level=119'" ;>119 <?php if ($userLevel < 119){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 120){ ?> <button class="button button2" onclick="window.location.href='review.php?level=120'" ;>120 <?php if ($userLevel < 120){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 121){ ?> <button class="button button2" onclick="window.location.href='review.php?level=121'" ;>121 <?php if ($userLevel < 121){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 122){ ?> <button class="button button2" onclick="window.location.href='review.php?level=122'" ;>122 <?php if ($userLevel < 122){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 123){ ?> <button class="button button2" onclick="window.location.href='review.php?level=123'" ;>123 <?php if ($userLevel < 123){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 124){ ?> <button class="button button2" onclick="window.location.href='review.php?level=124'" ;>124 <?php if ($userLevel < 124){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 125){ ?> <button class="button button2" onclick="window.location.href='review.php?level=125'" ;>125 <?php if ($userLevel < 125){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 126){ ?> <button class="button button2" onclick="window.location.href='review.php?level=126'" ;>126 <?php if ($userLevel < 126){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 127){ ?> <button class="button button2" onclick="window.location.href='review.php?level=127'" ;>127 <?php if ($userLevel < 127){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 128){ ?> <button class="button button2" onclick="window.location.href='review.php?level=128'" ;>128 <?php if ($userLevel < 128){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 129){ ?> <button class="button button2" onclick="window.location.href='review.php?level=129'" ;>129 <?php if ($userLevel < 129){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 130){ ?> <button class="button button2" onclick="window.location.href='review.php?level=130'" ;>130 <?php if ($userLevel < 130){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 131){ ?> <button class="button button2" onclick="window.location.href='review.php?level=131'" ;>131 <?php if ($userLevel < 131){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 132){ ?> <button class="button button2" onclick="window.location.href='review.php?level=132'" ;>132 <?php if ($userLevel < 132){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 133){ ?> <button class="button button2" onclick="window.location.href='review.php?level=133'" ;>133 <?php if ($userLevel < 133){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 134){ ?> <button class="button button2" onclick="window.location.href='review.php?level=134'" ;>134 <?php if ($userLevel < 134){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 135){ ?> <button class="button button2" onclick="window.location.href='review.php?level=135'" ;>135 <?php if ($userLevel < 135){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 136){ ?> <button class="button button2" onclick="window.location.href='review.php?level=136'" ;>136 <?php if ($userLevel < 136){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 137){ ?> <button class="button button2" onclick="window.location.href='review.php?level=137'" ;>137 <?php if ($userLevel < 137){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 138){ ?> <button class="button button2" onclick="window.location.href='review.php?level=138'" ;>138 <?php if ($userLevel < 138){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 139){ ?> <button class="button button2" onclick="window.location.href='review.php?level=139'" ;>139 <?php if ($userLevel < 139){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 140){ ?> <button class="button button2" onclick="window.location.href='review.php?level=140'" ;>140 <?php if ($userLevel < 140){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 141){ ?> <button class="button button2" onclick="window.location.href='review.php?level=141'" ;>141 <?php if ($userLevel < 141){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 142){ ?> <button class="button button2" onclick="window.location.href='review.php?level=142'" ;>142 <?php if ($userLevel < 142){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 143){ ?> <button class="button button2" onclick="window.location.href='review.php?level=143'" ;>143 <?php if ($userLevel < 143){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 144){ ?> <button class="button button2" onclick="window.location.href='review.php?level=144'" ;>144 <?php if ($userLevel < 144){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 145){ ?> <button class="button button2" onclick="window.location.href='review.php?level=145'" ;>145 <?php if ($userLevel < 145){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 146){ ?> <button class="button button2" onclick="window.location.href='review.php?level=146'" ;>146 <?php if ($userLevel < 146){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 147){ ?> <button class="button button2" onclick="window.location.href='review.php?level=147'" ;>147 <?php if ($userLevel < 147){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 148){ ?> <button class="button button2" onclick="window.location.href='review.php?level=148'" ;>148 <?php if ($userLevel < 148){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 149){ ?> <button class="button button2" onclick="window.location.href='review.php?level=149'" ;>149 <?php if ($userLevel < 149){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 150){ ?> <button class="button button2" onclick="window.location.href='review.php?level=150'" ;>150 <?php if ($userLevel < 150){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>

            <div class="mySlides">
            <?php if ($userLevel >= 151){ ?> <button class="button button2" onclick="window.location.href='review.php?level=151'" ;>151 <?php if ($userLevel < 151){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 152){ ?> <button class="button button2" onclick="window.location.href='review.php?level=52'" ;>152 <?php if ($userLevel <152){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 153){ ?> <button class="button button2" onclick="window.location.href='review.php?level=53'" ;>153 <?php if ($userLevel < 153){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 154){ ?> <button class="button button2" onclick="window.location.href='review.php?level=154'" ;>154 <?php if ($userLevel < 154){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 155){ ?> <button class="button button2" onclick="window.location.href='review.php?level=155'" ;>155 <?php if ($userLevel < 155){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 156){ ?> <button class="button button2" onclick="window.location.href='review.php?level=156'" ;>156 <?php if ($userLevel < 156){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 157){ ?> <button class="button button2" onclick="window.location.href='review.php?level=157'" ;>157 <?php if ($userLevel < 157){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 158){ ?> <button class="button button2" onclick="window.location.href='review.php?level=158'" ;>158 <?php if ($userLevel < 158){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 159){ ?> <button class="button button2" onclick="window.location.href='review.php?level=159'" ;>159 <?php if ($userLevel < 159){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 160){ ?> <button class="button button2" onclick="window.location.href='review.php?level=160'" ;>160 <?php if ($userLevel < 160){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 161){ ?> <button class="button button2" onclick="window.location.href='review.php?level=161'" ;>161 <?php if ($userLevel < 161){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 162){ ?> <button class="button button2" onclick="window.location.href='review.php?level=162'" ;>162 <?php if ($userLevel < 162){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 163){ ?> <button class="button button2" onclick="window.location.href='review.php?level=163'" ;>163 <?php if ($userLevel < 163){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 164){ ?> <button class="button button2" onclick="window.location.href='review.php?level=164'" ;>164 <?php if ($userLevel < 164){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 165){ ?> <button class="button button2" onclick="window.location.href='review.php?level=165'" ;>165 <?php if ($userLevel < 165){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 166){ ?> <button class="button button2" onclick="window.location.href='review.php?level=166'" ;>166 <?php if ($userLevel < 166){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 167){ ?> <button class="button button2" onclick="window.location.href='review.php?level=167'" ;>167 <?php if ($userLevel < 167){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 168){ ?> <button class="button button2" onclick="window.location.href='review.php?level=168'" ;>168 <?php if ($userLevel < 168){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 169){ ?> <button class="button button2" onclick="window.location.href='review.php?level=169'" ;>169 <?php if ($userLevel < 169){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 170){ ?> <button class="button button2" onclick="window.location.href='review.php?level=170'" ;>170 <?php if ($userLevel < 170){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 171){ ?> <button class="button button2" onclick="window.location.href='review.php?level=171'" ;>171 <?php if ($userLevel < 171){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 172){ ?> <button class="button button2" onclick="window.location.href='review.php?level=172'" ;>172 <?php if ($userLevel < 172){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 173){ ?> <button class="button button2" onclick="window.location.href='review.php?level=173'" ;>173 <?php if ($userLevel < 173){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 174){ ?> <button class="button button2" onclick="window.location.href='review.php?level=174'" ;>174 <?php if ($userLevel < 174){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 175){ ?> <button class="button button2" onclick="window.location.href='review.php?level=175'" ;>175 <?php if ($userLevel < 175){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 176){ ?> <button class="button button2" onclick="window.location.href='review.php?level=176'" ;>176 <?php if ($userLevel < 176){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 177){ ?> <button class="button button2" onclick="window.location.href='review.php?level=177'" ;>177 <?php if ($userLevel < 177){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 178){ ?> <button class="button button2" onclick="window.location.href='review.php?level=178'" ;>178 <?php if ($userLevel < 78){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 179){ ?> <button class="button button2" onclick="window.location.href='review.php?level=79'" ;>179 <?php if ($userLevel < 179){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 180){ ?> <button class="button button2" onclick="window.location.href='review.php?level=180'" ;>180 <?php if ($userLevel < 180){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 181){ ?> <button class="button button2" onclick="window.location.href='review.php?level=181'" ;>181 <?php if ($userLevel < 181){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 182){ ?> <button class="button button2" onclick="window.location.href='review.php?level=182'" ;>182 <?php if ($userLevel < 182){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 183){ ?> <button class="button button2" onclick="window.location.href='review.php?level=183'" ;>183 <?php if ($userLevel < 183){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 184){ ?> <button class="button button2" onclick="window.location.href='review.php?level=184'" ;>184 <?php if ($userLevel < 184){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 185){ ?> <button class="button button2" onclick="window.location.href='review.php?level=185'" ;>185 <?php if ($userLevel < 185){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 186){ ?> <button class="button button2" onclick="window.location.href='review.php?level=186'" ;>186 <?php if ($userLevel < 186){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 187){ ?> <button class="button button2" onclick="window.location.href='review.php?level=187'" ;>187 <?php if ($userLevel < 187){ ?>  <?php  }?> </button> <?php  }
                ?>
                <?php if ($userLevel >= 188){ ?> <button class="button button2" onclick="window.location.href='review.php?level=188'" ;>188 <?php if ($userLevel < 188){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 189){ ?> <button class="button button2" onclick="window.location.href='review.php?level=189'" ;>189 <?php if ($userLevel < 189){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 190){ ?> <button class="button button2" onclick="window.location.href='review.php?level=190'" ;>190 <?php if ($userLevel < 190){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 191){ ?> <button class="button button2" onclick="window.location.href='review.php?level=191'" ;>191 <?php if ($userLevel < 191){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 192){ ?> <button class="button button2" onclick="window.location.href='review.php?level=192'" ;>192 <?php if ($userLevel < 192){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 193){ ?> <button class="button button2" onclick="window.location.href='review.php?level=193'" ;>193 <?php if ($userLevel < 193){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 194){ ?> <button class="button button2" onclick="window.location.href='review.php?level=194'" ;>194 <?php if ($userLevel < 194){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 195){ ?> <button class="button button2" onclick="window.location.href='review.php?level=195'" ;>195 <?php if ($userLevel < 195){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 196){ ?> <button class="button button2" onclick="window.location.href='review.php?level=196'" ;>196 <?php if ($userLevel < 196){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 197){ ?> <button class="button button2" onclick="window.location.href='review.php?level=197'" ;>197 <?php if ($userLevel < 197){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 198){ ?> <button class="button button2" onclick="window.location.href='review.php?level=198'" ;>198 <?php if ($userLevel < 198){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 199){ ?> <button class="button button2" onclick="window.location.href='review.php?level=199'" ;>199 <?php if ($userLevel < 199){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 200){ ?> <button class="button button2" onclick="window.location.href='review.php?level=200'" ;>200 <?php if ($userLevel < 200){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>

            <div class="mySlides">
            <?php if ($userLevel >= 201){ ?> <button class="button button2" onclick="window.location.href='review.php?level=201'" ;>201 <?php if ($userLevel < 201){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 202){ ?> <button class="button button2" onclick="window.location.href='review.php?level=202'" ;>202 <?php if ($userLevel < 202){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 203){ ?> <button class="button button2" onclick="window.location.href='review.php?level=203'" ;>203 <?php if ($userLevel < 203){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 204){ ?> <button class="button button2" onclick="window.location.href='review.php?level=204'" ;>204 <?php if ($userLevel < 204){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 205){ ?> <button class="button button2" onclick="window.location.href='review.php?level=205'" ;>205 <?php if ($userLevel < 205){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 206){ ?> <button class="button button2" onclick="window.location.href='review.php?level=206'" ;>206 <?php if ($userLevel < 206){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 207){ ?> <button class="button button2" onclick="window.location.href='review.php?level=207'" ;>207 <?php if ($userLevel < 207){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 208){ ?> <button class="button button2" onclick="window.location.href='review.php?level=208'" ;>208 <?php if ($userLevel < 208){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 209){ ?> <button class="button button2" onclick="window.location.href='review.php?level=209'" ;>209 <?php if ($userLevel < 209){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 210){ ?> <button class="button button2" onclick="window.location.href='review.php?level=210'" ;>210 <?php if ($userLevel < 210){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 211){ ?> <button class="button button2" onclick="window.location.href='review.php?level=211'" ;>211 <?php if ($userLevel < 211){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 212){ ?> <button class="button button2" onclick="window.location.href='review.php?level=212'" ;>212 <?php if ($userLevel < 212){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 213){ ?> <button class="button button2" onclick="window.location.href='review.php?level=213'" ;>213 <?php if ($userLevel < 213){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 214){ ?> <button class="button button2" onclick="window.location.href='review.php?level=214'" ;>214 <?php if ($userLevel < 214){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 215){ ?> <button class="button button2" onclick="window.location.href='review.php?level=215'" ;>215 <?php if ($userLevel < 215){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 216){ ?> <button class="button button2" onclick="window.location.href='review.php?level=216'" ;>216 <?php if ($userLevel < 216){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 217){ ?> <button class="button button2" onclick="window.location.href='review.php?level=217'" ;>217 <?php if ($userLevel < 217){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 218){ ?> <button class="button button2" onclick="window.location.href='review.php?level=218'" ;>218 <?php if ($userLevel < 218){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 219){ ?> <button class="button button2" onclick="window.location.href='review.php?level=219'" ;>219 <?php if ($userLevel < 219){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 220){ ?> <button class="button button2" onclick="window.location.href='review.php?level=220'" ;>220 <?php if ($userLevel < 220){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 221){ ?> <button class="button button2" onclick="window.location.href='review.php?level=221'" ;>221 <?php if ($userLevel < 221){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 222){ ?> <button class="button button2" onclick="window.location.href='review.php?level=222'" ;>222 <?php if ($userLevel < 222){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 223){ ?> <button class="button button2" onclick="window.location.href='review.php?level=223'" ;>223 <?php if ($userLevel < 223){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 224){ ?> <button class="button button2" onclick="window.location.href='review.php?level=224'" ;>224 <?php if ($userLevel < 224){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 225){ ?> <button class="button button2" onclick="window.location.href='review.php?level=225'" ;>225 <?php if ($userLevel < 225){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 226){ ?> <button class="button button2" onclick="window.location.href='review.php?level=226'" ;>226 <?php if ($userLevel < 226){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 227){ ?> <button class="button button2" onclick="window.location.href='review.php?level=227'" ;>227 <?php if ($userLevel < 227){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 228){ ?> <button class="button button2" onclick="window.location.href='review.php?level=228'" ;>228 <?php if ($userLevel < 228){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 229){ ?> <button class="button button2" onclick="window.location.href='review.php?level=229'" ;>229 <?php if ($userLevel < 229){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 230){ ?> <button class="button button2" onclick="window.location.href='review.php?level=230'" ;>230 <?php if ($userLevel < 230){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 231){ ?> <button class="button button2" onclick="window.location.href='review.php?level=231'" ;>231 <?php if ($userLevel < 231){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 232){ ?> <button class="button button2" onclick="window.location.href='review.php?level=232'" ;>232 <?php if ($userLevel < 232){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 233){ ?> <button class="button button2" onclick="window.location.href='review.php?level=233'" ;>233 <?php if ($userLevel < 233){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 234){ ?> <button class="button button2" onclick="window.location.href='review.php?level=234'" ;>234 <?php if ($userLevel < 234){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 235){ ?> <button class="button button2" onclick="window.location.href='review.php?level=235'" ;>235 <?php if ($userLevel < 235){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 236){ ?> <button class="button button2" onclick="window.location.href='review.php?level=236'" ;>236 <?php if ($userLevel < 236){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 237){ ?> <button class="button button2" onclick="window.location.href='review.php?level=237'" ;>237 <?php if ($userLevel < 237){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 238){ ?> <button class="button button2" onclick="window.location.href='review.php?level=238'" ;>238 <?php if ($userLevel < 238){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 239){ ?> <button class="button button2" onclick="window.location.href='review.php?level=239'" ;>239 <?php if ($userLevel < 239){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 240){ ?> <button class="button button2" onclick="window.location.href='review.php?level=240'" ;>240 <?php if ($userLevel < 240){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 241){ ?> <button class="button button2" onclick="window.location.href='review.php?level=241'" ;>241 <?php if ($userLevel < 241){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 242){ ?> <button class="button button2" onclick="window.location.href='review.php?level=242'" ;>242 <?php if ($userLevel < 242){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 243){ ?> <button class="button button2" onclick="window.location.href='review.php?level=243'" ;>243 <?php if ($userLevel < 243){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 244){ ?> <button class="button button2" onclick="window.location.href='review.php?level=244'" ;>244 <?php if ($userLevel < 244){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 245){ ?> <button class="button button2" onclick="window.location.href='review.php?level=245'" ;>245 <?php if ($userLevel < 245){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 246){ ?> <button class="button button2" onclick="window.location.href='review.php?level=246'" ;>246 <?php if ($userLevel < 246){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 247){ ?> <button class="button button2" onclick="window.location.href='review.php?level=247'" ;>247 <?php if ($userLevel < 247){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 248){ ?> <button class="button button2" onclick="window.location.href='review.php?level=248'" ;>248 <?php if ($userLevel < 248){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 249){ ?> <button class="button button2" onclick="window.location.href='review.php?level=249'" ;>249 <?php if ($userLevel < 249){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 250){ ?> <button class="button button2" onclick="window.location.href='review.php?level=250'" ;>250 <?php if ($userLevel < 250){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>

            <div class="mySlides">
            <?php if ($userLevel >= 251){ ?> <button class="button button2" onclick="window.location.href='review.php?level=251'" ;>251 <?php if ($userLevel < 251){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 252){ ?> <button class="button button2" onclick="window.location.href='review.php?level=252'" ;>252 <?php if ($userLevel < 252){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 253){ ?> <button class="button button2" onclick="window.location.href='review.php?level=253'" ;>253 <?php if ($userLevel < 253){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 254){ ?> <button class="button button2" onclick="window.location.href='review.php?level=254'" ;>254 <?php if ($userLevel < 254){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 255){ ?> <button class="button button2" onclick="window.location.href='review.php?level=255'" ;>255 <?php if ($userLevel < 255){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 256){ ?> <button class="button button2" onclick="window.location.href='review.php?level=256'" ;>256 <?php if ($userLevel < 256){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 257){ ?> <button class="button button2" onclick="window.location.href='review.php?level=257'" ;>257 <?php if ($userLevel < 257){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 258){ ?> <button class="button button2" onclick="window.location.href='review.php?level=258'" ;>258 <?php if ($userLevel < 258){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 259){ ?> <button class="button button2" onclick="window.location.href='review.php?level=259'" ;>259 <?php if ($userLevel < 259){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 260){ ?> <button class="button button2" onclick="window.location.href='review.php?level=260'" ;>260 <?php if ($userLevel < 260){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 261){ ?> <button class="button button2" onclick="window.location.href='review.php?level=261'" ;>261 <?php if ($userLevel < 261){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 262){ ?> <button class="button button2" onclick="window.location.href='review.php?level=262'" ;>262 <?php if ($userLevel < 262){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 263){ ?> <button class="button button2" onclick="window.location.href='review.php?level=263'" ;>263 <?php if ($userLevel < 263){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 264){ ?> <button class="button button2" onclick="window.location.href='review.php?level=264'" ;>264 <?php if ($userLevel < 264){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 265){ ?> <button class="button button2" onclick="window.location.href='review.php?level=265'" ;>265 <?php if ($userLevel < 265){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 266){ ?> <button class="button button2" onclick="window.location.href='review.php?level=266'" ;>266 <?php if ($userLevel < 266){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 267){ ?> <button class="button button2" onclick="window.location.href='review.php?level=267'" ;>267 <?php if ($userLevel < 267){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 268){ ?> <button class="button button2" onclick="window.location.href='review.php?level=268'" ;>268 <?php if ($userLevel < 268){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 269){ ?> <button class="button button2" onclick="window.location.href='review.php?level=269'" ;>269 <?php if ($userLevel < 269){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 270){ ?> <button class="button button2" onclick="window.location.href='review.php?level=270'" ;>270 <?php if ($userLevel < 270){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 271){ ?> <button class="button button2" onclick="window.location.href='review.php?level=271'" ;>271 <?php if ($userLevel < 271){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 272){ ?> <button class="button button2" onclick="window.location.href='review.php?level=272'" ;>272 <?php if ($userLevel < 272){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 273){ ?> <button class="button button2" onclick="window.location.href='review.php?level=273'" ;>273 <?php if ($userLevel < 273){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 274){ ?> <button class="button button2" onclick="window.location.href='review.php?level=274'" ;>274 <?php if ($userLevel < 274){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 275){ ?> <button class="button button2" onclick="window.location.href='review.php?level=275'" ;>275 <?php if ($userLevel < 275){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 276){ ?> <button class="button button2" onclick="window.location.href='review.php?level=276'" ;>276 <?php if ($userLevel < 276){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 277){ ?> <button class="button button2" onclick="window.location.href='review.php?level=277'" ;>277 <?php if ($userLevel < 277){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 278){ ?> <button class="button button2" onclick="window.location.href='review.php?level=278'" ;>278 <?php if ($userLevel < 278){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 279){ ?> <button class="button button2" onclick="window.location.href='review.php?level=279'" ;>279 <?php if ($userLevel < 279){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 280){ ?> <button class="button button2" onclick="window.location.href='review.php?level=280'" ;>280 <?php if ($userLevel < 280){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 281){ ?> <button class="button button2" onclick="window.location.href='review.php?level=281'" ;>281 <?php if ($userLevel < 281){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 282){ ?> <button class="button button2" onclick="window.location.href='review.php?level=282'" ;>282 <?php if ($userLevel < 282){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 283){ ?> <button class="button button2" onclick="window.location.href='review.php?level=283'" ;>283 <?php if ($userLevel < 283){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 284){ ?> <button class="button button2" onclick="window.location.href='review.php?level=284'" ;>284 <?php if ($userLevel < 284){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 285){ ?> <button class="button button2" onclick="window.location.href='review.php?level=285'" ;>285 <?php if ($userLevel < 285){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 286){ ?> <button class="button button2" onclick="window.location.href='review.php?level=286'" ;>286 <?php if ($userLevel < 286){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 287){ ?> <button class="button button2" onclick="window.location.href='review.php?level=287'" ;>287 <?php if ($userLevel < 287){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 288){ ?> <button class="button button2" onclick="window.location.href='review.php?level=288'" ;>288 <?php if ($userLevel < 288){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 289){ ?> <button class="button button2" onclick="window.location.href='review.php?level=289'" ;>289 <?php if ($userLevel < 289){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 290){ ?> <button class="button button2" onclick="window.location.href='review.php?level=290'" ;>290 <?php if ($userLevel < 290){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 291){ ?> <button class="button button2" onclick="window.location.href='review.php?level=291'" ;>291 <?php if ($userLevel < 291){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 292){ ?> <button class="button button2" onclick="window.location.href='review.php?level=292'" ;>292 <?php if ($userLevel < 292){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 293){ ?> <button class="button button2" onclick="window.location.href='review.php?level=293'" ;>293 <?php if ($userLevel < 293){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 294){ ?> <button class="button button2" onclick="window.location.href='review.php?level=294'" ;>294 <?php if ($userLevel < 294){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 295){ ?> <button class="button button2" onclick="window.location.href='review.php?level=295'" ;>295 <?php if ($userLevel < 295){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 296){ ?> <button class="button button2" onclick="window.location.href='review.php?level=296'" ;>296 <?php if ($userLevel < 296){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 297){ ?> <button class="button button2" onclick="window.location.href='review.php?level=297'" ;>297 <?php if ($userLevel < 297){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 298){ ?> <button class="button button2" onclick="window.location.href='review.php?level=298'" ;>298 <?php if ($userLevel < 298){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 299){ ?> <button class="button button2" onclick="window.location.href='review.php?level=299'" ;>299 <?php if ($userLevel < 299){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 300){ ?> <button class="button button2" onclick="window.location.href='review.php?level=300'" ;>300 <?php if ($userLevel < 300){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>

            <div class="mySlides">
            <?php if ($userLevel >= 301){ ?> <button class="button button2" onclick="window.location.href='review.php?level=301'" ;>301 <?php if ($userLevel < 301){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 302){ ?> <button class="button button2" onclick="window.location.href='review.php?level=302'" ;>302 <?php if ($userLevel < 302){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 303){ ?> <button class="button button2" onclick="window.location.href='review.php?level=303'" ;>303 <?php if ($userLevel < 303){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 304){ ?> <button class="button button2" onclick="window.location.href='review.php?level=304'" ;>304 <?php if ($userLevel < 304){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 305){ ?> <button class="button button2" onclick="window.location.href='review.php?level=305'" ;>305 <?php if ($userLevel < 305){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 306){ ?> <button class="button button2" onclick="window.location.href='review.php?level=306'" ;>306 <?php if ($userLevel < 306){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 307){ ?> <button class="button button2" onclick="window.location.href='review.php?level=307'" ;>307 <?php if ($userLevel < 307){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 308){ ?> <button class="button button2" onclick="window.location.href='review.php?level=308'" ;>308 <?php if ($userLevel < 308){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 309){ ?> <button class="button button2" onclick="window.location.href='review.php?level=309'" ;>309 <?php if ($userLevel < 309){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 310){ ?> <button class="button button2" onclick="window.location.href='review.php?level=310'" ;>310 <?php if ($userLevel < 310){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 311){ ?> <button class="button button2" onclick="window.location.href='review.php?level=311'" ;>311 <?php if ($userLevel < 311){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 312){ ?> <button class="button button2" onclick="window.location.href='review.php?level=312'" ;>312 <?php if ($userLevel < 312){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 313){ ?> <button class="button button2" onclick="window.location.href='review.php?level=313'" ;>313 <?php if ($userLevel < 313){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 314){ ?> <button class="button button2" onclick="window.location.href='review.php?level=314'" ;>314 <?php if ($userLevel < 314){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 315){ ?> <button class="button button2" onclick="window.location.href='review.php?level=315'" ;>315 <?php if ($userLevel < 315){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 316){ ?> <button class="button button2" onclick="window.location.href='review.php?level=316'" ;>316 <?php if ($userLevel < 316){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 317){ ?> <button class="button button2" onclick="window.location.href='review.php?level=317'" ;>317 <?php if ($userLevel < 317){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 318){ ?> <button class="button button2" onclick="window.location.href='review.php?level=318'" ;>318 <?php if ($userLevel < 318){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 319){ ?> <button class="button button2" onclick="window.location.href='review.php?level=319'" ;>319 <?php if ($userLevel < 319){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 320){ ?> <button class="button button2" onclick="window.location.href='review.php?level=320'" ;>320 <?php if ($userLevel < 320){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 321){ ?> <button class="button button2" onclick="window.location.href='review.php?level=321'" ;>321 <?php if ($userLevel < 321){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 322){ ?> <button class="button button2" onclick="window.location.href='review.php?level=322'" ;>322 <?php if ($userLevel < 322){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 323){ ?> <button class="button button2" onclick="window.location.href='review.php?level=323'" ;>323 <?php if ($userLevel < 323){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 324){ ?> <button class="button button2" onclick="window.location.href='review.php?level=324'" ;>324 <?php if ($userLevel < 324){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 325){ ?> <button class="button button2" onclick="window.location.href='review.php?level=325'" ;>325 <?php if ($userLevel < 325){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 326){ ?> <button class="button button2" onclick="window.location.href='review.php?level=326'" ;>326 <?php if ($userLevel < 326){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 327){ ?> <button class="button button2" onclick="window.location.href='review.php?level=327'" ;>327 <?php if ($userLevel < 327){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 328){ ?> <button class="button button2" onclick="window.location.href='review.php?level=328'" ;>328 <?php if ($userLevel < 328){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 329){ ?> <button class="button button2" onclick="window.location.href='review.php?level=329'" ;>329 <?php if ($userLevel < 329){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 330){ ?> <button class="button button2" onclick="window.location.href='review.php?level=330'" ;>330 <?php if ($userLevel < 330){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 331){ ?> <button class="button button2" onclick="window.location.href='review.php?level=331'" ;>331 <?php if ($userLevel < 331){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 332){ ?> <button class="button button2" onclick="window.location.href='review.php?level=332'" ;>332 <?php if ($userLevel < 332){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 333){ ?> <button class="button button2" onclick="window.location.href='review.php?level=333'" ;>333 <?php if ($userLevel < 333){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 334){ ?> <button class="button button2" onclick="window.location.href='review.php?level=334'" ;>334 <?php if ($userLevel < 334){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 335){ ?> <button class="button button2" onclick="window.location.href='review.php?level=335'" ;>335 <?php if ($userLevel < 335){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 336){ ?> <button class="button button2" onclick="window.location.href='review.php?level=336'" ;>336 <?php if ($userLevel < 336){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 337){ ?> <button class="button button2" onclick="window.location.href='review.php?level=337'" ;>337 <?php if ($userLevel < 337){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 338){ ?> <button class="button button2" onclick="window.location.href='review.php?level=338'" ;>338 <?php if ($userLevel < 338){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 339){ ?> <button class="button button2" onclick="window.location.href='review.php?level=339'" ;>339 <?php if ($userLevel < 339){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 340){ ?> <button class="button button2" onclick="window.location.href='review.php?level=340'" ;>340 <?php if ($userLevel < 340){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 341){ ?> <button class="button button2" onclick="window.location.href='review.php?level=341'" ;>341 <?php if ($userLevel < 341){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 342){ ?> <button class="button button2" onclick="window.location.href='review.php?level=342'" ;>342 <?php if ($userLevel < 342){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 343){ ?> <button class="button button2" onclick="window.location.href='review.php?level=343'" ;>343 <?php if ($userLevel < 343){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 344){ ?> <button class="button button2" onclick="window.location.href='review.php?level=344'" ;>344 <?php if ($userLevel < 344){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 345){ ?> <button class="button button2" onclick="window.location.href='review.php?level=345'" ;>345 <?php if ($userLevel < 345){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 346){ ?> <button class="button button2" onclick="window.location.href='review.php?level=346'" ;>346 <?php if ($userLevel < 346){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 347){ ?> <button class="button button2" onclick="window.location.href='review.php?level=347'" ;>347 <?php if ($userLevel < 347){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 348){ ?> <button class="button button2" onclick="window.location.href='review.php?level=348'" ;>348 <?php if ($userLevel < 348){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 349){ ?> <button class="button button2" onclick="window.location.href='review.php?level=349'" ;>349 <?php if ($userLevel < 349){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 350){ ?> <button class="button button2" onclick="window.location.href='review.php?level=350'" ;>350 <?php if ($userLevel < 350){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>

            <div class="mySlides">
            <?php if ($userLevel >= 351){ ?> <button class="button button2" onclick="window.location.href='review.php?level=351'" ;>351 <?php if ($userLevel < 351){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 352){ ?> <button class="button button2" onclick="window.location.href='review.php?level=352'" ;>352 <?php if ($userLevel < 352){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 353){ ?> <button class="button button2" onclick="window.location.href='review.php?level=353'" ;>353 <?php if ($userLevel < 353){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 354){ ?> <button class="button button2" onclick="window.location.href='review.php?level=354'" ;>354 <?php if ($userLevel < 354){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 355){ ?> <button class="button button2" onclick="window.location.href='review.php?level=355'" ;>355 <?php if ($userLevel < 355){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 356){ ?> <button class="button button2" onclick="window.location.href='review.php?level=356'" ;>356 <?php if ($userLevel < 356){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 357){ ?> <button class="button button2" onclick="window.location.href='review.php?level=357'" ;>357 <?php if ($userLevel < 357){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 358){ ?> <button class="button button2" onclick="window.location.href='review.php?level=358'" ;>358 <?php if ($userLevel < 358){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 359){ ?> <button class="button button2" onclick="window.location.href='review.php?level=359'" ;>359 <?php if ($userLevel < 359){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 360){ ?> <button class="button button2" onclick="window.location.href='review.php?level=360'" ;>360 <?php if ($userLevel < 360){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 361){ ?> <button class="button button2" onclick="window.location.href='review.php?level=361'" ;>361 <?php if ($userLevel < 361){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 362){ ?> <button class="button button2" onclick="window.location.href='review.php?level=362'" ;>362 <?php if ($userLevel < 362){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 363){ ?> <button class="button button2" onclick="window.location.href='review.php?level=363'" ;>363 <?php if ($userLevel < 363){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 364){ ?> <button class="button button2" onclick="window.location.href='review.php?level=364'" ;>364 <?php if ($userLevel < 364){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 365){ ?> <button class="button button2" onclick="window.location.href='review.php?level=365'" ;>365 <?php if ($userLevel < 365){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 366){ ?> <button class="button button2" onclick="window.location.href='review.php?level=366'" ;>366 <?php if ($userLevel < 366){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 367){ ?> <button class="button button2" onclick="window.location.href='review.php?level=367'" ;>367 <?php if ($userLevel < 367){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 368){ ?> <button class="button button2" onclick="window.location.href='review.php?level=368'" ;>368 <?php if ($userLevel < 368){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 369){ ?> <button class="button button2" onclick="window.location.href='review.php?level=369'" ;>369 <?php if ($userLevel < 369){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 370){ ?> <button class="button button2" onclick="window.location.href='review.php?level=370'" ;>370 <?php if ($userLevel < 370){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 371){ ?> <button class="button button2" onclick="window.location.href='review.php?level=371'" ;>371 <?php if ($userLevel < 371){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 372){ ?> <button class="button button2" onclick="window.location.href='review.php?level=372'" ;>372 <?php if ($userLevel < 372){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 373){ ?> <button class="button button2" onclick="window.location.href='review.php?level=373'" ;>373 <?php if ($userLevel < 373){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 374){ ?> <button class="button button2" onclick="window.location.href='review.php?level=374'" ;>374 <?php if ($userLevel < 374){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 375){ ?> <button class="button button2" onclick="window.location.href='review.php?level=375'" ;>375 <?php if ($userLevel < 375){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 376){ ?> <button class="button button2" onclick="window.location.href='review.php?level=376'" ;>376 <?php if ($userLevel < 376){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 377){ ?> <button class="button button2" onclick="window.location.href='review.php?level=377'" ;>377 <?php if ($userLevel < 377){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 378){ ?> <button class="button button2" onclick="window.location.href='review.php?level=378'" ;>378 <?php if ($userLevel < 378){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 379){ ?> <button class="button button2" onclick="window.location.href='review.php?level=379'" ;>379 <?php if ($userLevel < 379){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 380){ ?> <button class="button button2" onclick="window.location.href='review.php?level=380'" ;>380 <?php if ($userLevel < 380){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 381){ ?> <button class="button button2" onclick="window.location.href='review.php?level=381'" ;>381 <?php if ($userLevel < 381){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 382){ ?> <button class="button button2" onclick="window.location.href='review.php?level=382'" ;>382 <?php if ($userLevel < 382){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 383){ ?> <button class="button button2" onclick="window.location.href='review.php?level=383'" ;>383 <?php if ($userLevel < 383){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 384){ ?> <button class="button button2" onclick="window.location.href='review.php?level=384'" ;>384 <?php if ($userLevel < 384){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 385){ ?> <button class="button button2" onclick="window.location.href='review.php?level=385'" ;>385 <?php if ($userLevel < 385){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 386){ ?> <button class="button button2" onclick="window.location.href='review.php?level=386'" ;>386 <?php if ($userLevel < 386){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 387){ ?> <button class="button button2" onclick="window.location.href='review.php?level=387'" ;>387 <?php if ($userLevel < 387){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 388){ ?> <button class="button button2" onclick="window.location.href='review.php?level=388'" ;>388 <?php if ($userLevel < 388){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 389){ ?> <button class="button button2" onclick="window.location.href='review.php?level=389'" ;>389 <?php if ($userLevel < 389){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 390){ ?> <button class="button button2" onclick="window.location.href='review.php?level=390'" ;>390 <?php if ($userLevel < 390){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 391){ ?> <button class="button button2" onclick="window.location.href='review.php?level=391'" ;>391 <?php if ($userLevel < 391){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 392){ ?> <button class="button button2" onclick="window.location.href='review.php?level=392'" ;>392 <?php if ($userLevel < 392){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 393){ ?> <button class="button button2" onclick="window.location.href='review.php?level=393'" ;>393 <?php if ($userLevel < 393){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 394){ ?> <button class="button button2" onclick="window.location.href='review.php?level=394'" ;>394 <?php if ($userLevel < 394){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 395){ ?> <button class="button button2" onclick="window.location.href='review.php?level=395'" ;>395 <?php if ($userLevel < 395){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 396){ ?> <button class="button button2" onclick="window.location.href='review.php?level=396'" ;>396 <?php if ($userLevel < 396){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 397){ ?> <button class="button button2" onclick="window.location.href='review.php?level=397'" ;>397 <?php if ($userLevel < 397){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 398){ ?> <button class="button button2" onclick="window.location.href='review.php?level=398'" ;>398 <?php if ($userLevel < 398){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 399){ ?> <button class="button button2" onclick="window.location.href='review.php?level=399'" ;>399 <?php if ($userLevel < 399){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 400){ ?> <button class="button button2" onclick="window.location.href='review.php?level=400'" ;>400 <?php if ($userLevel < 400){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>

            <div class="mySlides">
            <?php if ($userLevel >= 401){ ?> <button class="button button2" onclick="window.location.href='review.php?level=401'" ;>401 <?php if ($userLevel < 401){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 402){ ?> <button class="button button2" onclick="window.location.href='review.php?level=402'" ;>402 <?php if ($userLevel < 402){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 403){ ?> <button class="button button2" onclick="window.location.href='review.php?level=403'" ;>403 <?php if ($userLevel < 403){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 404){ ?> <button class="button button2" onclick="window.location.href='review.php?level=404'" ;>404 <?php if ($userLevel < 404){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 405){ ?> <button class="button button2" onclick="window.location.href='review.php?level=405'" ;>405 <?php if ($userLevel < 405){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 406){ ?> <button class="button button2" onclick="window.location.href='review.php?level=406'" ;>406 <?php if ($userLevel < 406){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 407){ ?> <button class="button button2" onclick="window.location.href='review.php?level=407'" ;>407 <?php if ($userLevel < 407){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 408){ ?> <button class="button button2" onclick="window.location.href='review.php?level=408'" ;>408 <?php if ($userLevel < 408){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 409){ ?> <button class="button button2" onclick="window.location.href='review.php?level=409'" ;>409 <?php if ($userLevel < 409){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 410){ ?> <button class="button button2" onclick="window.location.href='review.php?level=410'" ;>410 <?php if ($userLevel < 410){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 411){ ?> <button class="button button2" onclick="window.location.href='review.php?level=411'" ;>411 <?php if ($userLevel < 411){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 412){ ?> <button class="button button2" onclick="window.location.href='review.php?level=412'" ;>412 <?php if ($userLevel < 412){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 413){ ?> <button class="button button2" onclick="window.location.href='review.php?level=413'" ;>413 <?php if ($userLevel < 413){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 414){ ?> <button class="button button2" onclick="window.location.href='review.php?level=414'" ;>414 <?php if ($userLevel < 414){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 415){ ?> <button class="button button2" onclick="window.location.href='review.php?level=415'" ;>415 <?php if ($userLevel < 415){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 416){ ?> <button class="button button2" onclick="window.location.href='review.php?level=416'" ;>416 <?php if ($userLevel < 416){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 417){ ?> <button class="button button2" onclick="window.location.href='review.php?level=417'" ;>417 <?php if ($userLevel < 417){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 418){ ?> <button class="button button2" onclick="window.location.href='review.php?level=418'" ;>418 <?php if ($userLevel < 418){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 419){ ?> <button class="button button2" onclick="window.location.href='review.php?level=419'" ;>419 <?php if ($userLevel < 419){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 420){ ?> <button class="button button2" onclick="window.location.href='review.php?level=420'" ;>420 <?php if ($userLevel < 420){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 421){ ?> <button class="button button2" onclick="window.location.href='review.php?level=421'" ;>421 <?php if ($userLevel < 421){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 422){ ?> <button class="button button2" onclick="window.location.href='review.php?level=422'" ;>422 <?php if ($userLevel < 422){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 423){ ?> <button class="button button2" onclick="window.location.href='review.php?level=423'" ;>423 <?php if ($userLevel < 423){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 424){ ?> <button class="button button2" onclick="window.location.href='review.php?level=424'" ;>424 <?php if ($userLevel < 424){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 425){ ?> <button class="button button2" onclick="window.location.href='review.php?level=75'" ;>75 <?php if ($userLevel < 75){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 426){ ?> <button class="button button2" onclick="window.location.href='review.php?level=426'" ;>426 <?php if ($userLevel < 426){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 427){ ?> <button class="button button2" onclick="window.location.href='review.php?level=427'" ;>427 <?php if ($userLevel < 427){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 428){ ?> <button class="button button2" onclick="window.location.href='review.php?level=428'" ;>428 <?php if ($userLevel < 428){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 429){ ?> <button class="button button2" onclick="window.location.href='review.php?level=429'" ;>429 <?php if ($userLevel < 429){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 430){ ?> <button class="button button2" onclick="window.location.href='review.php?level=430'" ;>430 <?php if ($userLevel < 430){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 431){ ?> <button class="button button2" onclick="window.location.href='review.php?level=431'" ;>431 <?php if ($userLevel < 431){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 432){ ?> <button class="button button2" onclick="window.location.href='review.php?level=432'" ;>432 <?php if ($userLevel < 432){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 433){ ?> <button class="button button2" onclick="window.location.href='review.php?level=433'" ;>433 <?php if ($userLevel < 433){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 434){ ?> <button class="button button2" onclick="window.location.href='review.php?level=434'" ;>434 <?php if ($userLevel < 434){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 435){ ?> <button class="button button2" onclick="window.location.href='review.php?level=435'" ;>435 <?php if ($userLevel < 435){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 436){ ?> <button class="button button2" onclick="window.location.href='review.php?level=436'" ;>436 <?php if ($userLevel < 436){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 437){ ?> <button class="button button2" onclick="window.location.href='review.php?level=437'" ;>437 <?php if ($userLevel < 437){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 438){ ?> <button class="button button2" onclick="window.location.href='review.php?level=438'" ;>438 <?php if ($userLevel < 438){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 439){ ?> <button class="button button2" onclick="window.location.href='review.php?level=439'" ;>439 <?php if ($userLevel < 439){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 440){ ?> <button class="button button2" onclick="window.location.href='review.php?level=440'" ;>440 <?php if ($userLevel < 440){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 441){ ?> <button class="button button2" onclick="window.location.href='review.php?level=441'" ;>441 <?php if ($userLevel < 441){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 442){ ?> <button class="button button2" onclick="window.location.href='review.php?level=442'" ;>442 <?php if ($userLevel < 442){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 443){ ?> <button class="button button2" onclick="window.location.href='review.php?level=443'" ;>443 <?php if ($userLevel < 443){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 444){ ?> <button class="button button2" onclick="window.location.href='review.php?level=444'" ;>444 <?php if ($userLevel < 444){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 445){ ?> <button class="button button2" onclick="window.location.href='review.php?level=445'" ;>445 <?php if ($userLevel < 445){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 446){ ?> <button class="button button2" onclick="window.location.href='review.php?level=446'" ;>446 <?php if ($userLevel < 446){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 447){ ?> <button class="button button2" onclick="window.location.href='review.php?level=447'" ;>447 <?php if ($userLevel < 447){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 448){ ?> <button class="button button2" onclick="window.location.href='review.php?level=448'" ;>448 <?php if ($userLevel < 448){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 449){ ?> <button class="button button2" onclick="window.location.href='review.php?level=449'" ;>449 <?php if ($userLevel < 449){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 450){ ?> <button class="button button2" onclick="window.location.href='review.php?level=450'" ;>450 <?php if ($userLevel < 450){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>

            <div class="mySlides">
            <?php if ($userLevel >= 451){ ?> <button class="button button2" onclick="window.location.href='review.php?level=451'" ;>451 <?php if ($userLevel < 451){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 452){ ?> <button class="button button2" onclick="window.location.href='review.php?level=452'" ;>452 <?php if ($userLevel < 452){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 453){ ?> <button class="button button2" onclick="window.location.href='review.php?level=453'" ;>453 <?php if ($userLevel < 453){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 454){ ?> <button class="button button2" onclick="window.location.href='review.php?level=454'" ;>454 <?php if ($userLevel < 454){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 455){ ?> <button class="button button2" onclick="window.location.href='review.php?level=455'" ;>455 <?php if ($userLevel < 455){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 456){ ?> <button class="button button2" onclick="window.location.href='review.php?level=456'" ;>456 <?php if ($userLevel < 456){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 457){ ?> <button class="button button2" onclick="window.location.href='review.php?level=457'" ;>457 <?php if ($userLevel < 457){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 458){ ?> <button class="button button2" onclick="window.location.href='review.php?level=458'" ;>458 <?php if ($userLevel < 458){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 459){ ?> <button class="button button2" onclick="window.location.href='review.php?level=459'" ;>459 <?php if ($userLevel < 459){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 460){ ?> <button class="button button2" onclick="window.location.href='review.php?level=460'" ;>460 <?php if ($userLevel < 460){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 461){ ?> <button class="button button2" onclick="window.location.href='review.php?level=461'" ;>461 <?php if ($userLevel < 461){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 462){ ?> <button class="button button2" onclick="window.location.href='review.php?level=462'" ;>462 <?php if ($userLevel < 462){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 463){ ?> <button class="button button2" onclick="window.location.href='review.php?level=463'" ;>463 <?php if ($userLevel < 463){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 464){ ?> <button class="button button2" onclick="window.location.href='review.php?level=464'" ;>464 <?php if ($userLevel < 464){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 465){ ?> <button class="button button2" onclick="window.location.href='review.php?level=465'" ;>465 <?php if ($userLevel < 465){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 466){ ?> <button class="button button2" onclick="window.location.href='review.php?level=466'" ;>466 <?php if ($userLevel < 466){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 467){ ?> <button class="button button2" onclick="window.location.href='review.php?level=467'" ;>467 <?php if ($userLevel < 467){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 468){ ?> <button class="button button2" onclick="window.location.href='review.php?level=468'" ;>468 <?php if ($userLevel < 468){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 469){ ?> <button class="button button2" onclick="window.location.href='review.php?level=469'" ;>469 <?php if ($userLevel < 469){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 470){ ?> <button class="button button2" onclick="window.location.href='review.php?level=470'" ;>470 <?php if ($userLevel < 470){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 471){ ?> <button class="button button2" onclick="window.location.href='review.php?level=471'" ;>471 <?php if ($userLevel < 471){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 472){ ?> <button class="button button2" onclick="window.location.href='review.php?level=472'" ;>472 <?php if ($userLevel < 472){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 473){ ?> <button class="button button2" onclick="window.location.href='review.php?level=473'" ;>473 <?php if ($userLevel < 473){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 474){ ?> <button class="button button2" onclick="window.location.href='review.php?level=474'" ;>474 <?php if ($userLevel < 474){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 475){ ?> <button class="button button2" onclick="window.location.href='review.php?level=475'" ;>475 <?php if ($userLevel < 475){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 476){ ?> <button class="button button2" onclick="window.location.href='review.php?level=476'" ;>476 <?php if ($userLevel < 476){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 477){ ?> <button class="button button2" onclick="window.location.href='review.php?level=477'" ;>477 <?php if ($userLevel < 477){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 478){ ?> <button class="button button2" onclick="window.location.href='review.php?level=478'" ;>478 <?php if ($userLevel < 478){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 479){ ?> <button class="button button2" onclick="window.location.href='review.php?level=479'" ;>479 <?php if ($userLevel < 479){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 480){ ?> <button class="button button2" onclick="window.location.href='review.php?level=80'" ;>480 <?php if ($userLevel < 480){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 481){ ?> <button class="button button2" onclick="window.location.href='review.php?level=481'" ;>481 <?php if ($userLevel < 481){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 482){ ?> <button class="button button2" onclick="window.location.href='review.php?level=482'" ;>482 <?php if ($userLevel < 482){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 483){ ?> <button class="button button2" onclick="window.location.href='review.php?level=483'" ;>483 <?php if ($userLevel < 483){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 484){ ?> <button class="button button2" onclick="window.location.href='review.php?level=484'" ;>484 <?php if ($userLevel < 484){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 485){ ?> <button class="button button2" onclick="window.location.href='review.php?level=485'" ;>485 <?php if ($userLevel < 485){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 486){ ?> <button class="button button2" onclick="window.location.href='review.php?level=486'" ;>486 <?php if ($userLevel < 486){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 487){ ?> <button class="button button2" onclick="window.location.href='review.php?level=487'" ;>487 <?php if ($userLevel < 487){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 488){ ?> <button class="button button2" onclick="window.location.href='review.php?level=488'" ;>488 <?php if ($userLevel < 488){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 489){ ?> <button class="button button2" onclick="window.location.href='review.php?level=489'" ;>489 <?php if ($userLevel < 489){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 490){ ?> <button class="button button2" onclick="window.location.href='review.php?level=490'" ;>490 <?php if ($userLevel < 490){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 491){ ?> <button class="button button2" onclick="window.location.href='review.php?level=491'" ;>491 <?php if ($userLevel < 491){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 492){ ?> <button class="button button2" onclick="window.location.href='review.php?level=492'" ;>492 <?php if ($userLevel < 492){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 493){ ?> <button class="button button2" onclick="window.location.href='review.php?level=493'" ;>493 <?php if ($userLevel < 493){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 494){ ?> <button class="button button2" onclick="window.location.href='review.php?level=494'" ;>494 <?php if ($userLevel < 494){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 495){ ?> <button class="button button2" onclick="window.location.href='review.php?level=495'" ;>495 <?php if ($userLevel < 495){ ?>  <?php  }?> </button> <?php  }
                ?>

<?php if ($userLevel >= 496){ ?> <button class="button button2" onclick="window.location.href='review.php?level=496'" ;>496 <?php if ($userLevel < 496){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 497){ ?> <button class="button button2" onclick="window.location.href='review.php?level=497'" ;>497 <?php if ($userLevel < 497){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 498){ ?> <button class="button button2" onclick="window.location.href='review.php?level=498'" ;>498 <?php if ($userLevel < 498){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 499){ ?> <button class="button button2" onclick="window.location.href='review.php?level=499'" ;>499 <?php if ($userLevel < 499){ ?>  <?php  }?> </button> <?php  }
                ?>

                <?php if ($userLevel >= 500){ ?> <button class="button button2" onclick="window.location.href='review.php?level=500'" ;>500 <?php if ($userLevel < 500){ ?>  <?php  }?> </button> <?php  }
                ?>
            </div>
            
            <?php if ($userLevel >= 51) { ?>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <?php } if ($userLevel <51) { }?>

        </div>

        <?php if ($userLevel >= 51) { ?>
            <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
        </div>
        <?php } if ($userLevel <51) {}?>

        <?php
                if(isset($_GET["error"])) {
                    if ($_GET["error"] == "permissiondenied") {
                        echo "<p>Permission denied! Complete previous levels!</p>";
                    }
                    if ($_GET["error"] == "somethingwentwrong") {
                        echo "<p>Something went wrong! Try again!</p>";
                    }
                }
        ?>

        <script src="JavaScript/newkanjis.js"></script>
    </center>
    </body>
</html>