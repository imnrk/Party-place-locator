<html>
  <head>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="logout.php">Logout</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="welcome.html"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addcomment.html">Add a post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewcomments.php">View posts</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="dashboard.php">Dashboard</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="suggestions.php">Suggestions</a>
          </li>
        </ul>
      </div>
    </nav>
  </head>
  
        <body class="text-center" style="text-align: center;">
        <br />
                <h1 class="h3 mb-3 font-weight-normal">My Dashboard</h1>
                <div class="col-sm-8" style="display: inline-block; padding: 50px">
                
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Statistic</th>
                    <th scope="col">Value</th>
                    
                    </tr>
                </thead>

                  <tbody>
                        <?php
                        include("mysqli_connect.php");
                        session_start();
                        $user=$_SESSION['login_user'];
                        $sql = "SELECT username FROM comments where username='$user'";
                        
                        $result = mysqli_query($db,$sql);
                        // printf ("%s (%s)\n", $row['username'], $row['comment']);
                        $count = mysqli_num_rows($result);

                        echo "<tr>
                        <td>";
                        echo "Number of posts by you";
                        echo "
                        </td><td>";
                        echo "$count</td></tr>";

                        $sql1="SELECT comment,Likes from comments where Likes = (SELECT MAX(Likes) from comments where username='$user') and username='$user'                        ";
                        $result1 = mysqli_query($db,$sql1);
                        $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
                        $mostliked=$row['comment'];
                        $likes=$row['Likes'];
                        echo "<tr>
                        <td>";
                        echo "Your top voted post($likes votes)";
                        echo "
                        </td><td>";
                        echo "$mostliked</td></tr>";

                        $sql2="SELECT comment,Likes from comments where Likes = (SELECT MAX(Likes) from comments )";
                        $result2 = mysqli_query($db,$sql2);
                        $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                        $mostliked2=$row2['comment'];
                        $likes2=$row2['Likes'];
                        echo "<tr>
                        <td>";
                        echo "Top voted post($likes2 votes)";
                        echo "
                        </td><td>";
                        echo "$mostliked2</td></tr>";
                        ?>
                    </tbody>
            </table>
         </div>
    </body>
</html>
                        
        
