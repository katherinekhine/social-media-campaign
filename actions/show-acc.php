 <?php
    // session_start();

    // Check if the 'user' session variable is set
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];

        if (is_array($user) && count($user) > 0 && isset($user[0])) {
            echo "<li><a href='../api/account.php'>" . $user[0]['fname'] . "</a></li>
                            <li><a href='./../actions/logout-user.php'>Logout</a></li>";
        } else {
            echo '<li><a href="#">Login +</a>
                        <ul>
                            <li><a href="../api/loginform">Login</a></li>
                            <li><a href="../api/registerform">Register</a></li>
                        </ul>
                    </li>';
        }
    } else {
        echo '<li><a href="#">Login +</a>
                    <ul>
                        <li><a href="../api/loginform">Login</a></li>
                        <li><a href="../api/registerform">Register</a></li>
                    </ul>
                </li>';
    }
    ?>