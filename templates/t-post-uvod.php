<div class="container">
    <h1>Prijavi se na kurs</h1>
    <span style='color:red;'><?php echo htmlspecialchars($systemMessage); ?></span>

    <pre>
        <?php print_r($formData); ?>
        </pre>

    <pre>
        <?php print_r($formErrors); ?>
        </pre>
    <form action="/post-uvod.php?id=5" method="post">

        <div>
            <strong>Ime</strong>
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($formData['first_name']); ?>">
            <?php if (!empty($formErrors["first_name"])) { ?>
                <?php foreach ($formErrors["first_name"] as $errorMessage) { ?>
                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                <?php } ?>
            <?php } ?>
        </div>

        <div>
            <strong>Prezime</strong>
            <input type="text" name="last_name" value="<?php echo isset($formData["last_name"]) ? htmlspecialchars($formData["last_name"]) : ""; ?>">
            <?php if (!empty($formErrors["last_name"])) { ?>
                <?php foreach ($formErrors["last_name"] as $errorMessage) { ?>
                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                <?php } ?>
            <?php } ?>
        </div>

        <div>
            <strong>Pol</strong>
            <label>
                <input type="radio" name="gender" value="Z" <?php if (isset($formData["gender"]) && $formData["gender"] == "Z") { ?> checked="checked" <?php } ?>>
                Zenski
            </label>
            <label>
                <input type="radio" name="gender" value="M" <?php if (isset($formData["gender"]) && $formData["gender"] == "M") { ?> checked="checked" <?php } ?>>
                Muski
            </label>
            <?php if (!empty($formErrors["gender"])) { ?>
                <?php foreach ($formErrors["gender"] as $errorMessage) { ?>
                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                <?php } ?>
            <?php } ?>
        </div>

        <div>
            <strong>Kurs</strong>
            <select name="course">
                <option value="">--Izaberi---</option>
                <option value="php" <?php if ($formData['course'] == 'php') { ?> selected <?php } ?>>PHP
                </option>

                <option value="html_and_css" <?php if ($formData['course'] == 'html_and_css') { ?> selected <?php } ?>>HTML &amp; CSS
                </option>

                <option value="qa" <?php if ($formData['course'] == 'qa') { ?> selected <?php } ?>>Quality Assurance
                </option>
            </select>

            <?php if (!empty($formErrors["course"])) { ?>
                <?php foreach ($formErrors["course"] as $errorMessage) { ?>
                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                <?php } ?>
            <?php } ?>
        </div>

        <div>
            <strong>Termini koji odgovaraju</strong>
            <label>
                <input type="checkbox" value="9h" name="termin[]"> 09h-12h
            </label>
            <label>
                <input type="checkbox" value="13h" name="termin[]"> 13h-16h
            </label>
            <label>
                <input type="checkbox" value="17h" name="termin[]"> 17h-20h
            </label>
        </div>

        <div>
            <hr>
            <button type="submit">Prijavi se</button>
        </div>
    </form>
</div>