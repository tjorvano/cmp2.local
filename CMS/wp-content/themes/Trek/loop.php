   <?php
            if(have_posts())
            {
                while(have_posts())
                {
                    the_post();
                    //Print the title and the content of the current post
                    the_content();
                    comment_form();             
                    }
            }
            else
            {
                echo 'Er is geen inhoud gevonden';
            }
            
?>