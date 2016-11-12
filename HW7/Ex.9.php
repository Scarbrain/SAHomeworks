<?php
$a = 55;
$f = new NumberFormatter("en-US", NumberFormatter::SPELLOUT);
//echo $f->format(1432);

echo $f->format($a);