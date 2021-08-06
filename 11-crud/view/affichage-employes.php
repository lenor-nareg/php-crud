<?php
// echo '<pre> ';
// print_r($data);
// echo '</pre> ';
?>

<table class="table table-bordered text-center">
    <?php foreach($data as $dataEmploye): ?>
        <tr>
            <td><?= implode('</td><td>', $dataEmploye); ?></td>
                
            
        </tr>
    <?php endforeach ?>


    
    
</table>