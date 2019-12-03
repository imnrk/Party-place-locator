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
<h1 class="h3 mb-3 font-weight-normal">Some posts</h1>
<div class="col-sm-8" style="display: inline-block; padding: 50px">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Place</th>
      <th scope="col">Post</th>
      <th scope="col">Upvote</th>
      <th scope="col">Favorite place</th>
    </tr>
  </thead>
  <tbody>
  <?php
include("mysqli_connect.php");
session_start();
$sql = "SELECT username,partyplace,comment FROM comments";
$result = mysqli_query($db,$sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>";
    echo $row['username'];
    echo "
    </td>
    <td>
    ";
    echo $row['partyplace'];
    echo "
    </td>
    <td>";
    echo $row['comment'];
    echo "
    </td>
    <td>";
    $comment=$row['comment'];
    $partyplace=$row['partyplace'];
    echo "<form action=\"vote.php\" method=\"POST\">";
    echo "<input type=\"hidden\" value=\"$comment\" name=\"hidden\"></input><input type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\" name=\"submit\" value=\"Upvote\">
    </input></form>";
    echo "
    </td><td>";
    echo "<form action=\"favorite.php\" method=\"POST\">";
    echo "<input type=\"hidden\" value=\"$partyplace\" name=\"hidden\"></input><input type=\"submit\" class=\"btn btn-outline-success my-2 my-sm-0\" name=\"favorite\" value=\"Favorite?\">
    </input></form>";
    echo "
    </td>
    </tr>
    ";
    
    }

?>
  </tbody>
</table>
</div>
</body>
</html>

