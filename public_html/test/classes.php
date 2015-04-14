<?

////////////////////////  interface defining set of methods /////////////////////////////
interface page_driver {
	function list_orders();
	function check_user_authorization();
	function handle_page_data();
	function page_render();
}

/////////////////////////////////////// class that defines general methods for handling the page  //////////////////
class basic_page_handler{
	protected $error;
	protected $renderer;
	protected $methods;
	
	
	function __construct() {
		// here we make init, db connect, load conf. and translator files etc.
	}
	
	function set_basic_methods(){
		$this->methods = array('check_user_authorization','handle_page_data','page_render');
		return $this->methods;
	}
	
	function check_authorization (){
		// autorization and permissions check
	}
	function handle_data() {
		// here we load necessary data from DB, make all preparation before sending data to page
	}
	
	function handle_post(){
		// here we process post requests usually called inside handle_data
	}
	
	
	function render (){
		// here we read html template and put into it necessary server data
		$this->renderer = new renderer();
		//some code here
	}
}


////////////////////class that processes different page elements  ////////////////////////////////////
class renderer {
	
	function header_render(){
		
	}

	function footer_render(){
		
	}	
	function simple_render(){
		
	}
	function form_render(){
		
	}
}

/////////////////////////  Album Class //////////////////////////////
class album extends basic_page_handler implements page_driver {
	function __construct() {
		parent::__construct();
		//some code....
	}
	function list_orders(){
		parent::set_basic_methods();
		//some code here...
		return $this->methods;
	}
	
	function check_user_authorization(){
		$this->check_authorization();
	}
	
	function handle_page_data(){
		$this->handle_data();
	}
	
	
	function handle_data() {
		if (count($_POST)>0){
			$this->handle_post();
		}
		parent::handle_data();
		$this->process_form_data();
	}
	
	function handle_post(){
		// some code....
	}
	
	function process_form_data (){
		//some code....
	}
	function page_render(){
		$this->render();
	}
	function render (){
		parent::render();
		$this->renderer->header_render();
		$this->renderer->form_render();
		$this->renderer->footer_render();
	}
}
///////////////////////// Page Creator Class  //////////////////////////////
class page_creator {
	public $page_obj;
	public $method_list;
	function __construct($obj_name) {
		$this->page_obj = new $obj_name();
	}	
	function get_methods(){
		$this->method_list = $this->page_obj->list_orders();
	}
	function apply_methods(){
		if (is_array($this->method_list))
		foreach ($this->method_list as $method){
			$status = $this->page_obj->$method();
			if($status){
				// some error handling	
				return ;
			}
		}
	}
	
}//class

///////////////////////////////////////////////////////////////
$page = new page_creator('album');
$page->get_methods();
$page->apply_methods();

?>