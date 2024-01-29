<?php
    /**
     * Dit is de Core-Class
     */
    Class Core
    {

        /**
         * Dit is de constructor van de Core-Class
         */
        public function __construct()
        {
            if (isset($_GET['url'])) {
                // Haal de backslash vooraan de url eraf
                $url = rtrim($_GET['url'], '/');

                // Maak de url schoon van html-tags double-quotes enz..
                $url = filter_var($url, FILTER_SANITIZE_URL);

                // Zet de string gescheiden door / in een array
                $url = explode('/', $url);
            } else {
                /**
                 * Wanneer er niets achter de vhost-naam wordt gezet
                 * dan wordt het onderstaande array in $url gezet
                 */
                $url = array('homepages', 'index');
            }
            //var_dump($url);
        }
    }