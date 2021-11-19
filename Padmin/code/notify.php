<?php
        
        
        
        //ONE
        require 'C:/wamp64/www/vendor/autoload.php';

        $MessageBird = new \MessageBird\Client('yHbhTjJtpSHIrFwO1QhjnJW9K');
         $Message = new \MessageBird\Objects\Message();
         $Message->originator = 'C-A-S';
         $Message->recipients = [ '+97517901127' ];
         $Message->body = 'Hello students, Your attendance has been updated check your percentage of attendance. Incase if you fail to maintain your attendance to more than 90 you cannot sit in final exam. Thank You(by College attendance system)';

         
         $MessageBird->messages->create($Message);


                  
//TWO
        
                
        $messagebird = new \MessageBird\Client('Pt9TbIhupynTmLLJvsHM5dqZU');
        $message = new \MessageBird\Objects\Message();
        $message->originator = 'C-A-S';
        $message->recipients = [ '+97517517552' ];
        $message->body = 'Hello students, Your attendance has been updated check your percentage of attendance. Incase if you fail to maintain your attendance to more than 90 you cannot sit in final exam. Thank You(by College attendance system)';

        $MessageBird->messages->create($Message);
       
// //THREE

        $MessageBird = new \MessageBird\Client('Ic7LCXmWCKswPVfQ7xboPGq5q');
          $Message = new \MessageBird\Objects\Message();
          $Message->originator = 'C-A-S';
          $Message->recipients = array(+97577821922);
          $Message->body = 'Hello students, it seems that your attendance was less than 80%, so if you want to sit for exam be present...thank you By college attendance system';

          $MessageBird->messages->create($Message);



          //FOUR
          $MessageBird = new \MessageBird\Client('nP1PNnX2S2eR0uicSbZhuKqdK');
          $Message = new \MessageBird\Objects\Message();
          $Message->originator = 'C-A-S';
          $Message->recipients = array(+97517285325);
          $Message->body = 'Hello students, it seems that your attendance was less than 80%, so if you want to sit for exam be present...thank you By college attendance system';

          $MessageBird->messages->create($Message);


          echo "<script>alert('Message send');
                        location.href='/software_engineering/software_project/Padmin/code/Student.php';
                </script>";
          









?>