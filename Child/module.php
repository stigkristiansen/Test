<?
class TestChild extends IPSModule
{

    public function Create() {
        parent::Create();
        $this->ConnectParent("{655884D6-7969-4DAF-8992-637BEE9FD70D}");
		
    }

    public function ApplyChanges() {
        parent::ApplyChanges();
        
    }
	
	public function SendData(string $Data){
			IPS_LogMessage("Child", "Sent data");
	}
	
    public function ReceiveData($JSONString) {
		IPS_LogMessage("Child", "Got data");

    }

}

?>
