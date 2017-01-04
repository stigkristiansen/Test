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
	     $this->SendDataToChildren(json_encode(Array("DataID" => "{CA483409-9C8D-4E80-865F-F0ACA96FE1C1}", "Buffer" => $Data)));    
		 IPS_LogMessage("Parent","Sent data");

    }

    public function ForwardData($JSONString) {
	    IPS_LogMessage("Parent", "Received ".$JSONString);

    }   


}

?>
