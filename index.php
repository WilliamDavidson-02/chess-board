<?php 
$alphabetRow = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
$numbersRow = ['8', '7', '6', '5', '4', '3', '2', '1'];
require_once __DIR__ . '/chessPieces.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/chess-board-svgrepo-com.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Chess Board</title>
</head>
<body>
    <table>
        <?php for ($row=0; $row < 10; $row++): ?>
            <tr>
            <?php for ($column=0; $column < 10; $column++): 
                if ($row != 0 && $row != 9 && $column != 0 && $column != 9): ?>
                <td class="chess-piece <?php echo (($row + $column) % 2 == 0) ? 'dark-square' : 'light-square'; ?>">
                    <?php 
                        $coordinates = $alphabetRow[$column - 1] . $numbersRow[$row-1];
                        if ($row == 1 || $row == 2) {
                            echo $darkUnicodePieces[$coordinates];
                        } else if ($row == 7 || $row == 8) {
                            echo $lightUnicodePieces[$coordinates];
                        } 
                    ?>
                </td>    
                    <?php else: ?>
                    <?php if ($row == 0 && $column == 0 || $row == 0 && $column == 9 || $row == 9 && $column == 0 || $row == 9 && $column == 9): ?>
                        <td></td>    
                    <?php else: ?>
                        <td class="side-character"><?php echo ($row == 0 || $row == 9) ? $alphabetRow[$column - 1] : $numbersRow[$row-1] ?></td>    
                    <?php endif; ?>
                <?php endif; ?>
            <?php endfor ; ?>
            </tr>
        <?php endfor ; ?>
    </table>
</body>
</html>