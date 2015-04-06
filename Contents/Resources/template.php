<!-- Create header for display in editor -->
%[if edit]% <h1 class="headIfB">IF : </h1> %[endif]%

<!-- Create collapsable div for organization in editor -->
%[if edit]% <div class="colB"> %[endif]%

<!-- Start PHP -->
<?php

    // Start if statement and put corresponding ID from UI inside (...)
    if (%id=phpCode_If%) {
        
        // Check if the user wants to drop in a stack
        %[if %("%id=phpOrSlice%" == "true")%]%
        
            ?>
                <!-- %slice% symbolizes a stack drop in -->
                %slice%
                
            <?php
        
        %[else]%
            
            // encase user's PHP, default for RapidWeaver Stacks is to use the %html% command
            %html=" "%
            
        %[endif]%
        
    }

?>
<!-- End PHP -->

<!-- Close collapsable div for organization in editor -->
%[if edit]% </div> %[endif]%

<!-- See --><a>https://yourhead.tenderapp.com/kb/stacks-api/</a><!-- for more information about developing stacks for RapidWeaver -->