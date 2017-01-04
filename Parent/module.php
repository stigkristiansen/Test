<?


class TestParent extends IPSModule
{
    
    
    public function Create()
    {
        parent::Create();

        
        
		
    }
	
	public function SendData(string $Data){
		$this->SendDataToChildren(json_encode(Array("DataID" => "{18EF90D4-2DF2-436F-9C73-72FCC916E218}", "Buffer" => $Data)));
		IPS_LogMessage("Parent", "Sent data");
	}

    public function ApplyChanges()
    {
        parent::ApplyChanges();
    

    }

}

?>
