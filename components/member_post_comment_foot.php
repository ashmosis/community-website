<div class="row bootstrap snippets">
    <div class="col-md-6 col-md-offset-2 col-sm-12">
        <div class="comment-wrapper" id="commentDisplay">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Member Comments
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="panel-body">
                    <textarea class="form-control" name="comment" id="comment" maxlength="2000" required="true" placeholder="write a comment..." rows="3"></textarea>
                    <br>
                    <button type="submit" value="Submit" class="btn btn-info pull-right">Post</button>
                    <div class="clearfix"></div>
                    <hr>
                    <ul class="media-list">
                      <?php
                      $sql = "SELECT m.username, p.created_at, p.comment_text FROM membership m JOIN post_comments p ON m.id = p.comment_member_id WHERE p.post_id = ".$post_id." LIMIT 100";
                        if($result = $mysqli->query($sql)){
                          while ($row = $result->fetch_object()){
                            echo "<li class='media'>";
                            echo "<a href='#' class='pull-left'>";
                            echo "<img src='/Resources/Images/vsblacklogo.png' alt='avitar' class='img-circle'></a>";
                            echo "<div class='media-body'>";
                            echo "<span class='text-muted pull-right'>";
                            echo "<small class='text-muted'>".$row->created_at."</small>";
                            echo "</span>";
                            echo "<strong class='text-success'>".$row->username."</strong>";
                            echo "<p>".$row->comment_text."</p>";
                            echo "</div>";
                            echo "</li>";
                          }
                        }else{
                            die($result->error);
                        }
                    ?>
                    </ul>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

<?php require_once "/var/www/components/htmlfoot.html"; ?>
