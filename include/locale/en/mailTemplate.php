<?php
class mailTemplate
{
    public function getBuySubject(){
        return '[popapps]Thank you very much for your purchase.';
    }

    public function getBuyUserBody(){
        $message .= "Thnak you very much for your purchase.\n\n
I hope you will enjoy our service.\n
Please note that we don not acceept to return this mail.\n
popApps team\n
Email:     info@popapp-simulator.com\n
Web:       http://www.popapp-simulator.com/";
        return $message;
    }
    
}
?>
