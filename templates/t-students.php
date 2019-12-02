<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Pol</th>
                <th>#</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($student['id']); ?></td>
                    <td><?php echo htmlspecialchars($student['ime']); ?></td>
                    <td><?php echo htmlspecialchars($student['prezime']); ?></td>
                    <td><?php echo $student['pol'] === 'M' ? 'muski' : 'zenski'; ?></td>
                    <td>
                        <a href="/student.php?id=<?php echo htmlspecialchars($student['id']); ?>">
                            detaljnije
                        </a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>