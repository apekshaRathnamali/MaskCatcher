<?php
shell_exec('C:\xampp\htdocs\Face-mask-catcher/');
$output= shell_exec('python -u "C:\xampp\htdocs\Face-mask-catcher/detect_mask_video.py"');
print($output);
?>
