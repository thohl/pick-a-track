<?php

class UserController extends BaseController {

	public function getIndex()
	{
		return "Users (via getIndex method in the UserController)!";
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
