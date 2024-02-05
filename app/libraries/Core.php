<?php
    /**
     * Dit is de Core-Class
     */
    Class Core
    {
        protected $currentController;
        protected $currentMethod;
        protected $params;

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
            var_dump($url);

            /**
             * Check of de controller bestaat
             */
            if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {

                /**
                 * Zet dan de naam van de controller in currentController
                 */
                $this->currentController = ucwords($url[0]);

                /**
                 * Zet de controllernaam uit het array
                 */
                unset($url[0]);
            }

            /**
             * Include de controller op deze pagina
             */
            require_once '../app/controllers/' . $this->currentController . '.php';

            /**
             * Maak een nieuwe controller-object van deze class
             */
            $this->currentController = new $this->currentController();

            /**
             * Kijk of er een tweede naam in de url staat.
             */
            if (isset($url[1])) {
                
                /**
                 * Kijk of de methodnaam bestaat in de controller class.
                 */
                if (method_exists($this->currentController, $url[1])) {

                    /**
                     * Als dit zo is dan deze naam in de variabele currentMethod zetten.
                     */
                    $this->currentMethod = $url[1];

                    /**
                     * Haal deze methodnaam uit het array. We houden nu alleen nog maar 
                     * parameters over in de url-naam
                     */
                    unset($url[1]);
                }
            }

            /**
             * Stop de rest van de urlnamen in een apart array
             * params
             */
            $this->params = $url ? array_values($url): [];

            /**
             * Roep nu de method aan met de betreffende method en de bijbehorende parameters
             */
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }
    }