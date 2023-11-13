<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Theme Options',
            'menu_title' => 'Theme Options',
            'menu_slug' => 'theme Options',
            'capability' => 'edit_posts',
            'redirect' => false
        )
    );
}
add_filter('show_admin_bar', '__return_false');

?>


<?php
function sendMail($title, $content, $nTo, $mTo,$diachicc=''){
	$nFrom = 'http://easyhrm.vn';
	$mFrom = 'sds-noreply@softdreams.vn';	//dia chi email cua ban 
	$mPass = '123@abcD';		//mat khau email cua ban
	$mail             = new PHPMailer();
	$body             = $content;
	$mail->IsSMTP(); 
	$mail->CharSet 	= "utf-8";
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth   = true;                  	// enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "mail.softdreams.vn";      	
	$mail->Port       = 465;
	$mail->Username   = $mFrom;  // GMAIL username
	$mail->Password   = $mPass;           	 // GMAIL password
	$mail->SetFrom($mFrom, $nFrom);
	//chuyen chuoi thanh mang
	$ccmail = explode(',', $diachicc);
	$ccmail = array_filter($ccmail);
	if(!empty($ccmail)){
		foreach ($ccmail as $k => $v) {
			$mail->AddCC($v);
		}
	}
	$mail->Subject    = $title;
	$mail->MsgHTML($body);
	$address = $mTo;
	$mail->AddAddress($address, $nTo);
	$mail->AddReplyTo('easybooks.softdreams@gmail.com', 'http://easyhrm.vn');
	if(!$mail->Send()) {
		return 0;
	} else {
		return 1;
	}
}
function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');
function sendMailAttachment($title, $content, $nTo, $mTo,$diachicc='',$file,$filename){
	$nFrom = 'http://easyhrm.vn';
	$mFrom = 'sds-noreply@softdreams.vn';	//dia chi email cua ban 
	$mPass = '123@abcD';		//mat khau email cua ban
	$mail             = new PHPMailer();
	$body             = $content;
	$mail->IsSMTP(); 
	$mail->CharSet 	= "utf-8";
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	$mail->SMTPAuth   = true;                  	// enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "mail.softdreams.vn";      	
	$mail->Port       = 465;
	$mail->Username   = $mFrom;  // GMAIL username
	$mail->Password   = $mPass;           	 // GMAIL password
	$mail->SetFrom($mFrom, $nFrom);
	//chuyen chuoi thanh mang
	$ccmail = explode(',', $diachicc);
	$ccmail = array_filter($ccmail);
	if(!empty($ccmail)){
		foreach ($ccmail as $k => $v) {
			$mail->AddCC($v);
		}
	}
	$mail->Subject    = $title;
	$mail->MsgHTML($body);
	$address = $mTo;
	$mail->AddAddress($address, $nTo);
	$mail->AddReplyTo('easybooks.softdreams@gmail.com', 'http://easyhrm.vn');
	$mail->AddAttachment($file,$filename);
	if(!$mail->Send()) {
		return 0;
	} else {
		return 1;
	}
}

?>