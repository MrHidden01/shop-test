<?php
echo Html::start_div('head','style="border-radius: 3px; float: left; margin-top: 10px;margin-left: 10px"');
echo Html::space();
echo Html::a(Url::createFrontUrl('Register/register.php'),'ثبت نام');
echo Html::space();
echo '<span style="color: #2aabd2">|</span>';
echo Html::space();
echo Html::a(Url::createFrontUrl('Register/login.php'),'ورود');
echo Html::end_div();
?>
