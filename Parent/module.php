<?

require_once(__DIR__ . "/../Logging.php");

class TestParent extends IPSModule
{
    
    
    public function Create()
    {
        parent::Create();
        
		
    }

    public function ApplyChanges()
    {
        parent::ApplyChanges();
    
    }
    

    public function SendDataFromParent($Data) {
	$this->SendDataToChildren(json_encode(Array("DataID" => "{11ACFC89-5700-4B2A-A93C-18CAB413839C}", "Buffer" => $Data)));    

    }

    public function ForwardData($JSONString) {
	IPS_LogMessage("Parent", "Received ".$JSONString);

    }   


}

?>
