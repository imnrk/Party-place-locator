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
        
        </form>
      </div>
    </nav>
  </head>
  <body class="text-center" style="text-align: center;">
    <div class="col-sm-7" style="display: inline-block; padding: 150px">
      <form>
        <h1 class="h3 mb-3 font-weight-normal">Search results</h1>

<?php
include("mysqli_connect.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = mysqli_real_escape_string($db,$_POST['search']);
    $sql = "SELECT username,partyplace,comment FROM comments WHERE comment like '%$search%' or partyplace like '%$search%'";
    $result = mysqli_query($db,$sql);
    echo "<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">Username</th>
      <th scope=\"col\">Place</th>
      <th scope=\"col\">Post</th>
    </tr>
  </thead>
  <tbody>";
 
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
        </tr>
        ";
    }
    echo "</tbody>
    </table>";
}
?>
</form>
</div>
</body>