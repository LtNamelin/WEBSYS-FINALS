    <?php
        $title = $title ?? 'My Coffee';
    ?>
    
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title><?= esc($title)?></title>

        <style>
            :root
            {
                --dark-espresso: #4E342E;
                --espresso: #6F5853;
                --light-espresso: #917F7B;

                --dark-cappuccino: #A67B5B;
                --cappuccino: #B8947B;
                --light-cappuccino: #CAAE9B;

                --dark-latte: #DCC9BB;
                --latte: #E5D6CC;
                --light-latte: #EDE4DD;
            }
            
            /*espresso color */
            .color-dark-espresso
            {
                background-color: var(--dark-espresso);
            }

            .color-espresso
            {
                background-color: var(--espresso);
            }

            .color-light-espresso
            {
                background-color: var(--light-espresso);
            }
            
            /*espresso color text */
             .text-color-dark-espresso
            {
                color: var(--dark-espresso);
            }

             .text-color-espresso
            {
                color: var(--espresso);
            }

             .text-color-light-espresso
            {
                color: var(--light-espresso);
            }

            /*primary btn hover */
            .hover-primary:hover
            {
                background-color: var(--espresso);
                transition: background-color 0.5s ease, transform 0.5s ease;
                transform: scale(1.02);
            }

            /*cappuccino color */
            .color-dark-cappuccino
            {
                background-color: var(--dark-cappuccino);
            }

            .color-cappuccino
            {
                background-color: var(--cappuccino);
            }

            .color-light-cappuccino
            {
                background-color: var(--light-cappuccino);
            }

            /*cappuccino color text */
             .text-color-dark-cappuccino
            {
                color: var(--dark-cappuccino);
            }

             .text-color-cappuccino
            {
                color: var(--cappuccino);
            }

             .text-color-light-cappuccino
            {
                color: var(--light-cappuccino);
            }

            /*secondary btn hover */
            .hover-secondary:hover
            {
                background-color: var(--cappuccino);
                transition: background-color 0.5s ease, transform 0.5s ease;
                transform: scale(1.02);
            }

            /*border btn*/
            .border-btn
            {
                border-color:  var(--dark-cappuccino);
                border-width: 3px;
                color: var(--dark-cappuccino);
            }

            .border-btn-disable
            {
                border-color:  #4a5565;
                border-width: 3px;
                color: #4a5565;
            }

            /*border btn hover */
            .hover-border:hover
            {
                background-color: var(--light-latte);
                transition: background-color 0.5s ease, transform 0.5s ease;
                transform: scale(1.02);
            }

            /*latte color */
            .color-dark-latte
            {
                background-color: var(--dark-latte);
            }

            .color-latte
            {
                background-color: var(--latte);
            }

            .color-light-latte
            {
                background-color: var(--light-latte);
            }

            /*latte color text */
             .text-color-dark-latte
            {
                color: var(--dark-latte);
            }

             .text-color-latte
            {
                color: var(--latte);
            }

             .text-color-light-latte
            {
                color: var(--light-latte);
            }
        </style>
    </head>
