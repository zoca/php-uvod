<?php
session_start();

function isJMBGValid($jmbg)
{
    return false;
}

$systemMessage = '';

$jmbg = '';

if (!empty($_POST['task']) && $_POST['task'] == 'check_jmbg') {

    if (isset($_POST['jmbg'])) {
        $jmbg = $_POST['jmbg'];

        if (isJMBGValid($jmbg)) {
            $systemMessage = 'JMBG je validan';
        } else {
            $systemMessage = 'JMBG nije validan';
        }
    } else {
        $systemMessage ='morate da prosledite JMBG';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Proverite vas JMBG</h1>
    <form action="" method="post">
        <label for="">JMBG:</label>
        <input required type="text" name="jmbg" value="<?php echo htmlspecialchars($jmbg); ?>">
        <br>
        <?php if (!empty($systemMessage)) {  ?>
            <strong><?php echo htmlspecialchars($systemMessage); ?></strong>
            <br>
        <?php } ?>
        <button type="submit" name="task" value="check_jmbg">Proveri</button>
    </form>
</body>

</html>