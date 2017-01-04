<?

require_once(__DIR__ . "/../TellstickUtil.php");  
require_once(__DIR__ . "/../Logging.php");

class Child extends IPSModule
{

    
    public function Create() {
        parent::Create();
        $this->ConnectParent("{4EF96162-A853-44FC-86EF-07B85A1F4A36}");
		
    }

    public function ApplyChanges() {
        parent::ApplyChanges();
        
    }
	
    public function ReceiveData($JSONString) {
		
	IPS_LogMessage("Child",$JSONString);
		
    }

    public function SendDataFromChild($Data);
	$this->SendDataToParent(json_encode(Array("DataID" => "{11ACFC89-5700-4B2A-A93C-18CAB413839C}", "Buffer" => $Data))); 
    }

}

?>
