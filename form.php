<form action="data.php" method="post">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required>
    <br>
    <br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>
    <br>
    <br>

    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="4"></textarea>
    <br>
    <br>

    <label for="country">Country:</label>
    <select id="country" name="country" required>
        <option value="">Select..</option>
        <option value="Egypt">Egypt</option>
        <option value="Dubai">Dubai</option>
    </select>
    <br>
    <br>

    <label for="genders">Gender:</label>
    <?php
    $genders = array("male","female");
    foreach ($genders as $gender){
        echo "<input type='checkbox' id='gender_{$gender}' name='genders[]' value='{$gender}'>";
        echo "<label for='gender_{$gender}'>{$gender}</label><br>";

    }
    ?>
    </select>
    <br>



    <label for="skills">Skills:</label>
    <br>
    <?php
    // Define an array of available skills
    $skills = array("PHP", "HTML", "CSS", "JavaScript");

    // Loop through each skill and generate a checkbox
    foreach ($skills as $skill) {
        echo "<input type='checkbox' id='skill_{$skill}' name='skills[]' value='{$skill}'>";
        echo "<label for='skill_{$skill}'>{$skill}</label><br>";
    }
    ?>

    <input type="submit" value="Submit">
</form>