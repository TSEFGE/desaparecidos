<?php 
class eventclass_desaparecidos  extends eventsBase
{ 
	function eventclass_desaparecidos()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;

		$this->events["BeforeShowAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$sql = "UPDATE desaparecidos set UsrBaja='".$_SESSION["UserID"] . "' where ".$where;
CustomQuery($sql);

// Place event code here.
// Use 
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		if (($_SESSION["UserID"] != "alcantara")or($_SESSION["UserID"] != "csuarez")or($_SESSION["UserID"] != "acallejas"))

  $pageObject->hideField("validacion");



// Place event code here.
// Use 
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
