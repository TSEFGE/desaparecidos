<?php 
class eventclass_colaboraciones  extends eventsBase
{ 
	function eventclass_colaboraciones()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$sql = "UPDATE colaboraciones set UsrBaja='".$_SESSION["UserID"] . "' where ".$where;
CustomQuery($sql);

// Place event code here.
// Use 
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
