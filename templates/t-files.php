<div class="container">
    <h2>Upload your homework</h2>
    <div class="text-success"><?php echo htmlspecialchars($systemMessage); ?></div>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Student name:</label>
            <input type="text" name="student" class="form-control">
        </div>

        <div class="form-group">
            <label>Choose File to upload</label>
            <input type="file" name="homework" class="form-control">
            <?php if (!empty($formErrors['homework'])) { ?>
                <?php foreach ($formErrors['homework'] as $errorMessage) { ?>
                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="form-group">
            <button type="submit">Upload</button>
        </div>
    </form>
    <h2>All aploaded files</h2>

    <table class="table table-striped">
        <thead>
            <th>File name</th>
            <th>Size</th>
            <th>Type</th>
            <th>#</th>
        </thead>
        <tbody>
            <?php foreach ($uploadedFiles as $uploadedFile) { ?>
                <?php if ($uploadedFile == '.' || $uploadedFile ==  '..') {
                        continue;
                    }

                    $uploadedFilePath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $uploadedFile;

                    if (is_dir($uploadedFilePath)) { // funkcije za rad sa file sistemom rade sa punim putanjama
                        continue;
                    }

                    $uploadedFileMime = mime_content_type($uploadedFilePath);
                    $uploadedFileSize = round(filesize($uploadedFilePath) / 1024 / 1024, 2);

                    ?>
                <tr>
                    <td><?php echo htmlspecialchars($uploadedFile); ?></td>
                    <td class="text-right"><?php echo htmlspecialchars($uploadedFileSize); ?> MB</td>
                    <td><?php echo htmlspecialchars($uploadedFileMime); ?></td>
                    <td>
                        <a href="/uploads/<?php echo htmlspecialchars($uploadedFile); ?>" download>
                            download
                        </a>
                        <!--dodajem atribut download ako ne zelim da mi brouser otvori fajl za dovnload nego samo da ga downloaduje -->
                    </td>
                <?php  } ?>
        </tbody>
    </table>
</div>