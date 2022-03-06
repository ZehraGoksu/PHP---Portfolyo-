<?php

namespace App\Controllers\Frontend;

use Core\Controller;

use App\Models\Contact;

class ContactController extends Controller
{

    public function IndexPage()
    {
      return $this->view("frontend/layouts/contact");
    }

    public function SendContactMessage()
    {
      

     try {
        $data =  [
            'name_surname' => $_POST['name_surname'],
            'email' => $_POST['email'],
            'message' => $_POST['message']
        ];

        $addMessage = Contact::create($data);

        if (!$addMessage) {
            throw "Mesajınız gönderilirken bir sorun oluştu";
        }

          redirect("admin/contact", true, "Mesajınız Başarılı Bir Şekilde İletilmiştir");
        }
        catch (\Exception $e) {
             
          redirect("admin/contact", false, "Mesajınız İletilememiştir.");
        }
    }
}
?>