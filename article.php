<?php
if (isset($_COOKIE['admin'])) { // cookie code
                                // connect to db
    include 'connect-to-db.php';

    if ($res = $mysqli->query("SELECT imageurl, title, comment, date, idphoto FROM photo ORDER BY idphoto DESC;")) {
        if ($res->data_seek(0)) {
            while ($row = $res->fetch_assoc()) {
                // ARTICLE STARTS HERE
                echo '<article style="width:85%;margin:auto;">
                        <div class="article-nav">';
                // replace date with username after login.php is done: $row['username']
                echo "<div><ul><li class='fa fa-user-circle fa-lg'></li><li>" . $row['date'] . "<li></ul></div>";
                echo '
                            <div>
                                <ul>
                                    <li class="fa fa-ellipsis-h fa-lg"></li>
                                </ul>
                            </div>
                        </div>
                
                        <div>
                ';
                echo '<img width="100%" src="uploads/' . $row['imageurl'] . '">
                    </div>
                        <div class="article-nav">
                            <div>
                                <ul>
                                ';
                echo "
					<li><a href=\"edit.php?id=" . $row['idphoto'] . "\"class='fa fa-edit fa-lg'></a></li>
					<li><a href=\"delete.php?id=" . $row['idphoto'] . "\"class='fa fa-trash fa-lg'></a></li>
					<li class='fa fa-share-alt fa-lg'></li>
					";
                echo "
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li class='fa fa-bookmark-o fa-lg'></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                ";
                echo "<div>" . $row['title'] . "</div>";
                echo "<i style='font-size:0.7em;'><br>posted on " . $row['date'] . "</i>";
                // code for comment bar
                echo "<div><i style='font-size:0.7em;'>Comments:" . $row['comment'] . "</i></div>";
                echo '<hr>
                        <div>
                            <form action="add-comment.php?id=' . $row['idphoto'] . '" method="post" enctype="multipart/form-data" autocomplete="off" >
                                <ul id="comment">
                                    <li style="width:5%"  class="fa fa-smile-o fa-2x"></li>
                                    <li style="width:75%"><input type="text" name="comment" value="Add a comment..." onfocus=this.value="" style="padding-top:10px; padding-bottom:10px; margin:0px; width:100%;"></input></li>
                                    <li style="width:15%"><input type="submit" value="Comment" name="submit" style="border:none;"></li>
                                </ul>
                            </form>
                        </div>
                    </article>
                    <br>
                ';
                // ARTICLE ENDS HERE
            } // end of while loop
        } else {
            echo "<div class='status'>You haven't posted anything yet</div>";
        }
    } else {
        echo "<div class='status'>Query error: please contact your system adminstrator.</div>";
    }
} else { // cookie code
    echo "<div class='status'>You must log in to view this page</div>"; // cookie code
} // cookie code
?>