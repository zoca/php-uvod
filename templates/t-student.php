<div class="container">
    <h1>Informacije o studentu</h1>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>ID:</th>
                <td><?php echo htmlspecialchars($student['id']); ?></td>
            </tr>
            <tr>
                <th>Ime:</th>
                <td><?php echo htmlspecialchars($student['ime']); ?></td>
            </tr>
            <tr>
                <th>Prezime:</th>
                <td><?php echo htmlspecialchars($student['prezime']); ?></td>
            </tr>
            <tr>
                <th>Pol:</th>
                <td><?php echo $student['pol'] === 'M' ? 'muski' : 'zenski'; ?></td>
            </tr>
        </tbody>
    </table>
</div>