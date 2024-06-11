<?php

// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }

// Check if the 'user' session variable is set
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    if (is_array($user) && count($user) > 0 && isset($user[0])) {
        echo "<li><a href='account'>" . htmlspecialchars($user[0]['fname']) . "</a></li>
              <li><a href='../actions/logout-user.php'>Logout</a></li>";
    } else {
        // CHECK :: Update here
        echo '<li><a href="#">Login +</a>
                  <ul>
                      <li><a href="login">Login</a></li>
                      <li><a href="register">Register</a></li>
                  </ul>
              </li>';
    }
} else {
        // CHECK :: Update here

    echo '<li><a href="#">Login +</a>
              <ul>
                  <li><a href="login">Login</a></li>
                  <li><a href="register">Register</a></li>
              </ul>
          </li>';
}
