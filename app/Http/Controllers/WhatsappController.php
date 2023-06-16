<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function send(Request $request) {
        $message = $request->input('message');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $contact = $request->input('contact');

        $name = $request->input('name');

        $message = "Customer Name: {$name}\nCustomer Email: {$email}\nCustomer Phone: {$phone}\nCustomer Message:{$message}";

        
        $status = $this->send_whatsapp($message);
    
        if ($status == 200) {
            return redirect()->back()->with('success', 'Message sent successfully.');
        } else {
            return redirect()->back()->with('error', 'Error sending message. Please try again later.');
        }
    }

    public function send_whatsapp($message = "Test" , $email="", $contact="", $name="") {
        $phone="+923465350363";
        $apikey = "9338263";       // Enter your personal apikey received from CallMeBot
        
        $url = "https://api.callmebot.com/whatsapp.php?phone={$phone}&text=" .urldecode( $name) .urldecode($email) .urldecode($contact) .urldecode($message)   ."&apikey={$apikey}&source=php";
        
        $response = Http::get($url);
    
        return (int) $response->status();
    }
}
