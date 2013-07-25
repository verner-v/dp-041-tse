<?php defined('SYSPATH') or die('No direct script access.');
	   
class Controller_Template_Defcntr extends Controller_Template
{
     public $template = 'templates/layout';
     //public $layout = 'templates/mainlayou1t';
     //public $template = 'layout';
 
      // Controls access for the whole controller, if not set to FALSE we will only allow user roles specified
      // Can be set to a string or an array, for example 'login' or array('login', 'admin')
      // Note that in second(array) example, user must have both 'login' AND 'admin' roles set in database
    //  public $auth_required = FALSE;
 
      // Controls access for separate actions
      // 'adminpanel' => 'admin' will only allow users with the role admin to access action_adminpanel
      // 'moderatorpanel' => array('login', 'moderator') will only allow users with the roles login and moderator to access action_moderatorpanel
      //public $secure_actions = FALSE;
 
 
      /**
       * The before() method is called before your controller action.
       * In our template controller we override this method so that we can
       * set up default values. These variables are then available to our
       * controllers if they need to be modified.
       */
      public function before()
      {
        parent::before();
		
  	    if ($this->auto_render)
  	    {
  	    	  // Initialize empty values
            $this->template->title            = '';
            $this->template->meta_keywords    = '';
            $this->template->meta_description = '';
            $this->template->meta_copywrite   = '';
            $this->template->header           = View::factory('blocks/header')->render();
            $this->template->subheader        = '';
            $this->template->errors			  = '';
            $this->template->success		  = '';
            $this->template->sidebar		  = '';//View::factory('blocks/product/sidebar')->render();
            $this->template->content          = '';
            $this->template->footer           = View::factory('blocks/footer')->render();
            $this->template->styles           = array();
            $this->template->scripts          = array();   
 
          }
      }
     
      		 
     /**
      * Fill in default values for our properties before rendering the output.
      */
     public function after()
      {
         if($this->auto_render)
          {
             // Define defaults
          	 $styles = array(
          	 		'assets/css/bootstrap.css' => 'screen',
          	 		'assets/css/style.css' => 'screen',
          	 		'assets/css/bootstrap-datetimepicker.min.css' => 'screen',
          	 		
          	 		);

             $scripts = array(
             		'assets/js/jqtest.js',
             		'assets/js/common.js',
             		'assets/js/added.js',
             		'assets/js/bootstrap-datetimepicker.min.js',
             		'assets/js/bootstrap.js',
             		'assets/js/jquery-ui-1.9.2.custom.js',
             		'assets/js/jquery-1.8.3.js',
             		);
             
             // Add defaults to template variables.
             $this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));
             $this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
           }

         // Run anything that needs to run after this.
         parent::after();
      }
 }