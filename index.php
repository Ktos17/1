<?php
$cookie = 'mode';
$mode_value = '';
setcookie($cookie, $mode_value, time() + (86400 * 30), "/");

if (isset($_COOKIE['mode'])) {
    $selectedMode = $_COOKIE['mode'];
    if ($selectedMode === 'dark') {
        echo 'Dark Mode został wybrany w JavaScript.';
    } elseif ($selectedMode === 'light') {
        echo 'Light Mode został wybrany w JavaScript.';
    } else {
        echo 'Tryb nieznany.';
    }

    $cookie_name = "Theme";
    $cookie_value = $selectedMode;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
} else {
    echo 'Tryb nie został jeszcze wybrany.';
}
?>
/*
  Cookie to modify
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Yuify | Home</title>
    <link rel="shortcut icon" href="y.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-49W7075SS1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-49W7075SS1');
</script>

/*
Cookie that i have to modify and set to Theme function
*/


<style>

  body {
    <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            $lang = isset($_GET['lang']) ? $_GET['lang'] : 'english';

            switch ($lang) {
                case 'polish':
                    switch ($page) {
                        case 'home':
                            break;
                        case 'payment':
                            break;
                        case 'html introduction':
                            $name = "darkMode";
                            if (isset($_COOKIE[$name])) {
                                echo 'color: white;';
                                echo 'background-color: black;';
                            } else {
                                echo 'color: black;';
                                echo 'background-color: white;';
                                echo '/* Nie dziala */';
                            }
                            echo 'overflow-y: auto;';
                            echo 'height: 2000px;';
                            echo 'overflow-x: hidden;';
                            break;
                        case 'basics of document structure':
                            echo 'background-color: #fff;';
                            break;
                        default:
                            echo 'overflow-x: hidden;';
                            echo 'overflow-y: hidden;';
                            break;
                    }
                    break;

                case 'english':
                    switch ($page) {
                        case 'home':
                            break;
                        case 'payment':
                            break;
                        case 'html introduction':
                            echo 'overflow-y: auto;';
                            echo 'height: 2000px;';
                            echo 'overflow-x: hidden;';
                            break;
                        case 'basics of document structure':
                            echo 'background-color: #fff;';
                            break;
                        default:
                            echo 'overflow-x: hidden;';
                            echo 'overflow-y: hidden;';
                            break;
                    }
                    break;
            }
            ?>
  }
  .a {
    <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 'home';
         switch($page) {
          case 'home':
            echo 'width: 0px;';
            break;
            case 'payment':
                echo 'display: none;';
                break;
            default:
                echo 'display: none;';  
                break;
         }
    ?>
  }

  .sidebar {
    <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 'home';
         switch($page) {
          case 'home':
            case 'payment':
                break;
            default:
                echo 'display: none;';
                break;
         }
    ?>
  }

  .mnioasdi2-and2-0aisd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: block;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'Website order':
            echo 'display: none !important;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .nisdf-sdfio2-anisfhjsdlf-qadsi {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: block;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .aoisdj2-niasd {
    <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 'home';
         switch($page) {
          case 'home':
            echo 'display: none;';
            break;
            case 'payment':
                echo 'display: none;';
                break;
            case 'html introduction';
              echo 'display: none';
              break;
            default:
                echo 'display: block;';
                break;
         }
    ?>
  }

  

  .naisd-2ansidcvnwioejaopsd-qnasifnsdifoqw {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }



  .nbiaosd-xcvkjaw-3nidsf-3nisdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          default: 
            echo 'border: 2px solid #000;';
            echo 'color: #000;';
            echo 'margin-left: -130px;';
            break;
      }
    ?>
  }

  .container {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          case 'html introduction':
          echo 'overflow-y: auto;';
          echo 'min-height: 3000px;';
          echo 'display: flex;';
          echo 'align-items: center;';
          echo 'flex-direction: column;';
          echo 'justify-content: unset;';
          break;
          default: 
            break;
      }
    ?>
  }

  .page {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: block;';
            break;
          case 'payment':
            echo 'display: block;';
            break;
          case 'html introduction';
          echo 'display: block;';
          break;
          default: 
          echo 'display: block;';
            break;
          }
            ?>
            }

      .mniaosd-2niasd-2niasd-2 {
        <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          default: 
            echo 'display: block;';
            break;
      }
    ?>
      }


  .bnxcv-32jzx-asd20asdiasd-nhoiafs {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          default: 
            echo 'color: #000;';
            echo 'margin-left: 0px;';
            break;
      }
    ?>
  }

  .niasd-2nisdf-3niasd-2niasd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          default: 
            echo 'position: relative;';
            echo 'left: 62px;';
            echo 'top: 166px;';
            echo 'height: 300px;';
            break;
      }
    ?>
  }

  .joisdf-sdafmno3-sdfno3 {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          case 'what is html':
            echo 'color: #fff;';
            break;
          default: 
            echo 'color: #fff;';
            break;
      }
    ?>
  }

  .naisd-3niaosd-3niawsd-3nioasd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          case 'what is html': 
            echo 'color: #fff;';
            break;
          default: 
            echo 'color: #fff;';
            break;
      }
    ?>
  }

  .nioadsf-3nasd-3nas-dn3iasd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          case 'what is html':
            echo 'color: #fff;';
            break;
          default: 
            echo 'color: #fff;';
            break;
      }
    ?>
  }

  .nias-d2niasd-nicx-qwnifsad {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            break;
          case 'payment':
            break;
          default: 
            echo 'margin-left: -860px;';
            break;
      }
    ?>
  }

  .nkasdn02-asni2-naid-ajbsd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .zxcnzxc-20asdi2-saindasdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
          echo 'margin-top: -500px;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .bzxci2-asdi2-andi-ansid {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .nias-d2niasd2niasd-2niasd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .mnasd-2niasd-2niasd0 {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
          echo 'display: block;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .asmnd-2naisd-cnivasdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .znxic2-zxnciqwsadnidfas {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: block;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .ands-2nidfs-wnaisd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: block;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .jisfjosidjfo {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: block;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iowuernuxdf-nqwoibsnudfs-dfnoqwesdbf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: block;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iquweionfosd-fsdoifjsd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: block;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iouweioruoiweniosdf02n-buidsf92aodsoaasasd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: block;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .ioauwqniofasd-2nidasf-sdnfi2-anifsd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: block;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iouensdfoasd-sdfnoiqwbusdf-niofnsidjf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: block;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iuqwoeoisdf-2nioasd-dniofdshfng {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'Website order':
            echo 'display: none;';
            break;
          case 'Block And Inline':
            echo 'display: none;';
            break;
          case 'Block & Inline':
            echo 'display: none;';
            break;
          case 'edytor tekstu html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'Test 1':
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'Test-1': 
            echo 'display: none;';
          break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'Cytaty w HTML':
            echo 'display: none;';
            break;
          case 'Tabele w HTML':
            echo 'display: none;';
            break;
          case 'Head w HTML':
            echo 'display: none;';
          case 'komentarze w html':
            echo 'display: none;';
            break;
          case 'id w html':
            echo 'display: none;';
            break;
          case 'divy w html':
            echo 'display: none;';
          break;
          case 'logowanie':
            echo 'display: none;';
            break;
          case 'formatowanie tekstu w html':
            echo 'display: none;';
            break;
          case 'klasy w html':
            echo 'display: none;';
            break;
          case 'atrybuty':
            echo 'display: none;';
            break;
          case 'zadania-1':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: block;';
          break;
          default: 
            echo 'display: block;';
            break;
      }
    ?>
  }

  .iuqweionsiodf-anmiosoadf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'Website order':
            echo 'display: none;';
            break;
          case 'edytor tekstu html':
            echo 'display: none;';
            break;
          case 'Block And Inline':
            echo 'display: none;';
            break;
          case 'Test 1':
            echo 'display: none;';
            break;
          case 'Block & Inline':
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'Test-1':
            echo 'display: none;';
            break;
          case 'Tabele w HTML':
            echo 'display: none;';
            break;
          case 'Head w HTML':
            echo 'display: none;';
            break;
          case 'Cytaty w HTML':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html';
            echo 'display: none;';
            break;
          case 'klasy w html':
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'komentarze w html':
            echo 'display: none;';
            break;
          case 'divy w html':
            echo 'display: none;';
          break;
          case 'logowanie':
            echo 'display: none;';
            break;
          case 'id w html':
            echo 'display: none;';
            break;
          case 'atrybuty':
            echo 'display: none;';
            break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'formatowanie tekstu w html':
            echo 'display: none;';
            break;
          case 'zadania-1':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: block;';
          break;
          default: 
            echo 'display: block;';
            break;
      }
    ?>
  }

  .iuqwebasd-2nias-dniaofsinnsdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .niasdaisd {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .QOPWEJISF-DFJDFOIG923-D-GDFGNOVNQW-DOISDF {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'Website order':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .naisd-2niasd-2nias {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: block;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iquweinsdf-sdofsdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: block;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .oiqwecxnbvow-ji2qwjidsf-2nxkcjniosdfjg {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: block;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'Head w HTML':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iuqweiosdf-2noiadsnfoisd-f2joiqjowiasdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'formatowanie tekstu w html':
            echo 'display: none;';
            break;
          case 'komentarze w html':
            echo 'display: none;';
          break;
          case 'atrybuty':
            echo 'display: none';
            break;
          case 'divy w html':
            echo 'display: none;';
          break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'klasy w html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'zadania-1':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .opiqe0ds-129IOSDF0-NIDFjsFDS398DfsfoisdfS9f0s {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'formatowanie tekstu w html':
            echo 'display: none;';
            break;
          case 'komentarze w html':
            echo 'display: none;';
          break;
          case 'id w html':
            echo 'display: none;';
            break;
          case 'Test 1':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'atrybuty':
            echo 'display: none';
            break;
          case 'divy w html':
            echo 'display: none;';
          break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'klasy w html':
            echo 'display: none;';
            break;
          case 'zadania-1':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .NSDFBNIOSDF-1NWOIS-DFGNDSF {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'formatowanie tekstu w html':
            echo 'display: none;';
            break;
          case 'Website order':
            echo 'display: block';
            break;
          case 'komentarze w html':
            echo 'display: none;';
          break;
          case 'id w html':
            echo 'display: none;';
            break;
          case 'Test 1':
            echo 'display: none;';
            break;
          case 'atrybuty':
            echo 'display: none';
            break;
          case 'divy w html':
            echo 'display: none;';
          break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'klasy w html':
            echo 'display: none;';
            break;
          case 'zadania-1':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .IUQWENUSDF-N239F-SDFGNDF-GU209G-DNF0GODFG {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'formatowanie tekstu w html':
            echo 'display: none;';
            break;
          case 'komentarze w html':
            echo 'display: none;';
          break;
          case 'id w html':
            echo 'display: none;';
            break;
          case 'Test 1':
            echo 'display: none;';
            break;
          case 'atrybuty':
            echo 'display: none';
            break;
          case 'divy w html':
            echo 'display: none;';
          break;
          case 'Block And Inline':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'klasy w html':
            echo 'display: none;';
            break;
          case 'zadania-1':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iouqweoiopqwnmxcn2-bxcvo20isdf-2bnosdofhjoqwe {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'formatowanie tekstu w html':
            echo 'display: none;';
            break;
          case 'komentarze w html':
            echo 'display: none;';
          break;
          case 'id w html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'atrybuty':
            echo 'display: none';
            break;
          case 'divy w html':
            echo 'display: none;';
          break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'klasy w html':
            echo 'display: none;';
            break;
          case 'zadania-1':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iquwenjsdf-2nioasd-nodsf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'Block And Inline':
            echo 'display: block;';
            echo 'display: flex;';
          case 'podstawy html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'Cytaty w HTML':
            echo 'display: block;';
            echo 'display: flex;';
          case 'pierwsza strona internetowa w html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'Tabele w HTML':
            echo 'display: block;';
            echo 'display: flex;';
          break;
          case 'formatowanie tekstu w html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'Head w HTML':
            echo 'display: block;';
            echo 'display: flex;';
          case 'komentarze w html':
            echo 'display: block;';
            echo 'display: flex;';
          break;
          case 'id w html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'atrybuty':
            echo 'display: block';
            echo 'display: flex;';
            break;
          case 'divy w html':
            echo 'display: block;';
            echo 'display: flex;';
          break;
          case 'elementy w html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'klasy w html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'zadania-1':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iuqwe-9012NOSD0J0U09fu0as9u0FU90uf9au90FU0dfuHSdf8hDHF89sdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'Cytaty w HTML':
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'Test-1':
            echo 'display: block;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .oiuqwiosdf-nio-2josdjofbnk-qjiosdo {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'Cytaty w HTML':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iquwoenisdf-2nioasd-nosdifuqnoisdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .iquweonisdf-2noiasisdfnio-noisdjfsdf91820nfo {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: block;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .oiuqwbusdf02-sdnfo2-nsodf3j0sdfno {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: block;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .qiqwejoisdf-2isjdifo-2poposdfp {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'komentarze w html':
            echo 'display: block;';
            echo 'display: flex;';
          break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .jisodf-2nidf-2nosdjfio {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
            echo 'display: none;';
            break;
          case 'zadania-1':
            echo 'display: block;';
            break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .oiqweidsf-2iasdsodfipo-2sdfosdfosdfinifgsjsiojfdogijsofigjosifg {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'formatowanie tekstu w html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .oiqwenidf-j2iuoisdfni2-nsidfj {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'atrybuty':
            echo 'display: block;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .ouqweniudf-2nisdf-2iodnfsdf {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'elementy w html':
            echo 'display: block;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .isdf-2idf-2jsdjfi2-sdfiosjdfio2nisdf-nsodfjo {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          case 'artybuty':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          default: 
            echo 'display: block;';
            break;
      }
    ?>
  }

  .oqiwe90j23908nsdf-29019wejondoifg-a8f09gq34g {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'Tabele w HTML':
            echo 'display: block;';
            echo 'display: flex;';
            echo 'flex-direction: column;';
          break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'divy w html':
            echo 'display: none;';
            break;
          case 'logowanie':
            echo 'display: none;';
          break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          case 'artybuty':
            echo 'display: none;';
            break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .qweiusdf-2noiqwijeos-dfosidfj {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'divy w html':
            echo 'display: none;';
            break;
          case 'logowanie':
            echo 'display: block;';
            echo 'display: flex;';
          break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          case 'artybuty':
            echo 'display: none;';
            break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .NSFDUFSDFP2-FOIIUFG-NIO12IOF-iosdfo {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'divy w html':
            echo 'display: none;';
            break;
          case 'logowanie':
            echo 'display: none;';
          break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          case 'artybuty':
            echo 'display: none;';
            break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  .oiqweniosdf-2d-fsdfo2-jsdfjoipsdf-2oisdjfo {
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      switch ($page) {
          case 'home':
            echo 'display: none;';
            break;
          case 'payment':
            echo 'display: none;';
            break;
          case 'html introduction';
            echo 'display: none;';
            break;
          case 'what is css';
            echo 'display: none;';
            break;
          case 'what is html';
            echo 'display: none;';
            break;
          case 'edytor tekstu html';
            echo 'display: none;';
            break;
          case 'podstawy html':
            echo 'display: none;';
            break;
          case 'divy w html':
            echo 'display: block;';
            echo 'display: flex;';
            break;
          case 'elementy w html':
            echo 'display: none;';
            break;
          case 'pierwsza strona internetowa w html':
            echo 'display: none;';
            break;
          case 'what is javascript;';
          echo 'display: none;';
          break;
          case 'artybuty':
            echo 'display: none;';
            break;
          default: 
            echo 'display: none;';
            break;
      }
    ?>
  }

  
</style>

</head>
<body>
  <p class="NFNSOIDF-2NOIASF-SDFSNDOIF">We are sorry, but this screen version is not ready yet.</p>
  <p class="NSFDUFSDFP2-FOIIUFG-NIO12IOF-iosdfo">We are sorry, but this screen version is not ready yet.</p>
    <div class="container">
    <!--What is html page-->
    <div class="jisfjosidjfo">
      <p class="iuqw-dfngoasndf-sdfnofndosf">Czym jest HTML?</p>
      <p class="iouweqhuisdf-qwioeubdufisdf">HTML to podstawowy język używany do tworzenia stron internetowych. HTML umożliwia dodawanie różnych elementów  na stronie, jak nagłówki, teksty czy obrazki.  Działa z innymi językami, jak CSS który odpowiada za wygląd  i JavaScript, który dodaje interakcję, żeby strony były bardziej dynamiczne. W skrócie, HTML to must-have, jeśli chcesz tworzyć własne strony internetowe.</p>
    </div>

    <div class="iowuernuxdf-nqwoibsnudfs-dfnoqwesdbf">
    <p class="opiquwensidf-2mnoaijsdsnf">Przykład użycia HTML:</p>  
    <div class="iouewrudf-2nioas-sdfiownodsf">
      <h1>Tytuł</h1>
      <ul>
        <li>Podpunkt 1</li>
        <li>Podpunkt 2</li>
        <li>Podpunkt 3</li>
      </ul>
    </div>
  </div>
  <a class="iouensdfoasd-sdfnoiqwbusdf-niofnsidjf" href="index.php?page=what is css">Czym jest CSS?</a>
    <!--End of what is html page-->
    <!--What is css page-->
    <div class="iquweionfosd-fsdoifjsd">
      <p class="qiwueioasdfhoisdfhjisdf">Czym jest CSS?</p>
      <p class="oqiwepmnsdopf-qnwioadfssbduf-2noashsdfbniou">CSS, czyli Cascading Style Sheets, to język stylów używany do określania wyglądu i prezentacji treści na stronach internetowych. Jest to narzędzie, które umożliwia nadawanie stylów graficznych, takich jak kolory, czcionki, odstępy między elementami czy układ strony. CSS działa z HTML, gdzie HTML definiuje strukturę treści, a CSS nadaje jej atrakcyjny wygląd.
        Styl CSS jest definiowany poprzez selektory, które identyfikują elementy HTML, oraz właściwości, które określają, jak mają wyglądać. Dzięki zastosowaniu CSS, strony internetowe stają się bardziej czytelne, estetyczne i zorganizowane, a także dostosowane do różnych urządzeń i ekranów.</p>
    </div>
    <div class="iouweioruoiweniosdf02n-buidsf92aodsoaasasd">
      <p class="iouq2w-2iasd23o-asfno2uoasiofd">Przykład HTMl + CSS</p>
      <div class="iuqwe-2nioasfd-2nias-fsifjsoidf">
        <p class="ioqw-oasd-2niasf-sdnfoqsda">E-mail:</p>
        <input type="text" class="jo2uas2-anifasdfniaosdbf">
        <p class="oioaefop2-3nmoafijssdfg">Password:</p>
        <input type="text" class="iwuerisdiofnsdf-23oadfss-df-sdfniwsofsd">
        <button class="asdiuiqowd-asn2i1a-sfnosdf012-asfinas">Sign In</button>
      </div>
    </div>
    <a class="ioauwqniofasd-2nidasf-sdnfi2-anifsd" href="index.php?page=what is javascript">Czym jest JavaScript?</a>
    <div class="iuqwoeoisdf-2nioasd-dniofdshfng">
      <p class="oqiwenisdf-2niaossdf">Czym jest JavaScript?</p>
      <p class="iquweonsdf-adfs-dqnisdfno">JavaScript (JS) to skryptowy język programowania, który jest używany głównie do tworzenia interaktywnych elementów na stronach internetowych. Jest to język skryptowy po stronie klienta, co oznacza, że jest wykonywany bezpośrednio przez przeglądarkę użytkownika, umożliwiając dynamiczną manipulację treścią i interakcję z użytkownikiem.
        JavaScript umożliwia tworzenie interaktywnych funkcji, takich jak obsługa zdarzeń (np. kliknięcia, najechania myszą), manipulacja elementami HTML i CSS. Dzięki JS strony stają się bardziej responsywne i dynamiczne, co przyczynia się do poprawy doświadczenia użytkownika.</p>
    </div>
    <div class="iuqweionsiodf-anmiosoadf">
      <p class="ioquwen2-ndif-wsenio2esdf">Przykład HTML + CSS + JS</p>
      <div id="exampleJsWindow" class="iuqwe-2nioasfd-2nias-fsifjsoidf">
        <p class="ioqw-oasd-2niasf-sdnfoqsda">E-mail:</p>
        <input type="text" class="jo2uas2-anifasdfniaosdbf">
        <p class="oioaefop2-3nmoafijssdfg">Password:</p>
        <input type="text" class="iwuerisdiofnsdf-23oadfss-df-sdfniwsofsd">
        <button id="exampleJsBtn" class="asdiuiqowd-asn2i1a-sfnosdf012-asfinas">Sign In</button>
      <button id="goToLoginPageExample" class="iouwnajusd-2nias-ndiofsd">Go Back</button>
    </div>
</div>
    <!--End of what is css page-->
    <!--Right sidebar in course-->
    <div class="iquwenjsdf-2nioasd-nodsf">
      <p class="qyuwebjhsdf-2nisd-fnsiodf">HTML</p>
      <p class="iuqwoenifd-2nid-fsdndifosd">HTML - Wprowadzenie</p>
      <a href="index.php?page=edytor tekstu html"><p class="nusdufnisd-2oiansdoifsd">Edytor Tekstu</p></a>
      <a href="index.php?page=podstawy html"><p class="iu12ionsdf-n2o-snodfsd">Podstawy</p></a>
      <a class="msoidfjop2-sdinfd-2nosdf" href="index.php?page=pierwsza strona internetowa w html">Pierwsza Strona internetowa</a>
      <a class="misodf-2nisdf-2noisdf" href="index.php?page=elementy w html">Elementy</a>
      <a class="nisdf-2nisdf-2oisdf" href="index.php?page=zadania-1">Zadania</a>
      <a class="oqiwemosdfjkpqw-2oisdjfosd-2joisdjfo" href="index.php?page=atrybuty">Atrybuty</a>
      <a class="jhnxci2-sndiofsdfniocvx-noasjoisjdof" href="index.php?page=formatowanie tekstu w html">Tekst</a>
      <a class="nxcvjopewkd-2niosdof-vniojoidsjof" href="index.php?page=divy w html">Div</a>
      <a class="niwnoisdnfiosd-2noisdf-sdbfnisdjio" href="index.php?page=komentarze w html">Komentarze</a>
      <a class="iquwensdfnbdjko0qnsd02-sdbnfsjodpf-2iojsdijofsd" href="index.php?page=klasy w html">Klasy</a>
      <a class="opqiwemsdfmno2-qiodimnndioopja-3jdfjopg" href="">id</a>
    </div>
    <!--End of right sidebar in course-->
    <!--Course page-->
    <div class="iquweinsdf-sdofsdf">
    <p class="iuqwoe-2nisdf-2nisdf">Kilka słów wstępu...</p>
    <p class="ijwindsf-2mos-dospdf">Dlaczego HTML?</p>
    <p class="iuodfnsiodf-2isdf-snoidf">HTML to język, który pozwala definiować strukturę dokumentu internetowego, określać elementy takie jak nagłówki, paragrafy, obrazy, linki i wiele innych. Dzięki niemu możemy tworzyć czytelne, zorganizowane i estetyczne strony internetowe, dostosowane do różnych urządzeń i przeglądarek.</p>
    <p class="iquwe-2nisdf-2niosdf">Czego się nauczysz w tym kursie?</p>
    <p class="iuqwoe-2nisdfsdfsd-nioqwedf">W trakcie tego kursu zapoznasz się z podstawowymi tagami HTML, nauczysz się budować strony internetowe od podstaw, a także odkryjesz techniki, które umożliwią Ci bardziej zaawansowane projektowanie stron. Będziesz miał okazję praktykować zdobytą wiedzę poprzez różnorodne zadania znajdujące się pod każdym tematem i projekty praktyczne.</p>
    <a href="index.php?page=edytor tekstu html">
    <button class="iquweondf-sndiofsd-2niasdpnsdfop">Edytor Tekstu     
      <span class="material-symbols-outlined qweiiosdn-2nioasd-snodfisiod">
      chevron_right
      </span></button>  </a>
  </div>

  <div class="iquwoenisdf-2nioasd-nosdifuqnoisdf">
    <p class="iquwend-dfuiqwybsdf-qnwiuhdf">Edytor Tekstu</p>
    <p class="iqouwenidf-2niodjfsoidf-nioadsfsdf">Aby stworzyć swoją pierwszą stronę internetową potrzebujesz edytora tekstu w którym będzie się znajdował twój kod. Jedynimi z najpopularniejszych są: <br>
    </p>
    <p class="oqiweonisdf2-asoijsdf">&#x2022; Visual Studio Code</p>
    <p class="iouqwejnsdf-2noiajsdasd">&#x2022; Sublime text</p>
    <p class="hiuasiudsf-2nioadsf-sdfnosdisofj">&#x2022; Notepad++</p>
    <p class="iuqwenisdf-2nidf-sdfnoisdf">W ostatnim czasie największą popularność zyskuje Visual Studio Code, ale wybierz ten który najbardziej Ci odpowiada.</p>
    <a href="index.php?page=podstawy html">
    <button class="iuqwend-f2niasdf-nosdf">Podstawy 
    <span class="material-symbols-outlined">
    chevron_right
    </span>
    </button>
    </a>
  </div>

  <div class="iquweonisdf-2noiasisdfnio-noisdjfsdf91820nfo">
    <p class="iuweorndf-isodfi29uds0fisd">Podstawy HTML</p>
    <p class="iuqwensdf2-nisodf92noidf">Tak wygląda przykładowy kod HTML:</p>
    <div class="iuqwedf-2oiuafsodnfoid">
      <p class="iosdfsdf-nisdfo-2nsadnoisdf">&lt;!DOCTYPE html&gt;</p>
      <p class="iqwuebjsdf-23josdofsd">&lt;html&gt;</p>
      <p class="oweirpmsd12j-snfosdf">&lt;body&gt;</p>
      <br>
      <p><span class="njcv-2iaosd-2j9sdfjsd-2nasf">&lt;p&gt;</span>Welcome To Our Website!<span class="iquwennjsdf0-2niasdf-j12niodsf">&lt;p&gt;</span></p>
      <br>
      <p class="oqiwemsdf-jfsn2iodsf">&lt;/body&gt;</p>
      <p class="iuqwensdf-2niosdf-2nonsdof">&lt;/html&gt</p>
    </div>
    <p class="iuqwenjdf-2niqw92u9sdfnids-93023nusdf">Wszystkie pliki HTML zaczynają się od <span class="iquweo-2jiosdf09021nisd-oaswdjoaisd">&lt;!DOCTYPE html&gt;</span> (Skrót DOCTYPE oznacza "Document Type Definiton", po polsku jest to "Definicja Typu Dokumentu"). <span class="jidf82-snf-2u90afniusdf">&lt;!DOCTYPE html&gt;</span> Mówi przeglądarce, że w naszym kodzie używamy HTML5, czyli najnowszej wersji HTML. </p>
    <p class="iquwenisdf-2iosdf-2nosdf"><span class="iqwuenskdf-2niodsf-2noidsf">&lt;html&gt;</span> Jest to element od którego zaczynamy pisać nasz kod. Za każdym razem musimy pamiętać aby zamknąć tag <span class="bjxcvow-2nidsf-2osdf-2j983jsdf-sdf">&lt;html&gt;</span>. Możemy to zrobić dodając <span class="iqwueonsdf-2niosdf-2odsf">/</span> po <span class="iquwenidsf-2niosdf-2nosdnfo">&lt;</span> ( Powinno to tak wyglądać: <span class="uidfniosdf-2nsoidf-noisfas">&lt;/html&gt;</span>). Od momentu zamknięcia tagu <span class="iuqwenisdf-2nisd-f2nosdf">&lt;html&gt;</span> nie możemy już dodawać innych elementów takich jak paragrafy itd.</p>
    <p class="uqwisidf-20sdf-2nsdf-290sdfn"><span class="iuesdfnoi2-dsnfo2-ndosfnsdiof">&lt;body&gt;</span> Jest to część kodu w której znajduje się wszystko co jest wyświetlane na stronie internetowej. Wszystko co chcemy wyświetlić na stronie musi znajdować się <b>pomiędzy</b> <span class="oqwiuenisdf-2niosdf92nosdf-2nosdnfosdf">&lt;body&gt; &lt;/body&gt;</span> </p>
    <p class="jsidfj2-sdnfi2-nodsf"><span class="jksdfni2-nisdf-2jdsafnsdf">&lt;p&gt; &lt;/p&gt;</span> odpowiada za paragraf. Możemy używać go poprostu do dodawania tekstu na naszej stronie internetowej. Każdy paragraf jest wyświetalny w oddzielnej linijce.</p>
    <p class="o2iopsdjfop2-sndfosdfujo9asd">Z powyższych przykładów możemy wywnioskować jak ogólnie zbudowane są tagi w HTML</p>
    <p class="oqiweniosdf-2nodsfisdpfi">&lt;<span class="jidfnoi2-nisdf-2nosdf">p</span>&gt;To jest tekst&lt;/<span class="ow2nidofnoisdf-2niosdf-nio2asdf">p</span>&gt;</p>
    <span class="material-symbols-outlined oieiosdf-2nidasf-nsodfij">
      keyboard_backspace
      </span>
      <p class="qweisdfni2-nosdf-2osd9fu03nisdf-nosdfnisodf">Zamknięcie tagu</p>
      <span class="material-symbols-outlined sdfsdfasdjfio3u90dnofsd-2nidasf-nsodfij">
      keyboard_backspace
      </span>
      <p class="iquweisdf-2nosdf20nosdf">Treść</p>
      <span class="material-symbols-outlined sndf93u0wensdf03hosdfno-2nidasf-nsodfij">
      keyboard_backspace
      </span>
      <p class="owiepmsodpf-3osdf-2nosd9fndsf">Otwarcie Tagu</p>
      <p class="jpodsfj2-nsiodf-2nodsf">Podsumowanie</p>
      <div class="niandfi2-nisdf-29asdfnoi">
        <p class="osdfmo2-sdnf2-nisdfno"><span class="sdfjop2-3nisdf-02-sdfnasdjp">&lt;!DOCTYPE html&gt;</span> - Określa jakiego typu dokumentu używamy (w tym przypadku HTML5).</p>
        </div>
      <div class="ujqwieuusdf-2nisd-fn2oasdfoid">
        <p class="qwenidfo2-nisdf-2nosdf-2nosdf"><span class="nisdfni2-nisdf-2j9dasf-sdfnosdf">&lt;html&gt; &lt;/html&gt;</span> - Jest to miejsce w którym znajduje się twój kod HTML.</p>
      </div>
      <div class="ujqiwoenisdfno2-nsidf-2nosdf">
        <p class="uoiqwniodf-2nisdfoiuaniosdf"><span class="ioqweiodfnoi2-nisdf-2nodf">&lt;body&gt; &lt;/body&gt;</span> - Obszar dokumentu w którym umieszcza się wszystko co jest widoczne na stronie np. linki, obrazy itd.</p>
      </div>  
      <div class="isdf-2nisdfj02-sdnf">
        <p class="oiqwpenosdf-2niosdf-2noisdfnoi"><span class="nisdfni2-nisdf-9083nisdf-sdfsd">&lt;p&gt; &lt;/p&gt;</span> - Umożliwia dodawanie paragrafów, w których może znajdować się tekst.</p>
      </div>
      <p class="oiudsfni2-nisdf-2noiasd">Zadania</p>
      <p class="iosdufion2insdf-2nisd-fnosdfn">Stwórz kod w którym będzie widoczny napis "Witaj na naszej stronie internetowej!" (W następnym temacie znajdziesz odpowiedź oraz poradnik w którym dowiesz się jak zamienić ten kod w stronę internetową)</p>
      <a href="index.php?page=pierwsza strona internetowa w html"><button class="jdfjois-2nisd-f2nosdfno">Pierwsza Strona Internetowa <span class="material-symbols-outlined">chevron_right</span></button></a>
    </div>

    <div class="oiuqwbusdf02-sdnfo2-nsodf3j0sdfno">
      <p class="opiwqnodf-2nidsf-2noansd">Pierwsza strona internetowa w HTML</p>
      <p class="iuqwnidsf-2n-sdfni2-nosdfioj">W tym temacie dowiesz się jak stworzyć swoją pierwszą stronę internetową. Jeśli wykonałeś zadanie z poprzedniego tematu możesz użyc kodu, który stworzyłeś, a jeśli nie oto przykładowy kod który mozesz skopiować i użyć na swojej stronie internetowej:</p>
      <div class="uiowenbiusdf0-nwoq-2nosdfn">
        <span class="oiqwenidf-2ni-sdnfo">&lt;!DOCTYPE html&gt;</span>
        <p class="oiqwenidf-2ni-sdnfo">&lt;html&gt;</p>
        <p class="sdfsdafdf-2ni-sdnfo">&lt;body&gt;</p> <br>
        <p class="oiqwenisd-2nisdf-nosdf"><span class="oiuwqnoisdf-2nosdf-nosdf">&lt;p&gt;</span>Witaj na naszej stronie internetowej! <span class="iqwueusdf-2nisdf-2nodf">&lt;/p&gt;</span></p>
        <br> <p class="josdfj2-nisdf-2nod"><span class="iqjuwnisdf-nisdfnoi2-sdnofsd">&lt;</span>/body<span class="qjiwonsdof-2nosdf-2nodjfo">&gt;</span></p>
        <p class="jasoisdf-2nsdf-n2osdf">&lt;/html&gt;</p>
      </div>
      <p class="jisdfn-nisdf-2nodf">Visual Studio Code</p>
      <p class="iusdfion2-ndosf-2nosdf">Jeśli korzystasz z <span class="qkownmosdf-nsidf-2nosdf">Visual Studio Code</span> naciśnij Ctrl+Shift+X i wyszukaj "Live Server". Po zainstalowaniu użyj skrótu Ctrl+Shift+E i naciśnij prawym przyciskiem na okno które się pokaże. Utwórz plik i nazwij go index.html (możesz użyc innej nazwy, lecz musisz dodac .html na końcu np. możesz zmienić nazwę na moja_strona.html). W utworzonym pliku wklej swój kod, następnie naciśnij prawym przyciskiem myszy na miejsce w którym znajduje się twój kod i wybierz "Open with live server" lub trzymając wciśniety alt naciśnij l+O na swojej klawiaturze.</p>
      <p class="masdnisdf-2nisdf-2nosdf">Notepad++</p>
      <p class="nisdfni2-niosdf-2nosdf">Otwórz Notepad++, wklej kod z poprzedniego zadania, następnie naciśnij Plik => Zapisz Jako... i ustaw nazwę na index.html (lub jakąś inną z końcówką .html np. moja_strona.html) następnie w Zapisz jako typ: wybierz Wszystkie pliki. Możesz to zrobić pod tabelą do ustawiania nazwy pliku.</p>
      <a class="sdif-2nsd-fnosdf" href="index.php?page=elementy w html"><button class="uqiownsdf-2nisdf-2nodf">Elementy <span class="material-symbols-outlined">chevron_right</span></a>
</button>
    </div>

    <div class="ouqweniudf-2nisdf-2iodnfsdf">
    <p class="sido2-nisdf-2nodsfhi">Elementy</p>
    <p class="nidof-2niosdf-2nosdf">Jak już dowiedziałeś się w wcześniejszych lekcjach większość elementów w HTML jest zbudowana w następujący sposób:</p>
    <p class="mosdfm-nosdf-2nosdf"><span class="msdof-ndiof2-sndifsdo">&lt;p&gt;</span>To jest tekst<span class="nisodf-2nosdf-2osdnfo">&lt;/p&gt;</span></p>
    <span class="material-symbols-outlined hsdfhiu20sbdf09sdfvbu-badsf2-sdbfisd">
      keyboard_backspace
      </span>
      <p class="nisdf-2nosdf-2nosdf">Otwarcie tagu</p>
      <span class="material-symbols-outlined sdfnsdfu893isdf8ybsfi-badsf2-sdbfisd">
      keyboard_backspace
      </span>
      <p class="nisodf-2nosdf-jodufsniogf-nodfgnsdf">Treść</p>
      <span class="material-symbols-outlined nsfioi29isfj2-sdfo3ushd9f-badsf2-sdbfisd">
      keyboard_backspace
      </span>
      <p class="nsdfno-nosdf-2nosdf">Zamknięcie tagu</p>
      <p class="nsdofn-2nosd-fnosdf">W tej lekcji poszerzysz swoją wiedzę o podstawowych elementach oraz dowiesz się o wyjątkach, które nie wymagają zamknięcia tagu. Oto podstawowe elementy wymagające zamknięcia tagu:</p>
    <div class="uiqwenisdf-2nsdf-2nisdfn">
      <p class="mnsidofmno-nosdf02-sdnofd"><span class="nisdf-2nisdf-2nosdjfo">&lt;h1&gt; &lt;/h1&gt;</span> - Odpowiada za tytuł. Im większą liczbę umieścisz po <span class="msdm-2nodsf-2nod-nosdfnoi">&lt;</span> tym mniejszy będzie. Oto przykład:</p>
    </div>
    <p class="misdfmo-2nodf-2nodf-nodf"><h1 class="msdpfom-sdnfo2">&lt;h1&gt; To jest tekst &lt;/h1&gt;</h1></p>
    <p><h2 class="nmisodf-2nosdf-2nosdf">&lt;h2&gt; To jest tekst &lt;/h2&gt;</h2></p>
    <p><h3 class="nmisodf-2nosdf-2nosdf">&lt;h3&gt; To jest tekst &lt;/h3&gt;</h3></p>
    <div class="iqwueionosdf-2nosdf-2nodfn">
      <p class="sodfoi-nio2-nosdf"><span class="mosdfmop-sdnfo2-ndfo-2jsdofno">&lt;button&gt;&lt;button&gt;</span> - Dodaje podstawowy przycisk wyglądający mniej więcej tak: <button class="isdfno-nsodfnoi">Przycisk</button></p>
    </div>
    <div class="uiqwoeniosdf-2nosdf-nsodf">
      <p class="nsidf-2nisdf-2nosdfn"><span class="ndifni-2nisdf-n2osdfno">&lt;ul&gt; &lt;/ul&gt;</span> - Tworzy listę, aby ją uzupełnić należy dodać <span class="mnsodfmno2-sodf-2nosdf-2nosdf">&lt;li&gt;</span> Treść <span class="miosdf-2nosdf-n2osdf">&lt;/li&gt;</span> Oto przykład:</p>
    </div>
    <div class="nsdfnio2-nsodfjsd">
    <div class="hjsdfnoi2-nisdf-2nosidjfio">
      <p class="nmiosdf-2nisdf-2nosdf">&lt;!DOCTYPE html&gt;</p>
      <p class="nisdf-2nisdf-2nosdfn">&lt;html&gt;</p>
      <p class="nmosidf-2nosdf-nosd">&lt;body&gt;</p> <br>
      <p class="mnisdf-2nisdf-n2osdf">&lt;ul&gt;</p>
      <p class="msdfmop-sdnfo2-nsdofn"><span class="nisdf-2noidf-nsdof">&lt;li&gt;</span>To jest pierwszy podpunkt<span class="nisdof-2nosdf-2nosdf">&lt;/li&gt;</span></p>
      <p class="msdfmop-sdnfo2-nsdofn"><span class="nisdf-2noidf-nsdof">&lt;li&gt;</span>To jest drugi podpunkt<span class="nisdof-2nosdf-2nosdf">&lt;/li&gt;</span></p>
      <p class="msdfmop-sdnfo2-nsdofn"><span class="nisdf-2noidf-nsdof">&lt;li&gt;</span>To jest trzeci podpunkt<span class="nisdof-2nosdf-2nosdf">&lt;/li&gt;</span></p>
      <p class="nisdf-2nodsf">&lt;/ul&gt;</p>
      <br><p class="nisodf-2nosdf-no">&lt;/body&gt;</p>
      <p class="nisodf-2nosdf-no">&lt;/html&gt;</p>
    </div>  
    <div class="ndfniu-2nisdf-2nosdfijn">
    <ul>
      <li>To jest pierwszy podpunkt</li>
      <li>To jest drugi podpunkt</li>
      <li>To jest trzeci podpunkt</li>
    </ul>
    </div>
    </div>
    <p class="msdfmo2-nsidof2-nsodfnsodi">W HTML istnieją również elementy nie wymagające zamknięcia tagu. Jeden z nich pojawił się w wcześniejszych lekcjach, był to <span class="nsfini-nisd-f2nosdf">&lt;!DOCTYPE html&gt;</span>, oto kilka kolejnych przykładów:</p>
    <div class="iuwqnisdf-2nodf-2nodjf">
      <p class="nisdnfi-2nisdf-2nodjf"><span class="nisdf-2nisdf-2nsodfjsdfnosidfjio">&lt;br&gt;</span> - Jest to skrót od "breakline". Z faktu, że HTML ignoruje odstępy w kodzie <span class="nisdf-2nisdf-2nsodfjsdfnosidfjio">&lt;br&gt;</span> umożliwia dodanie linijki odstępu.</p>
    </div>
    <p class="naisj-2ndf-2nodsf-2nosdjf">Przykład</p>
    <p class="smodfkopsdf2-sdfo2-sndofdj">Jeśli dodasz 2 linijki odstępu w twoim kodzie, HTML je pominie i nie będa one wyświetlane. Oto fragment kodu oraz to jak będzie on wyświetlany na stronie internetowej:</p>
    <div class="qwiouhosdf02isdf">
    <div class="oiuwqenisdf-2nodf-2nosdfijosd">
      <p class="misdof2-sdfod-2nosdf"> ...</p>
      <p class="misodf-sdfmo2-sdofijsd"><span class="msidf-2sd-f2osdjf">&lt;p&gt;</span> To jest tekst <span class="msidf-2sd-f2osdjf">&lt;/p&gt;</span></p>
      <br>
      <br>
      <p class="nisdfi2nodsf-2nids-f2nosdfu"><span class="nisdf-2nosdf2-nsdofsdjf">&lt;p&gt;</span>To jest tekst <span class="nisdf-2nosdf2-nsdofsdjf">&lt;/p&gt;</span></p>
      <p class="jiosdfjo-2nidf-2nosdjf">...</p>
    </div>
    <div class="nsdfh2ui0sdfu-sndf2-nsodfjdos">
      <p>To jest tekst</p>


      <p>To jest tekst</p>
    </div>
    </div>
    <p class="jisdnfi-2nidsf-2nosdfjo">Tak będzie wyglądał ten sam fragment kodu po dodaniu <span class="nsidf-2nsdfoisdfj-2nosdfji">&lt;br&gt;</span> : </p>
    <div class="nisdf0-2nisdf-2osdf">
    <div class="idfuiouoi2nsdf-2nisdf2-nsdof">
    <p class="nisdf-2nosdf-2nosdfadfadf">...</p>
    <p class="misodf-sdfmo2-sdofijsd"><span class="msidf-2sd-f2osdjf">&lt;p&gt;</span> To jest tekst <span class="msidf-2sd-f2osdjf">&lt;/p&gt;</span></p>
    <p class="sido-2noisdf-2nosdf">&lt;br&gt;</p>
    <p class="sido-2noisdf-2nosdf">&lt;br&gt;</p>
    <p class="misodf-sdfmo2-sdofijsd"><span class="msidf-2sd-f2osdjf">&lt;p&gt;</span> To jest tekst <span class="msidf-2sd-f2osdjf">&lt;/p&gt;</span></p>
    <p class="nisdf-2nosdf-2nosdfadfadf">...</p>
    </div>
    <div class="jisdf02-snfo-2nosdjfsfjosdf">
      <p>To jest tekst</p>
      <br>
      <br>
      <p>To jest tekst</p>
    </div>
    </div>
    <a href="index.php?page=zadania-1"><button class="nisdf0sidjio2-nisdof2-nsofdjoi">Zadania <span class="material-symbols-outlined nusdf02-sdfnid-2nosdf">chevron_right</span></button></a>
    <p class="isfjsiof-2nisdf-2isdjfosd">Zadanie #1</p>
    <p class="nisdf-2nsdf-2nosdf">Stwórz stronę internetową na której będzie znajdował się tytuł oraz lista składająca się conajmniej z 3 podpunktów oddzielona 2 linijkami od tytułu.</p>
    <a href="https://github.com/Yuify-Exercises/Zadanie-1"><button class="misdfji2-sdnfiodf-2nosdf-2niosdfj">Sprawdź odpowiedź</button></a>
  </div>

  <div class="jisodf-2nidf-2nosdjfio">
    <p class="msdif-2nisdf-2ipsdfnifg-nosdfj">Test#1</p>
    <p class="nsdfio-2noisdf-2oidj">Zad.1 Uzupełnij fragmenty kodu.</p>
    <div class="jiqwenidf-2nidsf-oijiosdf">
      <p class="msdf-mo2-sdfnosdf-2nosdjf"><span class="ijsdf-nsodf-2oidjsfoinifv-2noisdjfo">&lt;p&gt;</span>To jest tekst <input id="test#1FirstQuestion" class="nisdf-2niodsf-2noisdjfo" type="text"></p>
    </div>
    <div class="usdf-nsidf-2oidjfosdfjoi">
      <p class="msdf-mo2sdfsdnif-sdfnosdf-2nosdjf">&lt;<input class="nisdf-2nisdf-2nosdjf" id="test#1SecondQuestion" type="text"> html&gt;</p>
    </div>
    <div class="iuqwedf-2nsdf-2osdjfiosdf">
      <input type="text" class="isdf-2niosdf-2noisjdfo" id="test#1ThirdQuestion">
      <p class="mosf-2nodsf-2oidjfoing-adioji"><input class="moisdf-2nsd-fndoif" id="test#1FourthQuestion" type="text"> To jest pierwszy podpunkt <input class="miosdf-2nisdf2-nosdifjiosdf" id="test#1FifthQuestion" type="text"></p>
      <p class="nisdf-2i-fsjdiofj1-diofjo"><input class="isdfj2is-dfjsdiofj2-sdiofjsdof-2jsoifjo" id="test#1SixthQuestion" type="text"> To jest drugi podpunkt <input class="isdfj2is-dfjsdiofj2-sdiofjsdof-2jsoifjo" id="test#1SeventhQuestion" type="text"></p>
      <p class="nsdfni-2nsdfjioqwbui0dsfbusdf02usdf02bsd0sd-sdnfoisdf"><input class="misfjoij2-sdfnsdf-2nosidf-2osidf" id="test#1EighthQuestion" type="text">l&gt;</p>
    </div>
    <div class="isdfjoi-2nidf-2jijodf">
      <p class="misdfjoi2-sdnfsdifjonib-oisdjfoisi">&lt;!DOCTYPE html&gt;</p>
      <input type="text" class="nmisfjoi-2nisdf-2jisdjfiosdfjn-sdnfisf" id="test#1NinthQuestion">
      <input type="text" class="misfjiondfg-2nosidfn2-sdoifjsdofj" id="test#1TenthQuestion">
      <p class="kosdf-sdfnio2-sdofijsd"><input type="text" class="hsudfhisdf02-sndfhjsoifhj2-nsdfhosidjf" id="test#1EleventhQuestion"> To jest tekst <input class="sodfkpo2-sdnfi2-sdfnsdf-2oisdjfoi" id="test#1ElventhQuestion2" type="text"></p>
      <input class="jsoidfjoip2-sdinf-2sfjosdf-2oisdjfiosjdfio" id="test#1TwelvthQuestion" type="text">
      <input class="niosfjio2-sdnofijdsoijfbfdiugv2-nsdofjoisdjf" id="test#1ThirteenthQuestion" type="text">
      <a href="index.php?page=atrybuty"><button class="misdf-2niodf-2jsdfjoi">Atrybuty <span class="material-symbols-outlined jisdf-2jioajsio-2niosdjfo">chevron_right</span></button></a>
    </div>
    </div>

    <div class="oiqwenidf-j2iuoisdfni2-nsidfj">
      <p class="mosf-2jsdfioasqowiedf-2nijsdoi">Atrybuty</p>
      <p class="nisdf-2iojsdndf-niojsdfoij">Atrybuty są to dodatkowe informacje umieszczane w otwierającym tagu. Można je dodać do każdego elementu, aby np. określić adres, zmienić wysokość, dodać opis grafiki.</p>
      <p class="msodf-sdfoi2iosdfoi">Jednym z podstawowych elementów jest <span class="msodf-2isdopfinisd-f2jisdnfoi">&lt;a&gt;</span>Nazwa<span class="msodf-2isdopfinisd-f2jisdnfoi">&lt;/a&gt;</span>. Umożliwia on dodawanie linków, leczy aby dodać lokalizację do której ma prowadzić link trzeba użyć atrybutu href. Jeśli nie dodamy href do naszego linku będzie on tylko odświeżał stronę na której się zanjdujemy, a nie prowadził do jakiejś innej. Oto jak to zrobić:</p>
      <div class="iuqwioisdf-2jiosdfoisd-2joisdf">
        <p class="kodfp2-jsdf-2iosdfjisdof"><span class="msidf-2jasdf-sdjfi20sjdf-sdofjio">&lt;a</span> href="Tutaj wpisz adres strony"<span class="msodf2-sdnfi2-sjdofjsodf">&gt;</span>Nazwa wyświetlana na stronie<span class="msidf-2jasdf-sdjfi20sjdf-sdofjio">&lt;/a&gt;</span></p>
      </div>
      <p class="nisdf-2joidf-2posdjf">Przykładowy link do YouTube:</p>
      <div class="sidfj-2jiosdf-wjoisdf">
       <span class="mosdf-2iodasf-sdnoif">&lt;a</span> href="https://www.youtube.com/"<span class="osdf-sdfmo2sdpf-sdfm2">&gt;</span>YouTube<span class="mosdf-sdfni2-sdnfojsdf">&lt;/a&gt;</span>    | <a class="mosdf-sdfm2-smdof2-sdnisdf" href="https://www.youtube.com/">YouTube</a>
      </div>
      <p class="josdf-sdfnio2-dsnfosdjf">W wcześniejszej części kursu dowiedziałeś się jak stworzyć przycisk. Łącząc te 2 elementy możesz stworzyć przycisk przekierowywujący do innej strony. Wystarczy że zamienisz tekst (w powyższym przykładzie "YouTube") na <span class="mosdf-sdfni2-sodfij">&lt;button&gt;</span>YouTube<span class="qiwuesdfino2-nisdf-2niosdf-2nosdf">&lt;/button&gt;</span></p>
      <p class="sdfdfsgadfgiuwioedgiofhgoisdjfgoi-sdfni2-sndiofjsd">Kolejny atrybutem jaki poznasz jest <span class="mosdf-sdfni2nsiodjf8dsfgh2-snf92-sdfhiosdjfo">src</span>. Podobnie jak w przypadku linku, podczas dodawania zdjęcia na swoją stronę internetową należy podać adres w którym się znajduję. Można to zrobić za pomocą <span class="misdf-2nisdf-2jodsfodsfug-2nsodfjosidjfoi">&lt;img src="adres_do_zdjecia.jpg"&gt;</span>. Img należy do elementów nie wymagających zamknięca tak jak np. <span class="mosdf-2idsf-2nosdf-2osdf">&lt;br&gt;</span>. Jeśli zdjęcie które chcemy dodać znajduję się w innym folderze niż nasz plik .html należy dodać do adresu nazwe foldera oraz <span class="isdf-2nisdf-2nosdf">/</span> np. folder_z_zdjęciami/nazwa_zdjęcia.png, lecz jeśli zdjęcie jest w tym samym folderze, co plik .html wystarczy dodać jego nazwę. Podczas dodawania adresu należy pamiętać, że nie wszystkie zdjęcia mają takie samo rozszerzenie, ponieważ jeśli dodamy np. jpg zamiast png obraz nie pokaże się na naszej stronie internetowej.</p>
      <p class="mosdf-sdfnoi2-sdnodfg-2osjdijfsdgo">Czasami zdjęcie nie może się załadować. Może to być spowodowane brakiem internetu lub innymi problemami. W takiej sytuacji może nam pomóc <span class="miosdfjop2-dfgkowjiosdfgio2-nsodfgjdiofgjoi">alt</span>. Umożliwia on dodanie opisu w sytuacji gdy obraz nie zostaje wczytany.</p>
      <img class="nudfg-2nidfg-23nosjdgf-23ofdsg" src="image.png" alt="Nie można wczytać obrazu">
      <div class="iuqweiuisdf0-dg20-dfgiu2-dfbgi3ifdgu">
        <p class="isf-dfgno2-dfgnio2-fdngodjfgojdfg">&lt;img src="nazwa_zdjecia.png" alt="Nie można wczytać obrazu"</p>
       </div>
       <a href="index.php?page=formatowanie tekstu w html"><button class="iqwuenidf-sbdufhsiu20sdufsd-fsdfiudhsfih">Tekst<span class="material-symbols-outlined oiquwenisdf-2niosdf-2oisdjfo">chevron_right</span></button></a>
       <p class="moisdfp2mos-2niosdf-2nosdf-2osfjoij">Zadania</p>
      <p class="nisdf-2nisdf-2jioodfshdfhsdf0-sdnfiosj">Zad.1 Utwórz stronę zawierającą przynajmniej 1 link, 1 przycisk oraz tytuł.</p>
        <p class="iopqwenisfd-2nisdf-2oisdjfoi">Zad.2* Stwórz zdjęcie, które po naciśnieciu będzie przekierowywało na inną stronę.</p>
        <a href="https://github.com/Yuify-Exercises/Zadania"><button class="isdf-2idf-2jsdjfi2-sdfiosjdfio2nisdf-nsodfjo">Sprawdź odpowiedzi</button></a>
      </div>

      <div class="oiqweidsf-2iasdsodfipo-2sdfosdfosdfinifgsjsiojfdogijsofigjosifg">
        <p class="mosdfkpo2-dfgio2-sdfiogdfjgo">Formatowanie Tekstu</p>
        <p class="msidfjisdof-2isdf-sdfiosfj">W tej lekcji dowiesz się jak poprawić wygląd tekstu poznając elementy umożliwiające m.in. podświetlenie, pogrubienie, przekreślenie tekstu.</p>
        <p class="nmisfjsiojdf-2mosdf-sdfop">Pogrubianie Tekstu</p>
        <p class="jifioqwe-niod-f2joijsdiof">Możemy pogrubić tekst w HTML na 2 sposoby. Poprzez <span class="modskfosdf-2mosdf-2kopsdkf">&lt;b&gt;&lt;/b&gt;</span> lub <span class="nisdjfio2-sdifjsoidf-2jsdjfiodjfo">&lt;strong&gt; &lt;/strong&gt;</span>. Wizualnie oba elementy działają tak samo, lecz jest pomiędzy nimi jedna różnica. <span class="oqwieidfgmosdf-2idsjfiosjd-2misdjfosidjfoisndifg">&lt;b&gt; &lt;/b&gt;</span> tylko pogrubia tekst, a <span class="iuqweisdf-2nisdf-2jsdjifodjo">&lt;strong&gt; &lt;/strong&gt;</span> oprócz pogrubienia sprawia, że tekst znajdujący się pomiędzy tagami staje się ważniejszy niż reszta.</p>
        <p class="oiqweopmosdf-2oidf-2niosdfjo-j2iojsdfj">Pomniejszanie tekstu</p>
        <p class="oqiwesmodpf-2ioqjweoisf-2oisdjfisdjf-2iosdjfoisdfjo">W HTML możemy pomniejszyć tekstu używając <span class="opqwemoisdf-2miosdjfo2-sjdiofjsdf">&lt;small&gt; &lt;/small&gt;</span>. W im większej ilości tagów umieścimy tekst tym mniejszy będzie.</p>
        <div class="iouqwehuisdf02n-sdnfiosjdfoisdf">
          <div class="iqwuesnidofsdiof-2nisdf-2nosjdf">
            <span class="iqoweiopdf-2jjsidofjsd-2jsdjfoi">&lt;p&gt;</span>Ten tekst jest <span class="oqwieosoidf-2nisdf-2jsjdoifj">&lt;small&gt;</span> 1x mniejszy <span class="oqiweopmsdf-2niosdf-2iosjdfojsdf">&lt;small&gt;</span> 2x mniejszy <span class="oqiweopsiodf-2miosdf-2joisdjfosd">&lt;small&gt;</span> 3x mniejszy <span class="oqiweomosdf-2iosdjfosd-2joisdjfo">&lt;/small&gt;&lt;/small&gt;&lt;/small&gt;&lt;/p&gt;</small>
          </div>


          <div class="oqwieosdif-2iosdf-2oijsdf">
          <p>Ten tekst jest <small>1x mniejszy <small>2x mniejszy <small>3x mniejszy</small></small></small></p>
          </div>
        </div>
        <p class="oiweopmosf-2mosdfio2-sdiofjsdiof">Przekreślenie</p>
        <p class="iquweiohiosdf-2niosd-f2osdjf">Aby przekreślić tekst możemy użyć <span class="poiqweisdf-nsidfo2-jsdoifjsdof">&lt;del&gt; &lt;/del&gt;</span>. Komenda ta umożliwia dodanie prostej lini na tekście. Oto przykład:</p>
        <p class="qwoesdf2-sdiof-2oisdfjosdjf"><del>Promocja</del></p>
        <p class="oqiweosdfiojsdiof-2jisdjfoisdf-2joisjdfoisdjfoij">Pochylenie Tekstu</p>
        <p class="qweoksdpofkop-qmow-sdfjoisdjfosidjf">Podobnie jak w przypadku pogrubienia tekstu istnieją 2 elementy umożliwiające pocyhlenie tekstu. Są nimi <span class="kqopwemisdf-2noidnfiosdf-2osdjfiosdjfoi">&lt;i&gt; &lt;/i&gt;</span> oraz <span class="oqiweisdf-2nosdf-2nosdfoi">&lt;em&gt; &lt;/em&gt;</span>. Zaleca się używanie <span class="misdfmiojqwoe-2iosdf-2joiqwjeosdfo">&lt;em&gt; &lt;/em&gt;</span>, ponieważ jest to nowy znacznik wprowadzony w HTML5.</p>
        <p class="kqowekopsdf-2miosdfjiosdf-2iosdjfosjdf"><em><span class="jisdjfioqw-2oisdf-2oisdjfoisdf">&lt;em&gt;</span>To jest tekst <span class="qiweosmodf-2iosdnfiosdjf-2noisdjosdfjo">&lt;/em&gt;</span></em></p>
        <p class="oqiweosdfop2-sdfmopjk2opd-fsdiofsopidfjkopi">Indeks górny i dolny</p>
        <p class="poqwiemosdf-2msdfjposdf-2miosdjfodsf-2oisdjfoi">Indeks górny można uzyskać poprzez <span class="jqoweisdfisdf02n-nisfisdof2-nsdofjsdf">&lt;sup&gt; &lt;/sup&gt;</span>(ang. "superscript"). Natomiast index dolny poprzez <span class="jsifsdjfoisd-qwensdjfiosdjof">&lt;sub&gt; &lt;/sub&gt;</span>(ang. subscript).</p>
        <p class="oqwienisdf-2niosdnfoisjdf-2osidjfosdf">To jest <sup>indeks górny</sup></p>
        <p class="oqiwemosdf-2oisdjfoisd-2jiosdjfod">To jest <sub>indeks dolny</sub></p>
        <p class="oiqwenisdf-2osidjfosd-2jjojsodijfo">Podświetlenie Tekstu</p>
        <p class="oqiweisdf-2nsodifjosd-2oisjdfojis">Podświetlenie tekstu może być dodawane poprzez elementr <span class="oiqweposiodf-2niosdjfiosd-2jiosdjfoisd">&lt;mark&gt; &lt;/mark&gt;</span>(ang. "zaznaczać")</p>
        <p class="oqiwenmosdf-2niojfosdf-2joidjfosd"><mark>Ten tekst jest podświetlony</mark></p>
        <p class="poisdfni2-sndofisdf-2nosdjfosfd">Podsumowanie</p>
        <div class="iquwenisdf-sdfno20-sdnfoisjdf">
          <p><span class="poqweiosdf-2noidsf-2osdjfsd">&lt;strong&gt; &lt;/strong&gt;</span> - Umożliwia pogrubienie oraz zwiększenie wagi tekstu</p>
        </div>
        <div class="iquwenisdf-2noisdf-2jiosdf">

        </div>

        <div class="oiqwenisdf-2mod-f2iosdjf">
          <p><span class="oqiwisdfjosidf-2nosdf-2niosdjfoids">&lt;small&gt; &lt;/small&gt;</span> - Zmniejsza tekst, im więcej razy jest użyte tym mniejszy staje się tekst</p>
        </div>

        <div class="oiqwensdf-2nosdf-2joisjdfo">
          <p><span class="opqiwemsdfmjop2-2nsidfjoisd-2joijsdofjosdf">&lt;del&gt; &lt;/del&gt;</span> - Przekreśla tekst</p>
        </div>

        <div class="oiuqwehsdf0sdfn-sdjfio2-sodfjio">
          <p><span class="oqiwniosdf-2iosdf-2jiosjdfoi">&lt;em&gt; &lt;/em&gt;</span> - Pochyla tekst</p>
        </div>

        <div class="iuqwenisdf0-sdfno2-sdjoifjoqw-fsdnofi">
          <p><span class="oqiwemosdf-2jsiodf-2joisdjfosdf">&lt;sup&gt; &lt;/sup&gt;</span> - Dodaje indeks górny (ang. "superscript")</p>
        </div>

        <div class="oqiweiqeoiwnsdf-2niodjoif-2oisjdfodf">
          <p><span class="oqiweensdf-2oisdjfoisd-2joisdjfiosf">&lt;sub&gt; &lt;/sub&gt;</span> - Dodaje indeks dolny (ang. "subscript")</p>
        </div>

        <div class="oiqwenisdf-2niodf-2oijsdof">
          <p><span class="oiqweniosdf-2ioqwjeoisdfn-2oisdjfoisd">&lt;mark&gt; &lt;/mark&gt;</span> - Dodaje podświetlenie tekstu</p>
        </div>
        <a href="index.php?page=divy w html"><button class="oiqwenisdf-2iosdjfosdf-2jiowjoindiosf-sdoifjsdoifjoi">Div <span class="material-symbols-outlined">chevron_right</span></button></a>
        <p class="oqiweiosdf-2niosdfjosdf-2jiodjfosjdf">Zadania</p>
        <p class="oqiwenisdf-2nioas-sdfjoi2-sdjofijsdfo">Stwórz stronę internetową zawierającą wyjaśnienia 3 wybranych pojęć związanych z formatowaniem tekstu w HTML. Postaraj się sprawić żeby tekst zawierał jak najwięcej elementów HTML poznanych w tym temacie.(Uwaga - Postaraj się nie używac &lt;&gt;, ponieważ dowiesz się jak je dodać na swoją stronę internetową w dalszej części kursu.)</p>
        <a href="https://github.com/Yuify-Exercises/Zadania"><button class="oqwieposdmof2-smdfjsopdfpoqw-sdjpfskdfpokp">Sprawdź odpowiedź</button></a>
      </div>

      <div class="oiqweniosdf-2d-fsdfo2-jsdfjoipsdf-2oisdjfo">
        <p class="oqwesdfi2-sndiofsd-f2oaisopdnis-dfsidfjoi">Divy</p>
        <p class="oiqweisdf-sdfm2jiojsdfnbv-qnwnsidjfo">W tej krótkiej lekcji poznasz jeden z najważniejszych elementów w HTML. Pamiętaj, że aby móc stylizować divy potrzebujesz CSS, w tym temacie dowiesz się jedynie jak je stworzyć oraz do czego służą.</p>
        <p class="oqwiemsodf-2iosdfniosd-2joisdjfoi">Czym jest Div?</p>
        <p class="oiqwenidsf-2niosdf-2joidjsfniodfg">Diva można sobie wyobrażać jako kontener przechowujący inne elementy. W zależności od stylizowania w CSS może on różnie wyglądać. Podobnie jak w elementach, które poznałeś już w poprzednich lekcjach diva można stworzyć poprzez <span class="oiqweisdf-2oqiweopsndiof-2sidfjsfjo">&lt;div&gt; &lt;/div&gt;</span>.</p>
        <p class="opiqweniosdf-2niosdnfoi2-siodfjsodd">Dlaczego Divy są tak ważne?</p>
        <p class="oqiwemoisdf-2iosdf-2jiosdjfosdf">Pomimo tego, że divy nie są bardzo skomplikowanym elementem są bardzo ważne, ponieważ umożliwiają rozmieszczenie elementów na stronie w róznych miejscach oraz stworzenie różnych częśći na stronie. Weźmy za przykład menu znajdujące się po prawej stronie tego kursu. Jest ono divem, który po użyciu CSS może pełnić różne funkcje. (W kursie CSS dowiesz się jak sprawić żeby div wyglądał własnie w taki lub podobny sposób)</p>
        <a href="index.php?page=komentarze w html"><button class="oiqwmsdf-2isfjoisdf-2jioqwjesni-dfgiodfgjio">Komentarze <span class="material-symbols-outlined">chevron_right</span></button></a>
      </div>

      <div class="qiqwejoisdf-2isjdifo-2poposdfp">
        <p class="oqwiejosdf-2noisdfno2-osidfjosdf-2noisjdfjo">Komentarze</p>
        <p class="oiqweopsdf-sdfmpj2-sdfisdfjoj">W bardziej rozbudowanych kodach przydatną rzeczą może sie okazać możliwośc dodawania komentarzy, które nie są wyświetlane na stronie internetowej. Dzięki nim kod staje się bardziej przejrzysty i łatwiejszy do zrozumienia. Aby dodać komenatrz należy użyć elementu <span class="oiqweosdf-2sdfjoisd-2jiojdofsd">&lt;!--</span> Treść komentarza <span class="oqiwemosdf-2osdfpo2-2oisjdfo">--></span></p>
        <div class="iuqwenisdf-2nsidfjo2-nsodjfsiodf">
          <div class="iquwenisdf-2isdfniosjdfqnidfji">
          <p class="qiweopsdf-2isdjfoisdf-2jiojosidfj">&lt;!DOCTYPE html&gt;</p>
          <p class="ioquwenisdf2-sdfiojsdo-2jiosdjfosd">&lt;html&gt;</p>
          <p class="oqiwjijiosdf-2niosdf-2noisdjfoi">&lt;body&gt;</p>
          <p><span class="oqiwesdfmop2-sdnmfio-2jiosdf-sdiof">&lt;p&gt;</span>Witaj na naszej stronie!<span class="oiqwemnosdf-2mopsdf-2jsdjfjsd">&lt;/p&gt;</span></p>
          <p><span class="oqiwemsdf-2niodf-2joisjdfo">&lt;!--</span> Ten tekst jest niewidoczny <span class="oqwieiosdf-2mniosdf-2joisdjfio">--&gt;</span></p>
          <p class="oiqweosdf-2iodsaf-2jiosdjfoi">&lt;/body&gt;</p>
          <p class="opqiwenisdf-2niosdf-2oisjdof">&lt;/html&gt;</p>
          </div>

          <div class="iuqweniosdf-2joijqownsdf-2jiojdsof">
          <p>Witaj na naszej stronie!</p>
          </div>
        </div>
        <p class="oqiwejnisodf-2niosdf-2joijdoijsodf">Możesz również używać komentarzy w sytuacji gdy chcesz aby dany fragment kodu nie był wyświetlany, lecz nie chcesz go usuwać. Jeśli kod znajduje się w kilku linijkach wystarczy, że przeniesiesz <span class="oqiweiosdf-2niosdf-2joisjdiofsj"> --&gt; </span> na koniec, dzięki czemu wszystkie linijki znajdujące się pomiędzy tagami staną się komentarzem.</p>
        <div class="iuqweiosdf-2jiosdf-2jajsod">
          <p>...</p>
          <p class="opqiweosdf-2noisdjfo-2nsdfjoisd">&lt;!--</p>
          <p><span class="iuqwisdjfoiw-2iosdjfio2-sdjfiosjdocv">&lt;p&gt;&lt;mark&gt; </span> To jest tekst <span class="iopqwenidsf-2niosdf-2jiojsdofniosd">&lt;/mark&gt;&lt;/p&gt;</span></p>
          <p class="oiqwenisdf-2ioajwoq-2niosdjfio">&lt;img src="images/image.png"&gt;</p>
          <p class="oiqweisdf-2jiosdf-2jioajsdofd">--&gt;</p>
          <p>...</p>
        </div>
        <a href="index.php?page=klasy w html"><button class="oiqweiosdf-2nioas-fsjdiofjsodf">Klasy w HTML <span class="material-symbols-outlined qwoeisdomfsdf-2oisdfsjoifjsoidjfoi">chevron_right</span></button></a>
      </div>

      <div class="iuqweiosdf-2noiadsnfoisd-f2joiqjowiasdf">
        <p class="ioqweopdf-sdfio2-sdjfsjdfop">Klasy</p>
        <p class="oqiweiosdf-2ioasjdoisdf-2joijsdofijsdo">Klasy są to atrybuty używane do umożliwienia wykonania jakiegoś działania na elemencie w CSS lub JavaScript. Możemy je dodawać do elementów takich jak <span class="opqiweosmdpf-2oisdjfosd-2jiojasdoifjsdo">&lt;p&gt; &lt;/p&gt;</span>, <span class="oqwiemosdf-2mioqwjoisd-f2ojosdjfd">&lt;div&gt; &lt;/div&gt;</span> itd. <span class="opwjekosodpf2-sdiofsdf-2ionwosndiofj">Uwaga!</span> Każda klasa musi być unikatowa, gdy w kodzie znajdą się 2 takie same klasy nie będzie wiadomo do którego elementu są przeznaczone określone style co może prowadzić do błedów. Klasy <span class="opqiwenisd-2osdnfoisdf20-sdnofsdofsno">nie</span> mogą się zaczynać od liczb, lecz mogą je zawierać. Oto przykładowe nazwy klas: "first-button", "menu-div" itd. To jak będziesz nazywał swoje klasy zależy tylko i wyłacznie od Ciebie ale pamiętaj o tych zasadach.</p>
        <p class="oqwieosdof-2niosdfi-2jsdfsdf">W tym przykładzie dodajemy klasę <span>Button</span> do przycisku, dzięki czemu można zmienić jego style w CSS. (Więcej na temat zmieniania stylów elementów dowiesz się w kursie CSS)</p>
        <div class="oiqwejisdf-2nioasdfio-2jajsiojsdf">
          <p class="oiqweisdf-2niosd-fjiosdjfoi">&lt;!DOCTYPE html&gt;</p>
          <p class="oqwiemsodf-2iosdjfoisdf-2sdjfsodif">&lt;html&gt;</p>
          <p class="oqiwesodf-2odofsd-2iosdofjos">&lt;body&gt;</p>
          <p><span class="iqwemosd-fi2-sdmsdjfo2-sdiofjsod">&lt;button class="<span class="oiqweisdf-2noisdf-2joisdjfo">Button</span>"&gt;</span>Przycisk<span class="oiqwisdnofsdbnxcbmxc-2nsdfbjsdf-sdfnoisdjfoi">&lt;/button&gt;</span></p>
          <p class="oiqweoisdf-2osdf-2osdjfoisd">&lt;style&gt;</p>
          <p>.Button { <br> <p>background-color: #fff;</p> <p>color: #000;</p> <p>border: 2px solid #000;</p> <p>height: 30px;</p> <p>width: 90px;</p> <p>border-radius: 8px;</p> <p>cursor: pointer;</p> }</p> <br>
          <p>.Button:hover { <br> <p>transition: all 0.3s ease-in-out</p> <p>background-color: #000;</p> <p>border: 2px solid #fff;</p> <p>color: #fff;</p> }</p>
          <br>
          <p class="oqwieopsdjmf-2iosdfosdf-2oisdiof">&lt;/style&gt;</p>
          <p class="kxcikjoiw-2niosdf-2nosdjfbnxoicv">&lt;/body&gt;</p>
          <p class="iquiweoisdfn-2nosidf-2niosjdf">&lt;/html&gt;</p>
        </div>
        <p class="oiqweosdf-2niosdf-sjdoifjsod">Powyższy przykład pokazuje jak klasy w HTML umożliwiają edytowanie elementu w innych językach takich jak CSS i JavaScript. Dzięki dodaniu klasy można przypisać odpowiednie style do elementu z określoną klasą. Podumowując klasy umożliwają rozpoznawanie oraz późniejsze edytowanie elementu w innych językach.</p>
        <a href="index.php?page=id w html"><button class="oiqwemosdf-2oisjdofisdf-2nosdfoisdj">Id <span class="material-symbols-outlined">chevron_right</span></button></a>
      </div>

      <div class="iouqweoiopqwnmxcn2-bxcvo20isdf-2bnosdofhjoqwe">
        <p class="oiqweopmodf-2dsjfsjd-2jisdjoisdf">Czym jest ID?</p>
        <p class="oqiwemnosdf-2nosdf-2oisdjofsd">ID to kolejny atrybut umożliwiający dodawanie unikalnych identyfikatorów elementom w HTML. Może on być używany do zmiany stylów w CSS lub manipulowania elementem w JavaScript. Id można stworzyc poprzez dodanie do tagu otwierającego <span class="oiqweosdf-2ni-sdfopsdjkpofd">id="nazwa-id"</span>. Aby go dodać do CSS należy zrobić to samo co z atrybutem "class" z poprzedniego tematu, lecz zamiast "." należy wstawić "<span class="oiqwencnxjc-2nsdfioqw-nbxjcsd2odfo">#</span>". Oto prosty przykład: </p>
        <div class="oiqwemods-2qpow-2jojsd-noisdfjnn">
          <p>...</p>
          <p><span class="oiqwekosdf-2niosdef-2iosdjfoisd">&lt;button <span class="oiqwenkdnl2-qwopnjkcv-2isdjiosdf">id="button-id"&gt;</span></span>To jest przycisk <span class="oiqwemosdf-2oiqjwoinsdf-2jsdjsijdf">&lt;/button&gt;</span></p>
          <br>
          <p><span class="oqipwedfnxjmcvx-2niqwjnoisdfsoifjosid">#button-id</span> { <br> <p>background-color: red;</p> }</p>
          <p>...</p>
        </div>
        <p class="oiqwpemosdf-2iqjwe-sdjoisdjf">Uwaga! Pamiętaj o tym, że w id tak samo jak w klasach każdy identyfikator musi mieć unikalną nazwę.</p>
        <p class="cooqiweopopqwniosdf-2jiqjweoj-jiodf">ID czy Class?</p>
        <p>Każdy z tych atrybutów ma swoje zastosowanie.</p>
        <p><span class="oiqwenisdfnbnxcv-2bnasbd-2ndiosjdif">Identyfikatory(Id)</span> <ul><li>Powinny być unikalne na stronie. Każdy element może mieć tylko jedno unikalne id.</li> <li>Są używane do jednoznacznego identyfikowania konkretnego elementu na stronie.</li> <li>Nadają się do stylizacji konkretnego elementu lub do manipulowania nim przy użyciu JavaScript.</li></ul></p>
        <p><span class="njxcnv2-qoiwjeiosdfio-nnxcjksjdf">Klasy(class)</span> <ul><li>Mogą być przypisane wielu elementom na stronie.</li> <li>Są używane do grupowania elementów o podobnym stylu lub funkcjonalności.</li> <li>Ułatwiają wielokrotne użycie tego samego stylu lub funkcjonalności na różnych elementach.</li></ul></p>
        <p class="nhajsnd-2nioqjnioadsnxcniodsjf">Podsumowując klas używa się zazwyczaj do stylizowania CSS, z powodu tego, że można je przypisać wielu elementom na stronie, natomiast identyfikatory zazwyczaj używane są w JavaScripcie</p>
        <a href="index.php?page=Head w HTML"><button class="qwertyumnbvcxz">HTML Head <span class="material-symbols-outlined">
chevron_right
</span></button></a>
      </div>

      <div class="oiqwecxnbvow-ji2qwjidsf-2nxkcjniosdfjg">
          <p class="oqwensnsdf-2oibxncvbmxc-2asbdnxcv">Head</p>
          <p class="oiqwejisdf-2jiopqiowensjdf-2jioqjweio">W wcześniejszej części kursu poznałeś element <span class="qknlkdnfs-2jiojasnxcf-sdjifosjdiof">&lt;body&gt; &lt;/body&gt;</span> odpowiadający za wyświetlanie wszystkich elementów znajdujących się na stronie. Istnieje również inny element w HTML, który odpowiada za elementy nie widoczne na stronie internetowej. Jest nim <span class="najksdnioqwj-2iojsdfiosdf-9802iosdf-sd">&lt;head&gt; &lt;/head&gt;</span>. Możesz sobię wyobrażać budowe kodu w HTML tak jak budowie ludzkiego ciała. Pomiędzy elementem <span class="nbsdnfisdop-1ioasd0aniosxcjkv">&lt;head&gt; &lt;/head&gt;</span> będą się znajdowały elementy nie widoczne na stronie, natomiast w <span class="lkoqwpoio-2iowqioe-asniwuj">&lt;body&gt; &lt;/body&gt;</span> będą się znajdowały elementy widoczne na stronie.</p>
        <div class="oiqwenisd-2joiqwjebnsdf-2oisjdfosd">
          <p>&lt;!DOCTYPE html&gt;</p>
          <p>&lt;html&gt;</p>
          <p>&lt;head&gt;</p>
          <p class="njknsd-fioqjwniosdfqiowejoi">...</p>
          <p>&lt;/head&gt;</p>
          <p>&lt;body&gt;</p>
          <p class="mqopwekpsdf21-paskfdopsdfl">...</p>
          <p>&lt;/body&gt;</p>
          <p>&lt;/html&gt;</p>
        </div>
        <p class="opiqwenisdf-2oisdjfnbvb-n2ojosdf">Tytuł</p>
        <p class="opiqwemnisdf-2poasjopsdfnc-jasjdopjasd">Jeśli spojrzysz na swoje otwarte karty w przeglądarce zobaczysz, że każda z nich ma jakiś tytuł. Aby dodać tytuł swojej strony internetowej wystarczy w elemencie <span class="opbxjkcviw-2iosdf0n-nxucviusdf">&lt;head&gt; &lt;/head&gt;</span> użyc <span class="oiqweifnlkxncv-2ioquweonsf02oisdjfoisdjf">&lt;title&gt; &lt;/title&gt;</span>. Tytuł ten nie jest wyświetlany na stronie internetowej, lecz na karcie w przeglądarce.</p>
        <p class="oiqwenmisdf-2ijiojonidf-nxcnviojasd">Dodawanie pliku CSS do HTML</p>
        <p class="oqwiemsidfmxcv-2ioadsjfosdjf">W HTML można dodawać style CSS za pomoca elementu <span class="misdfnxjcv-2ljkdljksdfnnvoidf">&lt;style&gt; &lt;/style&gt;</span>, lecz aby sprawić by twój był bardziej uporządkowany i przejrzysty można stylizować elementy w CSS korzystając z  innego pliku i dodac go do HTML. Oto jak to zrobic:
        <br><br>1. Utwórz plik tekstowy z koncowka <span class="iquenjdsfjhxcq-wio2j1osdf-sdnfiosdjf">.css</span> postępując tak samo jak z plikiem HTML.
        <br><br>2. W sekcji <span class="oiqwodnfjksd-2iqjweoij-sdfisfjo">head</span> swojego pliku HTML dodaj element <span class="oqiwedfnjxcv-2jioadsjfiosdf-jidf">&lt;link&gt;</span> (Uwaga! Jest to element nie wymagający tagu zamykającego)
        <br><br>3. Do elementu <span class="oiqwenisdf-2ioqejwnjcniosdf-2nsdfio">&lt;link&gt;</span> dodaj 2 atrybuty: <span class="owemsmdfoisjdjfiqwio-io2jsdoijfds">rel</span> oraz <span class="ioqwenisdf-2ijqiownsnjdfng-2nsdjfoi">href</span>, gdzie <span class="qiwemisdf-2jiojio-sdfjisdfjoi">href</span> odpowiada za lokalizację pliku. (Jeśli plik CSS znajduje sie w tym samym folderze co plik HTML wystarczy dodac nazwę pliku, natomiast jeśli jest w innym folderze należy dodać nazwe folderu oraz <span class="miwjoisjdf-2pokspoasd-soidjfoivb">/</span>), <span class="oiqwemisdf-2koqwkopmsodf-2sjdsdfijosdf">rel</span> definiuje jaki typ dokumentu dodajemy do HTML. W przypadku pliku CSS należy uzupełnic go dodając "<span class="oqwe-2osdfndc-2iajsiodsdf">stylesheet</span>".  
      </p>
      <div class="iuqwnjsdf-nxcjvnwiqw-jiosdfjso">
        <p>&lt;!DOCTYPE html&gt;</p>
        <p>&lt;html&gt;</p>
        <p>&lt;head&gt;</p>
        <p>&lt;title&gt;<span class="oqwiemsdf-2oasjkdpnsid-2poskdpof">Moja strona internetowa</span>&lt;/title&gt;</p>
        <p>&lt;link rel="<span class="oiqwemosdf-2jqoijoisdf">stylesheet</span>" href="<span class="oqiwenisdf-2jioqjodnsf">nazwa_pliku.png</span>"&gt;</p>
        <p>&lt;/head&gt;</p>
        <p>&lt;body&gt;</p>
        <p class="oqiwemosdf-2jkpqowsndiof">...</p>
        <p>&lt;/body&gt;</p>
        <p>&lt;/html&gt;</p>
      </div>
        <p class="jnxcv2op-fjsidjfoncjvkb-2jiqnkniojodfg">Dodawanie pliku JavaScript do HTML</p>
        <p class="iuqweniusdf02-qwbjkvbjsd-i2joajsiofsd">Aby dodać plik JavaScript(Js) do HTML podobnie jak w CSS należy stworzyć nowy plik z końcówką .js umieszczony najlepiej w tym samym folderze. <span class="iquwenjdnbxc-891290ndiof1-iaosjdo">&lt;script src="nazwa_pliku.js"> &lt;/script&gt;</span> umożliwia dodanie Js, element ten można umieścić w sekcji <span class="iqoweioqwn0-dsnciov-2joiajsdo">&lt;head&gt;</span> lub po zakończeniu elementu <span class="niasdhioaw-o2ip129ndfnoisdf-sdoifsjdof">&lt;body&gt;</span>.</p>
        <div class="iuqwnjsdf-nxcjvnwiqw-jiosdfjso oiqwenisdf-2jioqjsndfsd">
        <p>&lt;!DOCTYPE html&gt;</p>
        <p>&lt;html&gt;</p>
        <p>&lt;head&gt;</p>
        <p>&lt;title&gt;<span class="oqwiemsdf-2oasjkdpnsid-2poskdpof">Moja strona internetowa</span>&lt;/title&gt;</p>
        <p>&lt;link rel="<span class="oiqwemosdf-2jqoijoisdf">stylesheet</span>" href="<span class="oqiwenisdf-2jioqjodnsf">nazwa_pliku.png</span>"&gt;</p>
        <p>&lt;/head&gt;</p>
        <p>&lt;body&gt;</p>
        <p class="oqiwemosdf-2jkpqowsndiof">...</p>
        <p>&lt;/body&gt;</p>
        <p class="qwi0312jmopmskdf32-3po2ir9sdiofsd">&lt;script src="<span class="jqio9q209nsdfn0-2j1oibsdkfsdiof">nazwa_pliku.js</span>"&gt;&lt;/script&gt;</p>
        <p>&lt;/html&gt;</p>
      </div>  
      <p class="oiquweudsf02i12u02891-nioandiosdfnio">W sekcji head można również umieszczać elementy umożliwiające zmiane czcionki itd. (Więcej na ten temat dowiesz się w kursie CSS). Oto kilka zadań podsumowujących ostatnie tematy:</p>
        <div class="iuqenlksf-291p230nmiofs-dfspdfjp">
          <p>&lt;!DOCTYPE html&gt;</p>
          <p><input type="text" class="iouqwenjkdf02-912390sdnufisdf021osdf" id="headExercise1"></p>
          <p><input type="text" class="iouqwenjkdf02-912390sdnufisdf021osdf" id="headExercise2"></p>
          <p>&lt;link <input type="text" class="iouqwenjkdf02-912390sdnufisdf021osdf iuqweiosdfbjkxc02-asjdiopsdfbnkjxcv" id="headExercise3">"style.css"&gt;</p>
          <p>&lt;/ <input type="text" class="iouqwenjkdf02-912390sdnufisdf021osdf" id="headExercise4"></p>
          <p>&lt;body&gt;</p>
          <p>&lt;div <input type="text" class="iouqwenjkdf02-912390sdnufisdf021osdf" id="headExercise5">="<span class="ioquwenisdf-2j9129nsdf-jsodf">to-jest-klasa</span>"&gt; &lt;p&gt; <span class="iquwesdf-2jio12jio-sdfjiosdjf">To jest tekst</span> <input class="iouqwenjkdf02-912390sdnufisdf021osdf" id="headExercise6" type="text"> <input class="iouqwenjkdf02-912390sdnufisdf021osdf" id="headExercise7" type="text"></p>
          <p>&lt;/body&gt;</p>
          <p>&lt; script <input class="iouqwenjkdf02-912390sdnufisdf021osdf" id="headExercise8" type="text">="index.js"&gt; <input class="iouqwenjkdf02-912390sdnufisdf021osdf" id="headExercise9" type="text"></p>
        </div>
        <a href="index.php?page=Tabele w HTML"><button class="iquwe-2192i9diofsd-fsjdiofjsodf">Tabele <span class="material-symbols-outlined">chevron_right</span></button></a>
        <p class="ioquwenisdf-29qiw0sdnf-sdjfo">Zadanie#5</p>
        <p class="oqiwemosfd-29908xcnvoisd-fjosidf">Odtwórz poniższą stronę, jeśli korzystasz z Visual Studio Code za pomocą <span class="oqiwenmdiof-291msiodf-sdfiosj">lorem</span> możesz wygenerować tekst. Wystarczy wpisać lorem i nacisnąć enter. (Link z odpwiedzią znajdziesz poniżej)</p>
        <div class="iuqwe0-sdfnio921-sdiofjoinvci-sdjoifd">
          <h1>Witaj na naszej stronie!</h1>
          <br>
          <h3>Dlaczego my?</h3>
          <ul>
            <li><strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus et voluptatem accusantium tempora impedit, consectetur maxime dolorem voluptates temporibus, molestias neque aspernatur eaque eveniet saepe accusamus eum velit. Odit, rem.</strong></li>
            <li><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fugit molestias aliquam aspernatur debitis quidem asperiores numquam tenetur laboriosam voluptas animi voluptatibus, libero repudiandae odit id quae quam! A, quos.</strong></li>
            <li><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam nulla totam placeat, odit magnam debitis soluta molestias quo, ut sapiente ab consequuntur eius dignissimos modi omnis dolorem ex ipsa aliquam.</strong></li>
          </ul>
          <mark>Lorem ipsum dolor sit amet consectetur adipisicing elit.</mark> Modi commodi nobis asperiores reprehenderit est sunt non possimus nostrum hic. Adipisci necessitatibus sit earum iste, neque quae atque <mark>pariatur optio</mark> ratione.
          <h1>Dołącz do nas już dzisiaj!</h1>
          <del>$199.99</del>
             $169.99
        </div>
        <a href="https://github.com/Yuify-Exercises/Zadania"><button class="oqwieopqndf02100-sdf902nsdfsdf-sndofisjdoi">Sprawdź odpowiedz</button></a>
    </div>

    <div class="oqiwe90j23908nsdf-29019wejondoifg-a8f09gq34g">
        <p class="iquwe0291nsdf-283urniuhgidfg">Tabele</p>
        <div class="poqiweniosdf-2joijoisdjfo">
        <table border="1">
  <tr>
    <th>Nagłówek kolumny 1</th>
    <th>Nagłówek kolumny 2</th>
  </tr>
  <tr>
    <td>Wiersz 1, Kolumna 1</td>
    <td>Wiersz 1, Kolumna 2</td>
  </tr>
  <tr>
    <td>Wiersz 2, Kolumna 1</td>
    <td>Wiersz 2, Kolumna 2</td>
  </tr>
</table>

        </div>
        <p class="opqweriodf-2jpoajksdop-sdnfopsdfjop">Każda tabela składa się z wierszy i kolumn. Mogą się w nich znajdować wszystkie rodzaje elemntów w HTML: tekst, zdjęcia linki itd.</p>
        <p class="iqouwe92oisdf-2joisdjfnoiasd">Tworzenie tabeli</p>
        <p class="iuqwenlsdfoi2-jwpjopd-vcxjo">Tabele można stworzyć, dzięki elementowi <span class="iquwensdf-29isdfsdof-2josdjof">&lt;table&gt; &lt;/table&gt;</span>. W tym elemencie następnie należy umieścić tabele oraz kolumny.</p>
        <p class="iqwuenksdf0291-je9w0fui09wenoidfjgodfg">Rzędy i Kolumny</p>
        <p class="ioquwe912-0df0-u2oiqregu0q3-0uigt0e9rqug0uegr"><span class="ioquwensodf029010s0sidf-oisdfjo2909sdf">&lt;tr&gt; &lt;/tr&gt;</span> umożliwia dodanie rzędu w tabeli, który można wypełnić kolumnami. Element <span class="ioquwensodf029010s0sidf-oisdfjo2909sdf">tr</span> pochodzi od "table row" (pol. rząd tabeli). <span class="qiwedsfosdf-2msdjfpo-xcv903-sfjsdpofjpo">&lt;td&gt; &lt;/td&gt;</span> dodaje kolumne w tabeli (skrót td oznacza "table data").</p>
        <p class="iqwuesd-f2901i0dsf-iovdaiodf0ajodif-ajoijo">Nagłówki Tabeli</p>
        <p class="qwopeismdf-21-dfgopniosf-3jpojwepof">Jeśli chcesz dodać tytuł do kolumny swojej tabeli zamiast <span class="oqenosdf020-1osdofiofndobfs-jdosfjop">&lt;td&gt;</span> użyj <span class="oqenosdf020-1osdofiofndobfs-jdosfjop">&lt;th&gt;</span>. Skrót <span class="qowiejsdpf-21p2i-0sdf-jopsadjfop">td</span> oznacza "Table Header".</p>
        <div class="iquwe-dsfni210sdfo-sdofgj9032-noidf">
          <div class="iuqwe-21jsdjf90sdf-1ijsiofdsf">
          <p>...</p>
          &lt;tr&gt;
          <p>&lt;td&gt;<span class="">1</span> &lt;/td&gt;</p>
          <p>&lt;td&gt;2 &lt;/td&gt;</p>
          <p>&lt;td&gt;3&lt;/td&gt;</p>
          <p>&lt;/tr&gt;</p>
          <p>&lt;tr&gt;</p>
          <p>&lt;td&gt;4 &lt;/td&gt;</p>
          <p>&lt;td&gt; 5 &lt;/td&gt;</p>
          <p>&lt;td&gt; 6 &lt;/td&gt;</p>
          <p>&lt;/tr&gt;</p>
          <p>&lt;/table&gt;</p>
          </div>

          <div class="ioqeuqwe012-jsdfj9302-dfmogajdfgo">
          <table>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>4</td>
    <td>5</td>
    <td>6</td>
  </tr>
</table>
          </div>
        </div>
        <p class="opqiwefd-i02i-0sdf-nmiojoisdfg">W tym przykładzie dodałem obramowanie do każdego elementu aby tabela była widoczna. Można to zrobić dodająć w pliku CSS <span class="opqiweosdf-2jo1i2jsdf-jspodfpo">table, th, td {  
            <br>border: 1px solid #000;
          }</span>
          </p>
          <p class="iuqweniosdf-2jjqw-sdjfsdjfoidsf">Podsumowanie</p>
        <div class="iuqweniodf02-ndosfjosd-2joisdficv">
          <p><span class="iqwejiodf02-niojboidf-sjofigjosidfg">&lt;table&gt; &lt;/table&gt;</span> - Tworzy tabele w której następnie są umieszczane kolumny i rzędy.</p>
        </div>
        <div class="oiqwe-sdjfiosdf-2jioxcniog-dfjoidfg">
          <p><span class="ioqweniosdf021-jsdoifjopi2-sdinodfogi">&lt;tr&gt; &lt;/tr&gt;</span> - Dodaje wiersz do tabeli.</p>
        </div>
        <div class="iuqwehnsdf02j-oijdofgjodfg">
        <p><span class="lnldsf-2jiosdjfo-2jpoi2jnisdf">&lt;td&gt; &lt;/td&gt;</span> - Dodaje kolumne do tabeli.</p>          
        </div>
        <div class="oiuqwe-2jiojsdf-jiowefniosdf">
          <p><span class="oiqwenoisdf-2joi12sd-noidfngoidf">&lt;th&gt; &lt;tg&gt;</span> - Określa nagłówek tabeli.</p>
        </div>
        <p class="iouqweniosdf-2joi12-sdjofisjdof">Dodatkowe Elementy</p>
        <div class="iuqwenisdf-2jioq-sdjoifsjdof">
          <p><span class="qweopsdfodf-2jiosdfoisdf-j2oijsodf">&lt;caption&gt; &lt;/caption&gt;</span> - Dodaje tytuł tabeli. Umieszcza się go zazwyczaj po elemencie &lt;table&gt;.</p>
        </div>
        <div class="oiuqweiosdf-2niojoqw-sdofisjdfo">
          <p><span class="opqiweniosdf-2j1j2opsdfnjknja-soisdfjoisdf">&lt;thead&gt; &lt;thead&gt;</span> - Grupuje wiersze z nagłówkami kolumn, gdzie każdy nagłówek jest reprezentowany przez element &lt;th&gt;.</p>
        </div>
        <div class="iuqwenif-jsifjsd-fj2iojosdfnn">
          <p><span class="opiquweiodf-2masjdosdf-sdonoiasd">&lt;tbody&gt; &lt;/tbody&gt;</span> - Służy do grupowania oraz lepszej organizacji wierszy w tabeli. ( Nie wpływa na wygląd tabeli)</p>
        </div>
        <div class="iuqwenif-joisdf-20nsdofniosdf">
          <p><span class="nxjcvndsojfpsdf-joidnvjkd-fnjgoidfg">&lt;tfoot&gt; &lt;/tfoot&gt;</span> - Służy do grupowania wierszy podsumowujących jakieś dane np. sumy, średnie itd.</p>
        </div>
        <div class="iouqwenoisdf-2joijqw-sjdiojiosdf">
          <p><span class="opqwiempnklxcv-woiqiodjfiosf-2jioxncjkvasld">&lt;colgroup&gt; &lt;/colgroup&gt;</span> - Określa jakąś liczbę kolumn do sformatowania (zmiany stylów  w CSS)</p>
        </div>

        <div class="oiqwe-iosjdofi-2jioqwbisdf0noid-nlsdjfoi">
          <p><span class="opiqweniosdf-2ioaisopdnc-sdnflkjsf">&lt;col&gt;</span> - Służy do zmiany stylów kolumny (tak jak w powyższym przykładzie ale tutaj można sformatować tylko 1 kolumne)</p>
        </div>
        <p class="ioquwenisdf-2jiosjod-sdfoisd">Uwaga! &lt;col&gt; jest jednym z tzw. pustych elementów to znaczy, że nie wymaga tagu zamykającego.</p>
        <a href="index.php?page=Cytaty w HTML"><button class="oqwieiosdf-2jioqjowisdf-isd9fi290nsdofsd">Cytaty <span class="material-symbols-outlined">chevron_right</span></button></a>
        <p class="opiqewiosdf-2oisjf-dsfoisjdfoi9qiwpsdf">Zadania</p>
          <p class="oqiwpe-sdfoisdfjoisdf-2joijonifsdf-sdfdio">Uzupełnij poniższe fragmenty kodu.</p>
          <div class="oiqweniosdf-2oiqd-sdoifsjdif">
            <p class="qweposdf-nsidofsodf-2joiajosd-fsdfni">...</p>
            <input type="text" class="qweiousdf-2ioqjdoisa-sdoifjsdoif" id="tableExercise1">
            <p>&lt;tr&gt;</p>
            <p>&lt;th&gt; <span class="qweposdf-nsidofsodf-2joiajosd-fsdfni">Tekst 1</span> &lt;/th&gt;</p>
            <p>&lt;th&gt; <span class="qweposdf-nsidofsodf-2joiajosd-fsdfni">Tekst 2</span> &lt;/th&gt;</p>
            <p>&lt;th&gt; <span class="qweposdf-nsidofsodf-2joiajosd-fsdfni">Tekst 3</span> &lt;/th&gt;</p>
            <p><input type="text" class="qweopnsiodf-2oijdoisd-fsndoifsdof" id="tableExercise2"></p>
            <p class="qweposdf-nsidofsodf-2joiajosd-fsdfni">...</p>
          </div>
            <p>Dodaj kolumnę oraz określ jej klasę na: "<span class="ioquensdf-2iosdfiosd-fsdofsjdof">kolumna-1-klasa</span>" oraz jej id na: "<span class="iquwjiosdf-osidfjoisdf-2oisdjfoisdf">kolumna-1-id</span>"</p>
          <div class="oqweiuodf-iqwe-sdjfisjdifo">
            <p class="oqwefosdfjopsdf-ejojfoijdfdnfgs-dfgoisdfjgoisdjf">...</p>
            <p><input type="text" class="iqweiodfni0n-nsdoifisodf-2ijosdf-soidf" id="tableExercise3"></p>
            <p><input type="text" class="iqweiodfni0n-nsdoifisodf-2ijosdf-soidf" id="tableExercise4"></p>
            <p>&lt;td&gt; <span class="qweposdf-nsidofsodf-2joiajosd-fsdfni">Tekst 1</span> &lt;/td&gt;</p>
            <p>&lt;td&gt; <span class="qweposdf-nsidofsodf-2joiajosd-fsdfni">Tekst 2</span> &lt;/td&gt;</p>
            <p>&lt;td&gt; <span class="qweposdf-nsidofsodf-2joiajosd-fsdfni">Tekst 3</span> &lt;/td&gt;</p>
            <p><input type="text" class="iqweiodfni0n-nsdoifisodf-2ijosdf-soidf" id="tableExercise5"></p>
            <p><input type="text" class="iqweiodfni0n-nsdoifisodf-2ijosdf-soidf" id="tableExercise6"></p>
            <p class="qweposdf-nsidofsodf-2joiajosd-fsdfni">...</p>
          </div>
          <p class="oiqweniosdf-2jiojasdfo-sdfoisdf">Zad-6 Odtwórz poniższą tabelę (Nie przejmuj się obramowaniem, które poznasz w kursie CSS. W tej tabeli znajduje się ono aby była czytelniejsza).</p>
          <div class="iuqwe-2jioasdjisodfjosidf">
            <table>
              <tr>
                <th>Imię:</th>
                <th>Data:</th>
                <th>Wpłata:</th>
              </tr>

              <tr>
                <th>Łukasz</th>
                <th>09.01.2024</th>
                <th>124zł</th>
              </tr>

              <tr>
                <th>Grzegorz</th>
                <th>11.01.2024</th>
                <th>68zł</th>
              </tr>

              <tr>
                <th>Robert</th>
                <th>05.01.2024</th>
                <th>91zł</th>
              </tr>
            </table>
          </div>
          <a href="https://github.com/Yuify-Exercises/Zadania"><button class="oqweopjsdfnlkxc-2noiajd-dfjsoidfjosidf">Sprawdź odpowiedz</button></a>
      </div>

      <div class="oiuqwiosdf-nio-2josdjofbnk-qjiosdo">
          <p class="ioquwe-sdfiodjfosf-jiojosdf">Cytaty</p>
          <p class="qwesdfpo-2oiasjodsdf-sdfiosjdfio">Element <span>&lt;blackquote&gt;</span></p>
          <p class="iouqwehiusdf02nuisdf-nosdjfoisdf"><span class="iquwiosdf-2joijsod-sdjoifsjdf">&lt;blackquote&gt;</span>określa sekcję w której znajduje się tekst zaczerpnięty z innego źródła. W tagu otwierającym należy dodać atrybut cite określający źródło z którego pochodzi dany cytat.</p>
          <div class="oiuqwe-dsjfiosf-j2josdfsdnfioas">
           <p class="iqwuensodf-sifjo2-sdjfiosdf">&lt;blackquote cite="<span class="iquweniodjkxcv-2nkjnsdkf-xcnvsoidfjo">https://pl.wikipedia.org/wiki/Skrzyp_zimowy</span>"<span class="oqiwuenisodf-2joisdf-sdf90dfngiodf">&gt;</span></p><br>
            <p></p>
            <span class="oiqpewiosdf-soidjosdf-noisdnfiosd">&lt;p&gt;</span> Cytat do uzupełnienia <span class="oiqpewiosdf-soidjosdf-noisdnfiosd">&lt;/p&gt;</span>
          </div>
          <p class="oqweopsdf-sjiodfjnixcv-2joisdjfo">Element <span>&lt;q&gt; &lt;q/&gt;</span></p>
          <p class="oqiwejoidf-2iojsdfiosd-fjsidf"><span class="oiqwenoidsf-2iiud0f9sdnifo-2u90sdf09sdf">&lt;q&gt; &lt;/q&gt;</span>służy do dodawania krótkich cytatów w tekście. Można go używać np. w elemencie <span class="oqiewkpodf-21908nsnlxcv-sdfnnvxc-dnosfni">&lt;p&gt; &lt;/p&gt;</span> aby zacytować jakiś fragment. Pokazuje to poniższy przykład:</p>
          <div class="iuqwenjkxcv-fdsiofjsiodf-2osdfnoisdf-joisdfjoiDJOIF">
            <p class="opqiweopsdf-sdnfoi2-ndfniofdf"><span class="oqwieosmndofs-2iosdf-sdfoisf">&lt;p&gt;</span>Czym jest skrzyp zimowy? <span class="iquwniosdf2-sdfiosdjfio2-sjdiofnskjcv">&lt;q&gt;</span>Skrzyp zimowy (Equisetum hyemale L.) – gatunek rośliny z rodziny skrzypowatych. Występuje w Europie i Azji oraz na Grenlandii, w szerokim ujęciu taksonomicznym także w Ameryce Północnej. W Polsce dość pospolity. <span class="oqiweniosdf-2joidf-sdjfio900sdfds0f">&lt;/q&gt;</span></p>
          </div>
          <p class="ioquweniosdf-2jioqsdjoidf-dsjf90sdjpfsdf">Element <span>&lt;adress&gt; &lt;/adress&gt;</span></p>
          <p class="iquwenosdf-oiwuoiqwenjkdf-nxkcjoasdpo">Powyższy element definiuje informacje kontaktowe do autora/właściciela strony internetowej. Może się tam znajdować adres e-mail, numer telefonu, linki do medii społecznościowych itd. Każdy element <span class="oqiwenjxcv-najksbdnjkc-niosdfjoisdf">&lt;adress&gt; &lt;/adress&gt;</span> poprzedzony jest odstępem <span class="oqiwenjxcv-najksbdnjkc-niosdfjoisdf">&lt;br&gt;</span> oraz styl czcionki zmienia się na <i>Italic</i>.</span></p>
          <div class="opuqiwe-sdfjiosdf-xiocvjiosdf">
            <p class="opiqwesdf-2as90ds-nxcvnasd-jsiodf">&lt;adress&gt;</p>
            <p>kontakt@gmail.com</p>
            <p>Numer tel: 000 000 000</p>
            <p>Odwiedź również:</p>
            <p>adres.com</p>
            <p class="opiqwesdf-2as90ds-nxcvnasd-jsiodf">&lt;/adress&gt;</p>
          </div>
          <p class="iqowueiosdf-2u90quiw90nsdf-sdjfosjdf">Element &lt;bdo&gt;</p>
          <p class="opiqweiosdf-2u09u0sdfnosd-fjs0fu0s9df"><span class="oiqweiosdf-2jiosdf-sdjfo00ndofsd">&lt;bdo&gt; &lt;/bdo&gt;</span> umożliwia zmiane kierunku tekstu. Aby napisać tekst od <span class="oiqweiosdf-2jiosdf-sdjfo00ndofsd">prawej do lewej</span> należy dodać atrybut <span class="oiqweiosdf-2jiosdf-sdjfo00ndofsd">dir</span> oraz ustawić jego wartość na <span class="oiqweiosdf-2jiosdf-sdjfo00ndofsd">rtl</span>. <span class="oiqweiosdf-2jiosdf-sdjfo00ndofsd">Rtl</span> jest to skrót od <span class="oiqweiosdf-2jiosdf-sdjfo00ndofsd">right to left</span>, natomiast atrybut Ltr sprawi, że kierunek tekstu zostanie ustawiony od <span class="oiqweiosdf-2jiosdf-sdjfo00ndofsd">lewej do prawej</span> (lft to skrót od left to right)</p>
            <div class="oiuqwehoisdf872190dwfhi9sdf90-23fho9sdf">
              <p class="opiawendoifs-dfjoi2-sdfoisdf">&lt;bdo dir="rtl"&gt; <span class="oiqweiosdf-2joisdf-sdf092niosdf">Ten tekst zostanie napisany od prawej do lewej</span> &lt;/bdo&gt;</p>
            </div>
            <p class="nxjkcvnioqsdd0f9sdf021h-hadfgh9q4qg4qgh0-rjroihfoihdfshiosf">Element &lt;cite&gt; &lt;/cite&gt;</p>
            <p class="ioquwenhisdf-21jojsdf-sdjodfjgod"><span class="iuqweiosdf-2niosdf-sndofsdof">&lt;cite&gt; &lt;/cite&gt;</span> definiuje tytuł jakiejś pracy. Może to być np. książka, obraz, wiersz. Tekst znajdujący się w tym elemencie jest zazwyczaj wyświetlany w stylu <i>Italic</i>.</p>
            <a href="index.php?page=Test-1"><button class="iuqwensdf82-0anfsd0fs8f9-nsdof">Test  <span class="material-symbols-outlined">chevron_right</span></button></a>
            <p class="opiqweoisdf-2noisdf-sdfojsdfni">Zadania</p>
            <div class="qwueosdf-2iosdf-sdofisndiof">
              <p><input type="text" class="oiqwejiosdf-2oisdjofisdfoisdfg" id="quotesExercise1"></p>
              <p>E-mail: firma@gmail.com</p>
              <p>Numer tel: 000 000 000</p>
              <p><input type="text" class="oiqwejiosdf-2oisdjofisdfoisdfg" id="quotesExericse2"></p>
            </div>
            <p class="opqweiunsdf-12j3pojsdopfjsopdf">Odtwórz poniższą stronę internetową. Możesz ją uzupełnić własnym tekstem lub użyć lorem.</p>
            <div class="iquweniosdf-2oiqnosdf-sdopfs">
              <div class="ioqweoisndf-123oijndoifsdofg">
                <p><mark><cite>Nazwa</cite></mark></p>
                <p><b><q>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Numquam deserunt voluptate saepe ab expedita labore assumenda optio tenetur maiores quae, <br> minus pariatur error et nihil amet repudiandae aperiam voluptas molestias?</q></b></p>
                <br>
                <p><b><q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br> Sed tempora nostrum eligendi molestias, <br> accusamus a voluptate. Nobis vitae laboriosam expedita vel eveniet nostrum recusandae, porro, <br> fugiat consequatur beatae doloribus nesciunt.</q></bdo></b></p>
                <address>
                  <br>
                  <br>
                  <br>
                  <p>Tel. 000 000 000</p>
                  <p>E-mail: email@gmail.com</p>
                </address>
              </div>
            </div>
            <a href="https://github.com/Yuify-Exercises/Zadania"><button class="asd912NIOSDF98u98faWE98Y98yf89sdiuSD-FSDFJO9SF98hHF98sd">Sprawdź odpowiedzi</button></a>
          </div>

          <div class="iuqwe-9012NOSD0J0U09fu0as9u0FU90uf9au90FU0dfuHSdf8hDHF89sdf">
            <p class="qiwjendsnf-vud0u28390oidg">Test #1</p>
            <p class="iuqweniusdf02ni0-12390sdfsodf">Ten test podsumuje twoją podstawową wiedzę z ostatnich tematów. Składa się on z 10 zadań na których ukończenie masz 20 minut.</p>
            <a href="index.php?page=Test 1"><button class="iqwensdf-noqw-sdfiosdf-1299sd-fnsodf">Rozpocznij</button></a>
          </div>

          <div class="opiqe0ds-129IOSDF0-NIDFjsFDS398DfsfoisdfS9f0s">
            <p class="iquwendf20sd-fnvcb-dfgndiofg-d-fgdnofig">Powodzenia!</p>
            <p>Polecenie do zadań 1,2,3: Uzupełnij fragmenty kodów.</p>
            <p>Zad.1</p>
            <div class="iuqweiosdf-12j-sdfosidfsdf">
              <div class="iuqwensdf-sdnfiosdf-2jodfniosdf">
                <input type="text" class="ioquweisdf0-12nosdf-sdfnosdg-2j3jsdf" id="test1Exercise1Input1">
                <p class="qowiesndiofs-df9023-fsodgndfg">&lt;html&gt;</p>
                <p class="qowiepsdfmndofginoeigjf-gnsf">&lt;head&gt;</p>
                <p><span class="qoweinsfnxcvioqw80df-dfgodf">&lt;title&gt;</span> Moja Strona Internetowa <input type="text" class="nclvnisodfio1-wjsdf-sdfnofdsgoidf" id="test1Exercise1Input2"></p>
                <p><input type="text" id="test1Exercise1Input3" class="ncxvnxico-JOIDF-ndoi-SNODIF9203NONOD"></p>
                <p class="qopwiemopdMOPSDFSDFD-FGDNFGD-FGJPEF">&lt;body&gt;</p>
                <p><span class="qjwoiNIONFISDF-SDNIOFQ-WPOSD">&lt;p&gt;</span> <input type="text" id="test1Exercise1Input3_1" class="ncxvnxico-JOIDF-ndoi-SNODIF9203NONOD">Nazwa <input class="ncxvnxico-JOIDF-ndoi-SNODIF9203NONOD" id="test1Exercise1Input3_2" type="text"><span class="NISODFNOISDF-2NPDF-SDNOFFOI">&lt;/p&gt;</span></p>
                <p class="qopwiemopdMOPSDFSDFD-FGDNFGD-FGJPEF">&lt;br&gt;</p>
                <p><input type="text" id="test1Exercise1Input4" class="oiquwenbiosdf-qwosdf-sdfsd"><input type="text" class="qwieudsfiocnjkxvs0cv-ISDFHOISDFSFU8930SDF-DFNOG" id="test1Exercise1Input5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti dolorum esse, et itaque cum laudantium reiciendis soluta <input type="text" class="NISDF02-SDFN-ASH9DSF-1N2O-DFSNIOD" id="test1Exercise1Input6"> <input class="hJOIDFJOSDF-12OSDFSD-0F-FGDJ0FG9" id="test1Exercise1Input7" type="text"></p>
                <p><span class="JDOIFS-DFN2OI3F90SD-GDFNGODF-GASDFGIO">&lt;p&gt;</span> <input class="qopwiemopdMOPSDFSDFD-FGDNFGD-FGJPEF" id="test1Exercise1Input8" type="text">$199.99 <input class="qopwiemopdMOPSDFSDFD-FGDNFGD-FGJPEF" id="test1Exercise1Input9" type="text"> <span class="NIODF-SDFNO12-SNFIODF-GSHOFDGOI">&lt;/p&gt;</span></p>
                <p><span class="NISODF-1NOSD-DNFGAD-FGJS0DFGJP">&lt;p&gt;&lt;b&gt;&lt;h2&gt;</span>$149.99<span class="JWF-02EFNOSG9DFGDFSDFGSODFG-2SJODF">&lt;/h2&gt;&lt;/b&gt;&lt;/p&gt;</span></p>
                <p class="SOIDFJOSDF-12NODS-DNFOGI-ASNOP">&lt;br&gt; &lt;br&gt; &lt;br&gt; &lt;br&gt; &lt;br&gt;</p>
                <p><input type="text" class="NIOSDF012NODSF-GNOFDGD-FGH2-NODSFG" id="Test1Exercise1Input10"></p>
                <p><span class="oqwienposdf-2npsdf-sdnfiosdfinidof">&lt;p&gt;</span>E-mail: 123@gmail.com <span class="oqwienposdf-2npsdf-sdnfiosdfinidof">&lt;/p&gt;</span></p>
                <p><span class="ioquweniosdf-2nodf-sdfno2-1nodfgdf">&lt;p&gt;</span>Tel: 123 123 123 <span class="ioquweniosdf-2nodf-sdfno2-1nodfgdf">&lt;/p&gt;</span></p>
                <p><input type="text" class="OPIDFNSIODF-12NOSDF-WNPF-ADEFGNODF" id="test1Exercise1Input13"></p>
                <p class="qpwenoisdf-2noi1-nsodfjsopdf">&lt;/body&gt;</p>
                <p class="oiqweJPOSDJFOPS-DF2NPEF-SDNGPDFG">&lt;/html&gt;</p>
              </div>

              <div class="ioquwe-sdfniosdf-2joqnsdf-sdnfiosdf">
                <p><cite>Nazwa</cite></p>
                <br>
                <p><mark>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste corrupti dolorum esse, et itaque cum laudantium reiciendis soluta </mark></p>
                <p><del>$199.99</del></p>
                <p><b><h2>$149.99</h2></b></p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <address>
                  <p>E-mail: 123@gmail.com</p>
                  <p>Tel: 123 123 123</p>
                </address>
              </div>
            </div>

            <p class="ioquweOISDFHO-12NOSDF-NOFD">Zad.2</p>

            <div class="uiqqwes-dfnoqiewf-wje9">
              <div class="SNIDF-EWNFOWE-FS9PGS0-IRGDFSG">
                <p>...</p>
                <p class="NSDFO-2NOSDF-I-0SODF120SDFNOSD">&lt;body&gt;</p>
                <p><input type="text" id="test1Exercise2Input1" class="NSDF-S-DFJSDF-J09283490RSDF-SDFOSD">"https://www.youtube.com/"<span class="OISDFJSPDF-2NOSDF-SDFNOQWE-FSDOF">&gt;</span> YouTube <input type="text" class="NSDF-S-DFJSDF-J09283490RSDF-SDFOSD" id="test1Exercise2Input2"></p>
                <p><span class="OISDFJSPDF-2NOSDF-SDFNOQWE-FSDOF">&lt;img</span> <input type="text" class="NSDF-S-DFJSDF-J09283490RSDF-SDFOSD" id="test1Exercise2Input3"> "image.png"<span class="OISDFJSPDF-2NOSDF-SDFNOQWE-FSDOF">&gt;</span></p>
                <p><input type="text" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise2Input4"></p>
                <p><span class="NSIODF-2NOW-FSD9F0S-DFNOQ2WF-SEFNO">&lt;li&gt;</span> To jest 1 podpunkt <span class="NSIODF-2NOW-FSD9F0S-DFNOQ2WF-SEFNO">&lt;/li&gt;</span></p>
                <p><span class="NSIODF-2NOW-FSD9F0S-DFNOQ2WF-SEFNO">&lt;li&gt;</span> To jest 2 podpunkt <span class="NSIODF-2NOW-FSD9F0S-DFNOQ2WF-SEFNO">&lt;/li&gt</span></p>
                <p><span class="NSIODF-2NOW-FSD9F0S-DFNOQ2WF-SEFNO">&lt;li&gt;</span> To jest 3 podpunkt <span class="NSIODF-2NOW-FSD9F0S-DFNOQ2WF-SEFNO">&lt;/li&gt;</span></p>
                <p><input type="text" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise2Input5"></p>
                <p class="NSIODF-2NOW-FSD9F0S-DFNOQ2WF-SEFNO">&lt;/body&gt;</p>
                <p>...</p>
              </div>
              <div class="SIF-23ONFSDGOEFG-SFGOSFG-03HDSFG">
                  <a class="NSDF-2EFNOSFAJH9FG0E-GUE09RGDF" href="https://www.youtube.com/">YouTube</a>
                  <img class="NIOSDF-WNOF-SNIFOSDFNOI" src="y.png" alt="Check your internet connection.">
                  <ul class="NSDFNOISDF-2NOIQ-SDOFSDNO">
                    <li>To jest 1 podpunkt</li>
                    <li>To jest 2 podpunkt</li>
                    <li>To jest 3 podpunkt</li>
                  </ul>
              </div>
            </div>
            <p class="ioquweOISDFHO-12NOSDF-NOFD">Zad.3</p>
            <div class="qwoeidsf-NIOSDF-12NOISDFNSODF">
            <div class="NOSDF-23NFOS-DGSDOG-2EHDG7USD0FG-SDFNGO">
              <p>...</p>
              <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;head&gt;</p>
              <p><input type="text" id="test1Exercise3Input1" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF">"stylesheet" <input class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise3Input2" type="text">"style.css"<span class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&gt;</span></p>
            <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;/head&gt;</p>
            <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;body&gt;</p>
            <input type="text" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise3Input3">
            <p><input type="text" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise3Input4"></p>
            <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;td&gt; <span class="NISODF-2F9023-FNGOIAFGCVBCVB">1</span> &lt;/td&gt;</p>
            <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;td&gt; <span class="NISODF-2F9023-FNGOIAFGCVBCVB">2</span> &lt;/td&gt;</p>
            <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;td&gt; <span class="NISODF-2F9023-FNGOIAFGCVBCVB">3</span> &lt;/td&gt;</p>
            <p><input type="text" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise3Input5"></p>
            <p><input type="text" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise3Input6"></p>
            <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;td&gt; <span class="NISODF-2F9023-FNGOIAFGCVBCVB">4</span> &lt;/td&gt;</p>
            <p><input type="text" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise3Input7"></p>
            <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;td&gt; <span class="NISODF-2F9023-FNGOIAFGCVBCVB">6</span> &lt;/td&gt;</p>
            <p><input type="text" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise3Input8"></p>
            <p><input type="text" class="NOISDF-WNOF-SDF2-FS-DGFGE0G-EFDGO0DF" id="test1Exercise3Input9"></p>
            <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;/body&gt;</p>
            <p class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;/html&gt;</p>
          </div>

            <div class="NOSIDF-2QENWIOF-FGH98SDFG-SDFGO">
              <table>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                </tr>
              </table>
            </div>
            </div>
            <p class="ioquweOISDFHO-12NOSDF-NOFD">Zad.4</p>
            <p>Wybierz właściwe odpowiedzi spośród podanych.</p>

            <div class="AJSDA-SDP1WSNDFOP-FNAODFGDF">
              <p class="JHOIFS-DFSODF-SDGHJ09G2-EGNDSFG">Który z poniższych elementów umożliwia dodanie przycisku z klasą "submit-button"?</p>
              <div class="IUSDFOP2NEOPF-SDOPSDG-QNOWPD">
                <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise4Button1">&lt;przycisk class="submit-button"&gt; &lt;/przycisk&gt;</button>
                <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise4Button2">&lt;button id="submit-button"&gt; &lt;/button&gt;</button>
              </div>
              <div class="OIUWEJPOSDF-SDFPOSDF-J2PEJPOSD">
                <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise4Button3">&lt;button class="submit-button"&gt; &lt;/button&gt;</button>
                <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise4Button4">&lt;/button class="submit-button"&gt; &lt;/button&gt;</button>
              </div>
            </div>

            <div class="QIOUWE-SDFNOIF2-JF90SD-FEODGDF">
              <p class="JHOIFS-DFSODF-SDGHJ09G2-EGNDSFG JDSF-13NOSD-FGAJ9U0-GDFGO">Do czego służy element <span class="NIOSDF-1WNOISDFSIODGF-EQRGHO9DF">&lt;strong&gt; &lt;strong&gt;</span> ?</p>
              <div class="IUSDFOP2NEOPF-SDOPSDG-QNOWPD">
              <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise5Button1">Do przekreślania tekstu</button>
              <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise5Button2">Do tworzenia indeksu dolnego</button>
              </div>
              <div class="OIUWEJPOSDF-SDFPOSDF-J2PEJPOSD">
                <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise5Button3">Do podświetlania tekstu</button>
                <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise5Button4">Do pogrubiania tekstu</button>
              </div>
            </div>
            <div class="IOQUWEBSDF-12SD8FYA0DF-ASDFOADF">
              <p class="JHOIFS-DFSODF-SDGHJ09G2-EGNDSFG JDSF-13NOSD-FGAJ9U0-GDFGO">Czy można dodać 2 id o takiej samej nazwie?</p>
              <div class="OIUWEJPOSDF-SDFPOSDF-J2PEJPOSD">
              <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise6Button1">Tak</button>
              <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise6Button2">Nie</button>
              </div>
            </div>
            <p class="ioquweOISDFHO-12NOSDF-NOFD">Zad.5</p>
            <p>Wybierz jakich elementów dotyczą poszczególne opisy.</p>
            <div class="OIQWENIOSDF-139F-SDJF90SDF2-309DFGSDFG">
            <p class="JHOIFS-DFSODF-SDGHJ09G2-EGNDSFG UOQWE-SDFHO13-FJS0DFS-SFDOFSD">Element ten umożliwia dodanie linijki odstępu.</p>
              <div class="IUSDFOP2NEOPF-SDOPSDG-QNOWPD">
              <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise7Input1"><span class="JQWINOSDFOISDF-2NIOSDFOSD-NIGDF0G-2NDFNIODFG">&lt;br&gt;</span></button>
              <button class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG" id="test1Exercise7Input2"><span class="JQWINOSDFOISDF-2NIOSDFOSD-NIGDF0G-2NDFNIODFG">&lt;ul&gt;</span></button>
              </div>
              <div class="OIUWEJPOSDF-SDFPOSDF-J2PEJPOSD">
                <button id="test1Exercise7Input3" class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG"><span class="JQWINOSDFOISDF-2NIOSDFOSD-NIGDF0G-2NDFNIODFG">&lt;em&gt; &lt;/em&gt;</span></button>
                <button id="test1Exercise7Input4" class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG"><span class="JQWINOSDFOISDF-2NIOSDFOSD-NIGDF0G-2NDFNIODFG">&lt;sup&gt; &lt;/sup&gt;</span></button>
              </div>
          </div>
          <div class="OIQWENIOSDF-139F-SDJF90SDF2-309DFGSDFG">
            <p class="JHOIFS-DFSODF-SDGHJ09G2-EGNDSFG UOQWE-SDFHO13-FJS0DFS-SFDOFSD">Służy do dostarczania alternatywnego tekstu opisującego zawartość obrazu, w sytuacji gdy nie może się załadować.</p>
            <div class="IUSDFOP2NEOPF-SDOPSDG-QNOWPD">
              <button id="test1Exercise8Input1" class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG"><span class="JQWINOSDFOISDF-2NIOSDFOSD-NIGDF0G-2NDFNIODFG">src</span></button>
              <button id="test1Exercise8Input2" class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG"><span class="JQWINOSDFOISDF-2NIOSDFOSD-NIGDF0G-2NDFNIODFG">alt</span></button>
            </div>
            <div class="OIUWEJPOSDF-SDFPOSDF-J2PEJPOSD">
              <button id="test1Exercise8Input3" class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG"><span class="JQWINOSDFOISDF-2NIOSDFOSD-NIGDF0G-2NDFNIODFG">href</span></button>
              <button id="test1Exercise8Input4" class="B1J90UF90DSF-SDFASD-ADGA-DFGIADFG"><span class="JQWINOSDFOISDF-2NIOSDFOSD-NIGDF0G-2NDFNIODFG">class</span></button>
            </div>
          </div>
          <button id="test1ResultButton" class="bzsa-sdni2-asdins-dfnosdf OQIWEOISDF-1WNIOSDFJOSDFd">Sprawdź swój wynik</button>
          <div class="iuqweonosidf-sdnfoisd-fndosf">
            <p id="wynikTest1Procent" class="JHOIWD-SDFNIOSDF-2Q389F0-DFSGSDFG">20%</p>
            <p id="wyniktest1p" class="IUAWNOISDF-SDFOFQ2-FNSOIFD"></p>
          </div>
          <a href="index.php?page=Block And Inline"><button class="QNDIOFGNDFG-23OSD-FSNDOFSD">Block & Inline <span class="material-symbols-outlined">
chevron_right
</span></button></a>
        </div>

        <div class="IUQWENUSDF-N239F-SDFGNDF-GU209G-DNF0GODFG">
          <p class="NCNISDF-N2O-SDFNIOSDF-12CVNBI-SNFO">Block i Inline</p>
          <p class="QWNSDFW-DFG89DFG-239DFG-DFNGOD">Elementy w HTML można podzielić na 2 grupy: <span class="morski">block</span> i <span class="morski">inline</span>. Różnią się one tym, że elementy block zajmują cała dostępną przeszteń i są zaczynane w nowej linijce. Każdy taki element ma również domyślny margin, czyli odstęp od innych elementów. Przykładem takiego elementu może być <span class="morski">&lt;p&gt; &lt;/p&gt;</span>. Zawuaż, że za każdym razem, gdy używasz go w kodzie jest on wyświetlany w oddzielnej linijce. Oto przykład jak wygląda element <span class="morski">&lt;p&gt; &lt;/p&gt;</span> po dodaniu do niego ramki.</p>
            <p class="NOQWDNOIDSF-1Q2-SDBIFGDF">&lt;p&gt; To jest tekst &lt;/p&gt;</p>
            <p class="QWNSDFW-DFG89DFG-239DFG-DFNGOD">Jak widać w powyższym przykładzie zajmuje on cała dostępną przesztrzeń i jest linijke niżej niż poprzedni tekst.</p>
            <p class="BISDFSDNGOESDG-NOEG-DFGNODFG">Elementy <span class="morski">Inline</span> w przeciwieństwie do block zajmują tylko przesztrzeń, której potrzebują. Przykładem takiego elementu może być <span class="morski">&lt;span&gt; &lt;/span&gt;</span>. Służy on m.in. do dodawania stylów dla jakiejś części tekstu, ponieważ gdy dodajemy klase do elementu <span class="morski">&lt;p&gt; &lt;/p&gt;</span> cały tekst dostanie style przypisane danej klasie w CSS. Poniżej znajduje się przykład użycia <span class="morski">&lt;span&gt; &lt;/span&gt;</span> oraz dodane do niego zostało obramowanie, dzięki czemu widać jak działają elementy <span class="morski">Inline</span>.</p>
            <p>To <span style="border: 2px solid #5cA388;" class="morski">jest</span> tekst</p>
            <div class="IOUQWENIOSDF-1QN2WOF-SDNOSDF">
              <p class="morski">&lt;p&gt; <span class="bialy">To</span> &lt;span class="kolor"&gt;<span class="bialy">jest</span>&lt;/span&gt; <span class="bialy">tekst</span>&lt;/span&gt;</p>
            </div>
          </div>

        <!--WEBSITE ORDERS-->
        <a href="index.php?page=home"><span class="material-symbols-outlined NSDFBNIOSDF-1NWOIS-DFGNDSF">
arrow_back_ios
</span></a>
            <div class="QOPWEJISF-DFJDFOIG923-D-GDFGNOVNQW-DOISDF">
              <p class="NNSFD-2IDF-SDIFSDFSD-JSF209-d">Tell us something about your website...</p>
              <div class="PWNSDF-SDFQF-SDNFOISDG">
                  <p class="J9QWENIOSDFH89SDF-2H309FS0-GFHJDSFG">Enter number of pages...</p>
                  <input type="number" class="OQWENISDF-2SDU9SD-GDFG90Q-D" id="numberOfPagesInput" required>
                  <p class="OINSOIIDFJSOIF-2NOSDF-SDFNOISDF">Do you want your website to be responsive? <br> (Made for different screen sizes)</p>
                <div class="iqweoisndf0qfnod-gdngdsfg">
                  <button class="BSFI02NIF-2NOS-FWNEFW-FSDNOIFD" id="responsiveDesignTrueButton">Yes</button>
                  <button class="BSFI02NIF-2NOS-FWNEFW-FSDNOIFD" id="responsiveDesignFalseButton">No</button>
                </div>
                <p class="QIOWDINODF-SDNFOSD-FQN2OFNOSDF">What are you going to use your website for?</p>
                <select class="HOIOSIDF-2NOSDF-SNDOIFSDFNSDOF" id="websiteTypeInput" name="websiteType" required>
                  <option id="websiteTypeBlog" value="websiteTypeBlog">Blog</option>
                  <option id="websiteTypePortfolio" value="websiteTypePortfolio">Portfolio</option>
                  <option id="websiteTypeShop" value="websiteTypeShop">Shop</option>
                  <option id="websiteTypePersonalUse" value="websiteTypePersonalUse">Personal Use</option>
                  <option id="websiteTypeOther" value="websiteTypeOther">Other</option>
                </select>
                <p class="OCNVWND-2NODSFDJ0SFD">Help us make perfect website for you and shortly describe <br> how it's supposed to look like...</p>
            <textarea name="websiteDescriptionTextArea" id="WEBSITE-DESCRIBE" class="CVBKJCV9BWE-DFNGDF-0G0WER-DFG" cols="33" rows="16" required></textarea>  
            <p class="NOQWDNOSD-FNSDF-1NOSDF">Enter your email...</p>
            <input type="text" class="OQWENISDF-2SDU9SD-GDFG90Q-D BQUWEDNOISDF0BQ1IWF-SDFGINOSDF" id="emailInput">
            <button class="nisdf-2asd-sdfn2-naisd QIOUWENIOSDF-Q2NWFOS-DFSPODF" type="submit" id="sendWebsiteDescription">Send</button>  
          </div>
            </div>
        <!--END OF WEBSITE ORDERS-->
    <!--End of course page-->
    <!--Login Page-->
        <div class="qweiusdf-2noiqwijeos-dfosidfj">
          <form class="oqwiemsodfd-dnfog-2pojdfg" action="index.php" method="post">
          <label for="username" class="oqiwenisdf-2niosdf-2jisjdfo">E-mail:</label>
          <input class="oiqwemosdf-2osdf-2oisdjfoi" type="text" id="username" name="username" required>

          <label for="password" class="oqiwemosdf-2oisdf-2oisdjf">Password:</label>
          <input class="opqiwemsdf-2iof-2jiosjdfo-2jsdjfo" type="password" id="password" name="password" required>
          <div class="oqiwemosdf-qoposdfnid-2nisdjfo">
            <p class="oqiweosdf-2joqweiopsdfn2-sodpfsd">Zapisz się na nasz newstseller</p>
          <input type="checkbox" name="zaznaczony_checkbox">
          </div>

          <input class="oqiwesdofjopqwnisdf-2niosdf-2joisdjfoi" type="submit" value="Login">
          </form>
        </div>
          <!--Email-->
        <?php
          try {
          $db_server = "localhost";
          $db_user = "root";
          $db_pass = "";
          $db_name = "registration";
          $conn = "";
          $user_email = "";
          $user_password = "";
          $checkbox_value = "";
          $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $user_email = $_POST["username"];
                  $user_password = $_POST["password"];
                  $checkbox_value = isset($_POST["zaznaczony_checkbox"]) ? 1 : 0;
              }
              $sql = "INSERT INTO registration_info (user_email, user_password, checkbox) VALUES ('$user_email', '$user_password', '$checkbox_value')";
              mysqli_query($conn, $sql);

          } catch(mysqli_sql_exception) {
            
          }
          mysqli_close($conn);
          ?>
        <!--Password-->

    <!--End of login page-->
    <!--Home page design-->
    <div class="everything">
    <div class="ands-2nidfs-wnaisd">
    <div class="iuwniasf2-sdmfospdf">
    <p class="znxic2-zxnciqwsadnidfas basd-2buasd-sdfni2asdni-sdnivsd"><span class="nisdf-2niad-nsidf-asfinosdf">Designing</span> Tommorow: <br> Front-End <span class="nsidf-2nasd-nidf-2iasdnodf">Developer</span> Course</p>
    <p class="nsidf-2nasdnisdfs">Code, Create, Captivate: <br> Transform Your Tomorrow with Our Course</p>
    <a href="index.php?page=logowanie"><button class="nisdf-2asd-sdfn2-naisd">Get Started</button></a>
    <a href="index.php?page=Website order"><button class="bzsa-sdni2-asdins-dfnosdf">Buy Your Website</button></a>
    </div>
    <div class="qweuinzs-adni2-andioad">
    <div class="nsdfo0sdfni2-anids-a2nisdanisdfas">
          <p class="iuqwe02usad-2nia0sdniqwnkasd">Start For Free!</p>
          <p class="miasd-wniaw-naidnsdf">Check Out</p>
        </div>  
        <div class="nizs-2noasdiqowep-zxnisdfnasd">
          <p class="niasdbnzxc-2niasd-insdfnsd">Our Social Media</p>
          <div class="sdfnisd-2nias0dnsdibnsdf">
          <a href="https://discord.gg/nKQSa6HR">
          <svg xmlns="http://www.w3.org/2000/svg" class="naidsbzjxw-n1iw0asdinadbnfosidq-niasodfnsdfnsd" height="16" width="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M524.5 69.8a1.5 1.5 0 0 0 -.8-.7A485.1 485.1 0 0 0 404.1 32a1.8 1.8 0 0 0 -1.9 .9 337.5 337.5 0 0 0 -14.9 30.6 447.8 447.8 0 0 0 -134.4 0 309.5 309.5 0 0 0 -15.1-30.6 1.9 1.9 0 0 0 -1.9-.9A483.7 483.7 0 0 0 116.1 69.1a1.7 1.7 0 0 0 -.8 .7C39.1 183.7 18.2 294.7 28.4 404.4a2 2 0 0 0 .8 1.4A487.7 487.7 0 0 0 176 479.9a1.9 1.9 0 0 0 2.1-.7A348.2 348.2 0 0 0 208.1 430.4a1.9 1.9 0 0 0 -1-2.6 321.2 321.2 0 0 1 -45.9-21.9 1.9 1.9 0 0 1 -.2-3.1c3.1-2.3 6.2-4.7 9.1-7.1a1.8 1.8 0 0 1 1.9-.3c96.2 43.9 200.4 43.9 295.5 0a1.8 1.8 0 0 1 1.9 .2c2.9 2.4 6 4.9 9.1 7.2a1.9 1.9 0 0 1 -.2 3.1 301.4 301.4 0 0 1 -45.9 21.8 1.9 1.9 0 0 0 -1 2.6 391.1 391.1 0 0 0 30 48.8 1.9 1.9 0 0 0 2.1 .7A486 486 0 0 0 610.7 405.7a1.9 1.9 0 0 0 .8-1.4C623.7 277.6 590.9 167.5 524.5 69.8zM222.5 337.6c-29 0-52.8-26.6-52.8-59.2S193.1 219.1 222.5 219.1c29.7 0 53.3 26.8 52.8 59.2C275.3 311 251.9 337.6 222.5 337.6zm195.4 0c-29 0-52.8-26.6-52.8-59.2S388.4 219.1 417.9 219.1c29.7 0 53.3 26.8 52.8 59.2C470.7 311 447.5 337.6 417.9 337.6z"/></svg>
          </a>
          <svg xmlns="http://www.w3.org/2000/svg" class="asimoadno2-asionsfihanfahndf-2nasibnfsdbvidfv" height="16" width="16" viewBox="0 0 512 512"><path fill="#ffffff" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>          
          <svg xmlns="http://www.w3.org/2000/svg" class="asdiwj9iqouwednfisdf-2niaodniosfsd-fnqwionbsdfns" height="16" width="14" viewBox="0 0 448 512"><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>  
        </div>
        </div>
        <div class="nisdf-2niasiuiqowe-bnjxzfc-asdias">
        <p class="nisdiuqwnxzc-niasd-2nioansdoisdf-nais">Help Us Improve And</p>
        <p class="iuqwebjzxdc-wniasdfsdbuwasd-asfisdbfnc">Leave A Review</p>
        </div>
        <div class="niasd-2nasdnisdfns0opiwernbjzcx-vnowsdfalsd"></div>  <div class="niasd-2niasiuoqenjzx-qnildk"></div>   <div class="niasd-2niasd-ioquowebjzxc0qsnidas"></div>
              
    </div>
      </div>
    </div>
    </div>

    <div class="mnioasdi2-and2-0aisd">
      <div class="naisd-2nasd-aniossdf-naosdas">
        <div class="niasd-2nasd-anfiosndfsdf">
          <div class="nisadoasd-2nioajsdasnbdas">
          </div>
          <p class="naid0wqu9pnsod-3n9oadfosdf">7 400zł</p>
          <p class="niasd2-niasf-wniasd junior">Junior</p>
        </div>
        <div class="asdmn2niasd-2nias0-sdfnoi">
          <div class="asdmni2-asd9wunbkdsabfnsdkf">

          </div>
          <p class="andi-2nasd-ncvs0dfn9wef">15 000zł</p>
          <p class="niasd2-niasf-wniasd mid">Mid</p>
        </div>
          <div class="niasd2niasd02naosd0nsidfosd">
          <div class="sdfmnie-19we0siabnfiusdfnoisdf">
            
          </div>
          <p class="iyquwebkjzdc02bnia-sdsdfiashbfoqiw">20 400zł</p>
          <p class="niasd2-niasf-wniasd">Senior</p>
          </div>
          <p class="sdfdmfod-woerononsdf">Average <span class="naisdh2-qas-fsndifsc-viqwd"> Front-End </span> <span class="qiwuezicos-niw-anidbfisuadf">Developer</span> Salary</p>
      </div>
    </div>

    <div class="niasdaisd">
      
      <div class="nisdf-sdfio2-anisfhjsdlf-qadsi">
        <div class="uasduyqwbudf-sdnfioasbduasd">
        <div class="niasd-2ijaseuoabsjud0dubnw02buasbd">
          <p class="iqwuebudf-2niasd0niosdf">HTML</p>
          <a href="https://buy.stripe.com/test_dR6cNB0JXf3t3G89AB"><button class="qweioudbfiuds02u-nbusdfiiquniscf">Pricing</button></a>
          <button class="iaousdnis-3niasdniosdf">Start For Free</button>
          <a class="iqoweniskdf-2nias-dniqowjndfs" href="index.php?page=what is html">What is HTML?</a>
        </div>
        <div class="busfd02hioas0-2niasbdkz0bduf-niasd">
          <p class="iqwuebudf-2niasd0niosdf">CSS</p>
          <button class="qweioudbfiuds02u-nbusdfiiquniscf">Pricing</button>
          <button class="iaousdnis-3niasdniosdf">Start For Free</button>
          <a class="iqoweniskdf-2nias-dniqowjndfs" href="index.php?page=what is css">What is CSS?</a>
        </div>
        <div class="uyqwe-asdin2ioasdnisdf-qnidas">
        <p class="iqwuebudf-2niasd0niosdf">JavaScript</p>
        <button class="qweioudbfiuds02u-nbusdfiiquniscf">Pricing</button>
        <button class="iaousdnis-3niasdniosdf">Start For Free</button>
        <a class="iqoweniskdf-2nias-dniqowjndfs" href="index.php?page=what is javascript">What is JavaScript?</a>
        </div>   
        </div>
      </div>
      
      <div class="niasd-2niasd-nisdf-nisdf-BNAUDBUASDF">
        <div class="iuqwebasd-2nias-dniaofsinnsdf">
          <p class="insdfnisdf-23niasisdinofdsf">Discover your <span class="nsidf-2nasd-nidf-2iasdnodf">potential</span> with our <span class="iouqwenisodfnoiwdjfrpowsdnofs-enwiofhnisndf">HTML</span> & <span class="iouqwenisodfnoiwdjfrpowsdnofs-enwiofhnisndf">CSS</span> & <span class="iouqwenisodfnoiwdjfrpowsdnofs-enwiofhnisndf">JavaScript</span> course</p>
          <div class="j3jaos-aisiquwieoasbudsdf-2niashdioasdf">
        <svg xmlns="http://www.w3.org/2000/svg" class="iqyuweiubusdf020-asudfqiwebsdfa-sdfiusdf" height="16" width="12" viewBox="0 0 384 512"><path fill="#f16529" d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>
        +
        <svg xmlns="http://www.w3.org/2000/svg" class="iqyuweiubusdf020-asudfqiwebsdfa-sdfiusdf" height="16" width="12" viewBox="0 0 384 512"><path fill="#2965f1" d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3 .1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2 .1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"/></svg>
        +
        <svg xmlns="http://www.w3.org/2000/svg" class="iqyuweiubusdf020-asudfqiwebsdfa-sdfiusdf" height="16" width="14" viewBox="0 0 448 512"><path fill="#f7df1e" d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"/></svg>  
      </div>
      <button class="iqyuwebasdfas-d2nias0das-sbfhiiosdf">Start For Free</button>  
        </div>
      </div>
      <div class="nisdfni2-asindfds-gnisda0sdnfisdf">
        asdagdf
      </div>
      <p class="nxciv-3nisadfsdfin-snfisdf">Get Certified Today!</p>
      <button class="iasdi3-snfisd-f3iasd">Join Us</button>
      <div class="nisdf02-asdis-dfnisdf-nNBF-SDFNI-asdfnsd">
        <div class="nasd-hiasdonosdf-2niasfpdnsdf">
        <!--Name-->
        <div class="niasd-niasdpanif-2niasd">
          <p class="osad-2as-niasd-12niasd">Name:</p>
          <input type="text" class="mnsdf-2oas-nsiodfosdf">
        </div>

        <!--Email-->
        <div class="naisd-2niasd-ndifds">
          <p class="zbnxmc2-ainsd-sdfniakndlsad">E-mail*:</p>
          <input type="text" class="niasd-nisdf-2niasd-nisdfoasd">
        </div>

        <!--Message-->
        <div class="niasd-2niasd-naisdaodsfnosdf">
          <p class="sidfmoasd-2noiadnodnfkls">Message...</p>
          <input type="text" class="niasd-2niasdf-niasdopafsd">
        </div>

        <button class="niasd-2niasd-nisdf-2niasd">Send</button>
                  
        </div>
        <div class="maosdmoasd-2niasdaods">
          <p class="moasdmo2-nisdf-asind-sdfni">Kontakt</p>
          <p class="nisdfsdfo2-hierbzxcoqwd">Yuify.help@gmail.com</p>
          <div class="niasd-2niasdnisdf">
          <svg class="nisdf-2niasdnisdfg0sdinfqnisd" xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M524.5 69.8a1.5 1.5 0 0 0 -.8-.7A485.1 485.1 0 0 0 404.1 32a1.8 1.8 0 0 0 -1.9 .9 337.5 337.5 0 0 0 -14.9 30.6 447.8 447.8 0 0 0 -134.4 0 309.5 309.5 0 0 0 -15.1-30.6 1.9 1.9 0 0 0 -1.9-.9A483.7 483.7 0 0 0 116.1 69.1a1.7 1.7 0 0 0 -.8 .7C39.1 183.7 18.2 294.7 28.4 404.4a2 2 0 0 0 .8 1.4A487.7 487.7 0 0 0 176 479.9a1.9 1.9 0 0 0 2.1-.7A348.2 348.2 0 0 0 208.1 430.4a1.9 1.9 0 0 0 -1-2.6 321.2 321.2 0 0 1 -45.9-21.9 1.9 1.9 0 0 1 -.2-3.1c3.1-2.3 6.2-4.7 9.1-7.1a1.8 1.8 0 0 1 1.9-.3c96.2 43.9 200.4 43.9 295.5 0a1.8 1.8 0 0 1 1.9 .2c2.9 2.4 6 4.9 9.1 7.2a1.9 1.9 0 0 1 -.2 3.1 301.4 301.4 0 0 1 -45.9 21.8 1.9 1.9 0 0 0 -1 2.6 391.1 391.1 0 0 0 30 48.8 1.9 1.9 0 0 0 2.1 .7A486 486 0 0 0 610.7 405.7a1.9 1.9 0 0 0 .8-1.4C623.7 277.6 590.9 167.5 524.5 69.8zM222.5 337.6c-29 0-52.8-26.6-52.8-59.2S193.1 219.1 222.5 219.1c29.7 0 53.3 26.8 52.8 59.2C275.3 311 251.9 337.6 222.5 337.6zm195.4 0c-29 0-52.8-26.6-52.8-59.2S388.4 219.1 417.9 219.1c29.7 0 53.3 26.8 52.8 59.2C470.7 311 447.5 337.6 417.9 337.6z"/></svg>
          
          <svg class="sdfomsdf-2niasdnisdf-vnxicvosad" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path fill="#ffffff" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>  
          
          <svg class="nisdf-nv-2nias-sds-1niasdvf" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
          
        </div>
        <div class="asdinas-dn2i-afnisdfh">
          <div class="iquwendf-2noiadfsdfo">
            <p class="isdfn2osdf-sfsdfni">Dodaj opinię</p>
            <span class="material-symbols-outlined iuwere-ni-dfnisdfqni-sdnfsdf">
            close
            </span>
          </div>
          <div class="oiu3ioasdf-2nias-sdnifsd">
            <div class="iuqwioeidsf-anis-sdfnsdf">
              <p class="iquwe-2ni-qwisdf">Twoja Ocena:</p>
                <div class="uiquweoisnf-2nia-fsndifsd">
              <svg class="iqwue-2iw-qwjei" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#fdd017" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
              <svg class="iqwueoq-eniwef-sndif" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#fdd017" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
              <svg class="qiwue-2niqwe-nidf" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#fdd017" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
              <svg class="iqweo2-naiw-sdfniq-isf" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#fdd017" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
              <svg class="iqwueosdfnoisd-n2-sdf" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#fdd017" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
              </div>
            </div>
            <div class="oiweruiwensdf-sdfnisd0SF-insdf-NIWENFOSD">
              <p class="oiqwe-2nisdf-nio2asd">Co sądzisz o naszym kursie?</p>
        <form action="index.php" method="post">
    <input type="text" class="nosdf-sdfni2-asnfs-dvnxicf-dsfinsd" placeholder="Wpisz swoją opinię..." name="fieldname" id="fieldname">
    <button type="submit" class="nisdf-2niasd-9o1onsdf-snidf">Dodaj Opinię</button>
    </form>            
    </div>
    </div>
          </div>


          <?php
try {
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "users";
$conn = "";
$user = "";
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["fieldname"];
    }
    $sql = "INSERT INTO user_reviews (user_comment) VALUES ('$user')";
    mysqli_query($conn, $sql);

} catch(mysqli_sql_exception) {
   
}
mysqli_close($conn);
?>

        </div> 
      </div>
    </div>
      <div class="naisd-2niasd-2nias">
        <p class="iquwenisdf-2moasdkspdf">Yuify</p>
      <div class="nsdf2-asnisdf">
      <svg class="iqwuendif-2niawdsdfsniodfsdofnsdf" xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><path fill="#338668" d="M524.5 69.8a1.5 1.5 0 0 0 -.8-.7A485.1 485.1 0 0 0 404.1 32a1.8 1.8 0 0 0 -1.9 .9 337.5 337.5 0 0 0 -14.9 30.6 447.8 447.8 0 0 0 -134.4 0 309.5 309.5 0 0 0 -15.1-30.6 1.9 1.9 0 0 0 -1.9-.9A483.7 483.7 0 0 0 116.1 69.1a1.7 1.7 0 0 0 -.8 .7C39.1 183.7 18.2 294.7 28.4 404.4a2 2 0 0 0 .8 1.4A487.7 487.7 0 0 0 176 479.9a1.9 1.9 0 0 0 2.1-.7A348.2 348.2 0 0 0 208.1 430.4a1.9 1.9 0 0 0 -1-2.6 321.2 321.2 0 0 1 -45.9-21.9 1.9 1.9 0 0 1 -.2-3.1c3.1-2.3 6.2-4.7 9.1-7.1a1.8 1.8 0 0 1 1.9-.3c96.2 43.9 200.4 43.9 295.5 0a1.8 1.8 0 0 1 1.9 .2c2.9 2.4 6 4.9 9.1 7.2a1.9 1.9 0 0 1 -.2 3.1 301.4 301.4 0 0 1 -45.9 21.8 1.9 1.9 0 0 0 -1 2.6 391.1 391.1 0 0 0 30 48.8 1.9 1.9 0 0 0 2.1 .7A486 486 0 0 0 610.7 405.7a1.9 1.9 0 0 0 .8-1.4C623.7 277.6 590.9 167.5 524.5 69.8zM222.5 337.6c-29 0-52.8-26.6-52.8-59.2S193.1 219.1 222.5 219.1c29.7 0 53.3 26.8 52.8 59.2C275.3 311 251.9 337.6 222.5 337.6zm195.4 0c-29 0-52.8-26.6-52.8-59.2S388.4 219.1 417.9 219.1c29.7 0 53.3 26.8 52.8 59.2C470.7 311 447.5 337.6 417.9 337.6z"/></svg>
      <svg class="iqwuendif-2niawdsdfsniodfsdofnsdf" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path fill="#378668" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
      <svg class="iqwuendif-2niawdsdfsniodfsdofnsdf" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path fill="#338668" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
    </div>
    <div class="iouqweniasd-2noasnmdopndoifs">
      <p class="ioquwenisdf2-smdfoquwnsdf">Explore</p>
      <div class="iouqwenisdf-sdfjpoqnwioasd">
        <a class="poqwinsidf-sdnfisdf" href="index.php?page=home">Home</a>
        <a class="poqwinsidf-sdnfisdf" href="index.php?page=what is html">Html</a>
        <a class="poqwinsidf-sdnfisdf" href="index.php?page=what is css">Css</a>
        <a class="poqwinsidf-sdnfisdf" href="index.php?page=what is javascript">JavaScript</a>
        <a class="poqwinsidf-sdnfisdf" href="index.php?page=osidfsdjfop">Our Offerts</a>
      </div>
    </div>
    <div class="ouiqwendsf-2niaspdidsfinoasdf">
        <p class="ioquwenisdf2-smdfoquwnsdf">Contact</p>
        <div class="iouqwenisdf-sdfjpoqnwioasd">
          <a class="sdfiouqwnisd-niawoujsfj" href="mailto:yuify.help@gmail.com">Yuify.help@gmail.com</a>
        </div>
        <button id="scrollToTopButton" class="bzsa-sdni2-asdins-dfnosdf OIQWENSDF1-2NOSIDF-0QFNEOWDF">Top <span class="material-symbols-outlined">
expand_less
</span></button>
      </div>
    </div>    
    </div>
    </div>

    <!--End of Home page design-->

    <div class="asmnd-2naisd-cnivasdf">
      Front End
    </div>

      <div class="aoisdj2-niasd">
        404
      </div>
      <p class="mniaosd-2niasd-2niasd-2">Oops! Page not found</p>
      <a href="index.php?page=home">
      <button class="mnasd-2niasd-2niasd0">Home</button>
      </a>

      <!--HTML Introduction-->

      <p class="nkasdn02-asni2-naid-ajbsd">What is HTML?</p>
      <div class="zxcnzxc-20asdi2-saindasdf">
        Html is base for every website. For example the text you are reading right now is written in HTML. 
        You can use it to add headings, paragraphs, images or links. It's a basic page structure tool that helps browsers understand what we want our websites to look like.
        Html provides the basis for further development of websites and their styling using CSS (Cascading Style Sheets) and dynamic behavior with JavaScript.
      </div>

      <div class="bzxci2-asdi2-andi-ansid">
        Setup
      </div>
      <div class="nias-d2niasd2niasd-2niasd">
      <p class="nzmxc-2nasd-2naspd">
      To create your first website you need a code editor. These are the most popular ones: <br>
      </p>  
      &#x2022; <a href="https://code.visualstudio.com/">Visual Studio Code</a> <br>
        &#x2022; <a href="https://www.sublimetext.com/">Sublime Text</a> <br>
        &#x2022; <a href="https://www.jetbrains.com/webstorm/">Webstorm</a> <br> 
       <b><p class="nkasdn-2noasd-2oasd"> Which one is the best? </p></b> <br> 
        <p class="nbmzxc2-ad-2naisd-2niasd">
       Visual Studio Code is gaining popularity but choose the one that suits you best.
       </p> 
       <div class="mnoasd-2niasd-2nioasd-o2asd">
        .
       </div>
        <p class="nasd-2nisad-cvnizq-2w">If you choosed Visual Studio Code here are some extensions i recommend using:</p>
        &#x2022; Live Server <br>
        &#x2022; Prettier - Code formatter <br>
        &#x2022; HTML CSS Support <br>

        <b><p class="nmzoxc-2noasd-nicxv-2nioasd">How to add extensions to Visual Studio Code?</p></b> 
        <p class="nasdpnidg-as-sdfiap-sniasd">Go to View -> Extensions and enter the extension name or press Ctrl+Shift+X</p>
      </div>

      <div class="naisd-2ansidcvnwioejaopsd-qnasifnsdifoqw">

      </div>

      <div class="sidebar">

        <!--Do usuniecia-->
        <div class="a">
        <a href="index.php?page=html introduction">
        <div class="maods-sdfni2-anisdas">
          HTML - Introduction
        </div>   </a>

        <div class="naisd2-niasd-2niasdf03niasdf">
          &#x2022; Setup
        </div> 
        <a href="index.html?page=basics of document structure">
        <div class="maosd-2mniasd-2niasd">
        &#x2022; Basics of Document Structure
        </div>
        </a>
        <div class="naisd-2niadsf-2niasf02niasd">
        &#x2022; a
        </div>
        <div class="naisd-2niasf-2niafs0ni2q3d">
        &#x2022; a
        </div>
        <div class="niasd-2niasd-2niasdfnqioasd">
        &#x2022; a
        </div>
        <div class="asdin2-niodsf-qniasdn2asd">
        &#x2022; a
        </div>
        <div class="niasd-2nisdf-2niasdf-2niasd">
        &#x2022; a
        </div>
        <div class="niasd-2niosdf-2noiasd-2niasd">
        &#x2022; a
        </div>
        <div class="asdin20nsdf-2niasdni20asdfn">
        &#x2022; a
        </div>
        <div class="niasd-2niasd-2niasd-2niasd">
        &#x2022; a
        </div>
        <div class="andio2-nasd2nias-ni212oasd">
        &#x2022; a
        </div>
        <div class="sdinf23-nsidf-23nisdf">
        &#x2022; a
        </div>
        <div class="andi2-niaods-2nioasd">
        &#x2022; a
        </div>
      </div>
        <!--Do usuniecia-->


      </div>
      <div class="top">
        <img src="img.png" id="bjxcv-2nbasd-nasd" class="bxncv-2jkasd-2bnjaskdf" alt="Can't load">
        
        <a href="index.php?page=home">
        <div class="joisdf-sdafmno3-sdfno3">
          Home
        </div>
      </a>

        <div class="naisd-3niaosd-3niawsd-3nioasd">
          Guides
        </div>


        <!--Dodac link do Pricing-->


        <a href="index.php?page=">
        <div class="nioadsf-3nasd-3nas-dn3iasd">
          Pricing
        </div>
        </a>

        <span class="material-symbols-outlined nasid02iad-2iasd-2iasd">
          menu
          </span>

          <div class="naisd-2niasd-vnxicqaswoad">
          <span class="material-symbols-outlined niasd-2niasbndufg-qniasd-0sdfgin">
          language
          </span>
          </div>

          <div class="naisd-2nisa-sdn2af">
            <div class="xncivqw-asdno2a-sdnsdqw">English</div>
            <div class="nasd-2niafsbgdfa-dsjanifdjqw0jf">Polish</div>
          </div>


        <div class="nkxzc-bnmxzbxhcmv-asjd-asjd">
          <span class="material-symbols-outlined niasd-2niasd-2nasd-3niasd">
            dark_mode
            </span>
            <p class="shief-3iosdf-3nisdf-3">Theme</p>
        </div>

        <div class="niasd-2nisdf-3niasd-2niasd">
          .
        </div>

        <input type="text" class="nbiaosd-xcvkjaw-3nidsf-3nisdf">
        <span class="material-symbols-outlined bnxcv-32jzx-asd20asdiasd-nhoiafs">
          search
          </span>
      </div>
      <div class="page">
        

        <div class="nias-d2niasd-nicx-qwnifsad">
          <div class="niasd02nisa02-asbud2-asbdu">
            <span class="material-symbols-outlined iaosdho2-asdni2-asdin2-ansd">
              light_mode
              </span>
              <p class="naidfs2-naids-2niasd-2nidsf">Light Mode</p>
          </div>
          <div class="nasd-2niasd-2uasd">
            <span class="material-symbols-outlined asdnio2-asni2-df-21niasd-asdf">
              dark_mode
              </span>
              <p class="aodjsoj21-asjdoas-12jisad-2joasd">Dark Mode</p>
          </div>
        </div>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script src="index.js"></script>
<script src="language.js"></script>
</html>