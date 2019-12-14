<?php
/*
    Flash Messages

    in order to disploay a flash message we use:
           $this->addFlash(
            'notice',
            'Your Changes were saved'
        );

    in the twig tempalte we do:

        {% for message in app.flashes('notice')%}
            <div class="flash-message">
                {{ message }}
            </div>
        {% endfor%}
    
    
*/
