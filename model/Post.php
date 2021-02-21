
<?php
require_once("Manager.php");

class Post extends Manager
{
	protected $_id;
	protected $_title;
	protected $_content;
	protected $_date_creation_fr;



	public function hydrate(array $data)
	{
		foreach ($data as $key=>$value)
		{
			$method = 'set'.ucfirst($key);
			if (method_exists($this,$value))
			{
				$this->$method($value);
			
			}
		}


	}
	/*function getter of id
	 * return id
	 */
	public function id()
	{
		return $this->_id;

	}


	/*function getter of title
	 * return title
	 */
	public function title()
	{
		return $this->_title;

	}


	/*function getter of content
	 * return content
	 */
	public function content()
	{
		return $this->_content;

	}
	/*function getter of date_creation_fr
	 * return date_creation_fr
	 */
	public function date_creation_fr()
	{
		return $this->_date_creation_fr;

	}


	/*setters id
	 * return
	 */

	public function setId()
	{
		$id=int($id);
		if ($id>0)
		{
			$this->_id=$id;
		}
	}


	/*setters title
	 * 
	 */

	public function setTitle()
	{

		$this->_title=$title;
	}
	/*setters content
	 * return
	 */

	public function setContent()
	{
		$this->_content=$content;
	}
	/*setters date_creation_fr
	 * 
	 */

	public function setDate_creation_fr()
	{
		$this->_date_creation_fr=$date_creation_fr;
	}

}

	

