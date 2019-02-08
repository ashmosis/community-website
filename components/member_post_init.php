<?php
    session_start();
    //Redirect if the user is not logged in
    if(!isset($_SESSION['login_user'])){
        header('Location: /members_area.php');
    }
    require_once "/var/www/scripts/dbConfig.php";

    //Get the id of the user for use with comments
    if($stmt = $mysqli->prepare("SELECT id FROM membership WHERE username = ?")){
        $stmt->bind_param("s", $param_username);
        $param_username = strtolower($_SESSION['login_user']);
        if($stmt->execute()){
          $result = $stmt->get_result();
            $user = $result->fetch_object();
            $uid = $user->id;
        }else{
            $error = $stmt->error;
            $stmt->close();
            die($error);
        }
    }
    //get the post_id
    $sql = "SELECT post_id FROM member_posts WHERE post_location = '".$_SERVER['REQUEST_URI']."'";
    if($result = $mysqli->query($sql)){
      $post_id = $result->fetch_object()->post_id;
    }else{
      die("Something went wrong!: ".$mysqli->error. " SQL: ".$sql);
    }
    //Insert the posted back comment to the database if it exists
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(isset($_POST['comment']) && !empty($_POST['comment'] && strlen($_POST['comment'])<2000)){
          $sql = "INSERT INTO post_comments (post_id, comment_member_id, comment_text) VALUES (?, ?, ?)";

          if($stmt = $mysqli->prepare($sql)){
              // Bind variables to the prepared statement as parameters
              $stmt->bind_param("iis", $param_postid, $param_member_id, $param_comment_text);

              // Set parameters
              $param_postid = $post_id;
              $param_member_id = $uid;
              $param_comment_text = htmlspecialchars($_POST['comment']);

              // Attempt to execute the prepared statement
              if(!$stmt->execute()){
                  die($stmt->error);
              }
              // Close statement
              $stmt->close();
          }else{
            die("Something went wrong. Please try again later.");
          }
      }else{
        die("session not set");
      }

    }
    require_once "/var/www/components/htmlheadsignedin.html";
?>
