<!DOCTYPE HTML>
<html>
    <head>
        
    </head>
    
    <body>
        
        <table>
            <?php foreach ($designation as $positions): ?>
            <tr>
                <td>
                    <?=$positions->Id?>
                </td>
                <td>
                    <?=$positions->Value?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
     
        
    </body>
</html>