<?


class TestChild extends IPSModule
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

    public function SendDataFromChild(string $Data) {
	    $this->SendDataToParent(json_encode(Array("DataID" => "{42DF61AE-0745-47D5-B12C-63819FA5DED7}", "Buffer" => $Data))); 
		IPS_LogMessage("Child","Sent data");
    }

}

?>
