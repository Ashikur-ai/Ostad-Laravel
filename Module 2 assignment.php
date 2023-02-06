<?php
    $fee = 8000;
    
    $percent = (( $fee > 20000) ?.25:($fee > 10000 && $fee < 20000))?.20:(($fee > 7000 && $fee < 10000)?.15:"invalid");
    $commission = $fee*$percent;
    echo $commission;
?>
