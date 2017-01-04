<?


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
    

    public function SendDataFromParent(string $Data) {
	     $this->SendDataToChildren(json_encode(Array("DataID" => "{8CD73BA3-349D-4653-9FE9-6A83A87A1197}", "Buffer" => $Data)));    

    }

    public function ForwardData($JSONString) {
	    IPS_LogMessage("Parent", "Received ".$JSONString);

    }   


}

?>
