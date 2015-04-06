%[if edit]% <h1 class="headIfB">IF : </h1> %[endif]%
%[if edit]% <div class="colB"> %[endif]%
<?php

    if (%id=phpCode_If%) {
        %[if %("%id=phpOrSlice%" == "true")%]%
        ?>
            %slice%
        <?php
        %[else]%
            %html=" "%
        %[endif]%
    }
?>
%[if edit]% </div> %[endif]%