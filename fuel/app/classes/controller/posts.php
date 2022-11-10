<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Posts extends Controller_Template
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{   
		$posts = Model_Posts::find('all');
		$data = array('posts' => $posts);
		$this->template->title = "Posts Index page";
		$this->template->content = View::forge('posts/index',$data,false);
		//return Response::forge(View::forge('home/index'));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_add()
	{
		$data = array();
		$this->template->title = "Posts add page";
		$this->template->content = View::forge('posts/add',$data);
		
		//return Response::forge(Presenter::forge('mypages/intro'));
	}

		/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_view($id)
	{
		// echo "@@@@@@@@@@@@@@";
		$post = Model_Posts::find('first',array(
			'where'=> array('id' => $id)
		));

		$data = array('post' => $post);
		$this->template->title = "Posts view page";
		$this->template->content = View::forge('posts/view',$data,false);
		
		//return Response::forge(Presenter::forge('mypages/intro'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{   echo "Posts 404";
		//return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
