<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>">

</head>

<body>
    <div class="reg-body">
        <div class="reg-container">
            <div class="reg-title">
                Registration Form
            </div>
            <form action="../actions/create-user.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name:</span>
                        <input type="text" placeholder="Enter Your First Name" name="fname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name:</span>
                        <input type="text" placeholder="Enter Your Last Name" name="lname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email:</span>
                        <input type="email" placeholder="Enter Your Email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number:</span>
                        <input type="tel" placeholder=" Enter Your Phone Number" name="phone" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password:</span>
                        <input type="password" placeholder="Enter Your Password" name="password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password:</span>
                        <input type="password" placeholder="Confirm Password" name="conpassword" required>
                    </div>
                </div>
                <div class="country">
                    <span class="details">Country:</span>
                    <select name="country">
                        <option value='0'> --- Choose your country --- </option>
                        <?php
                        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                        foreach ($countries as $value) {
                            echo "<option value='$value'>$value</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="gender">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <div class="gender-radio"><input type="radio" name="gender" value="Male">Male</div>
                        <div class="gender-radio"><input type="radio" name="gender" value="Female">Female</div>
                        <div class="gender-radio"> <input type="radio" name="gender" value="Prefer not to say">Prefer not to say</div>
                    </div>
                </div>

                <div class="reg-button">
                    <input type="submit" value="Register">
                </div>
                <div class="login-link">
                    <p>Already Have an Account? <a href="loginform">Login</a> </p>
                </div>
            </form>
        </div>
    </div>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>