<?php
class TabClass
{
	
	function __construct()
	{
		
	}

	public function name()
	{
		return "Tab";
	}

	public function sendDiv()
	{
		ob_start();?>
		<div class="tabContent">
			Tab class content here
		</div>
		<?php
	}
}

class Menu
{
	
	function __construct(argument)
	{
		# code...
	}
}
?>
