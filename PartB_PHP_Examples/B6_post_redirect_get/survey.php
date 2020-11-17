<?php
require_once "../../common/functions_defs.php";
$title = "Part B6 -- Survey & redirect";
require_once "../../common/header.php";

$name_error = $email_error = $satisfaction_error = "";
$name = $email = $satisfaction = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    validate_name($name, $name_error);
    validate_email($email, $email_error);
    validate_satisfaction($satisfaction, $satisfaction_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" || $name_error || $email_error || $satisfaction_error) {
    ?>
    <form action="survey.php" method="post">
        <label>Name <input type="text" name="name" value="<?php echo $name; ?>" required>
            <span class="error"><?php echo $name_error; ?></span>
        </label><br>
        <label>Email <input type="email" name="email" value="<?php echo $email; ?>" required>
            <span class="error"><?php echo $email_error; ?></span>
        </label><br>
        <label>Are you satisfied with your purchase?<br>
            <label><input type="radio" name="satisfaction" value="very" checked="checked" required>Very satisfied</label>
            <label><input type="radio" name="satisfaction" value="somewhat" required>Somewhat satisfied</label>
            <label><input type="radio" name="satisfaction" value="not" required>Not satisfied</label>
            <span class="error"><?php echo $satisfaction_error; ?></span>
        </label><br><br>
        <button type="submit">Send</button>
    </form>
    <?php
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $survey_file = fopen("survey.csv", "a") or die("Unable to open file!");
        fputcsv($survey_file, array($name, $email, $satisfaction));
        fclose($survey_file);
        header("Location: survey_recorded.php");
    }
}
require_once "../../common/footer.php";
?>
