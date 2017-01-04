<?


class TestParent extends IPSModule
{
    
    
    public function Create()
    {
        parent::Create();

        
        
		
    }
	
	public function SendData(string $Data){
		$this->SendDataToChildren(json_encode(Array("DataID" => "{9D6F86B3-54FC-4F4F-BDFF-59199926175B}", "Buffer" => $Data)));
		IPS_LogMessage("Parent", "Sent data");
	}
	
	public function ForwardData($JSONString){
		IPS_LogMessage("Parent", "Got data");	
	}

    public function ApplyChanges()
    {
        parent::ApplyChanges();
    

    }

}

?>
