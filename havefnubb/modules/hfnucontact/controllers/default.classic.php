<?php
/**
* @package   havefnubb
* @subpackage hfnucontact
* @author    FoxMaSk
* @copyright 2008 FoxMaSk
* @link      http://havefnubb.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

class defaultCtrl extends jController {

	public $pluginParams = array(

		'*' => array('auth.required'=>false,
					'hfnu.check.installed'=>true,
					'banuser.check'=>true,
					),
	);

	public function index() {
		global $gJConfig;
		$to = $this->param('to');

		if ($to != '') {
			$dao = jDao::get('jcommunity~user');
			$user = $dao->getByLogin($to);

			if ($user === false) {
				throw new jException('hfnucontact~contact.contact.does.not.exist');
			}
		}
		else {
				$to = $gJConfig->hfnucontact['to_contact'];
		}
		// is the 'To' still empty ??
		if ( $to == '' ) {
			throw new jException('hfnucontact~contact.email.config.not.done.properly');
		}

		$form = jForms::create('hfnucontact~contact');
		$form->setData('to',$to);
		$rep = $this->getResponse('html');
		$rep->title = jLocale::get('contact.send.an.email.to',$to);
		$tpl = new jTpl();
		$tpl->assign('form',$form);
		$tpl->assign('to',$to);
		$tpl->assign('action','hfnucontact~default:send_a_message');
		$rep->body->assign('MAIN',$tpl->fetch('hfnucontact~contact'));
		return $rep;
	}

	public function send_a_message() {
		global $gJConfig;
		$form = jForms::fill('hfnucontact~contact');

		if (! $form->check()) {
			$rep = $this->getResponse('redirect');
			$rep->action='hfnucontact~default:index';
			return $rep;
		}

		// the sender is  not connected and use contact form to send a message
		// to the contact defined in hfnucontact.ini.php
		if (! jAuth::isConnected()) {
			$toContact = $gJConfig->hfnucontact['to_contact'];
			$emailTo = $gJConfig->hfnucontact['email_contact'];
			$email = $gJConfig->mailer['webmasterEmail'];
			$login = $gJConfig->mailer['webmasterName'];
		}
		else {
			$email = jAuth::getUserSession ()->email ;
			$login = jAuth::getUserSession ()->login ;
			$dao = jDao::get('jcommunity~user');
			$user = $dao->getByLogin($form->getData('to'));
			$emailTo = $user->email;
		}

		$mail = new jMailer();
		$mail->From       = $email;
		$mail->FromName   = $login;
		$mail->Sender     = $email;
		$mail->Subject    = '[Contact] '.htmlentities($form->getData('subject'));
		$mail->ContentType = 'text/html';

		$message  = $form->getData('message');
		if ($form->getData('url') != '') {
				$url = 'http://'. $_SERVER['SERVER_NAME'] .'/'. $form->getData('url');
				if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
					$message .= "\n"."\n";
					$message .= $url;
				}
		}

		$tpl = new jTpl();
		$tpl->assign('login',$login);
		$tpl->assign('message',$message);
		$tpl->assign('server',$_SERVER['SERVER_NAME']);
		$mail->Body = $tpl->fetch('hfnucontact~send_an_email', 'text');
		$mail->AddAddress($emailTo);
		$mail->Send();

		jForms::destroy('hfnucontact~contact');
		$rep = $this->getResponse('redirect');
		$rep->action='hfnucontact~default:contacted';
		return $rep;
	}

	public function contacted() {
		$rep = $this->getResponse('html');
		$tpl = new jTpl();
		$rep->body->assign('MAIN',$tpl->fetch('hfnucontact~contacted'));
		return $rep;
	}

	public function send_to_friend() {
		$url = $_SESSION[$config['session_name']]['send_to_friend_url'];

		$message = jLocale::get('contact.a.page.to.read.message') .
					"\n\n" .
					'http://'. $_SERVER['SERVER_NAME'] .'/'. $url;

		$subject = jLocale::get('contact.a.page.to.read.subject',
								'http://'. $_SERVER['SERVER_NAME'] .'/'.$url);

		$form = jForms::create('hfnucontact~send_to_friend');
		$form->setData('message',$message);
		$form->setData('subject',$subject);
		$rep = $this->getResponse('html');
		$rep->title = jLocale::get('contact.send.an.email.to.a.friend');
		$tpl = new jTpl();
		$tpl->assign('form',$form);
		$tpl->assign('action','hfnucontact~default:send_a_message_to_friend');
		$rep->body->assign('MAIN',$tpl->fetch('hfnucontact~send_to_friend'));
		return $rep;
	}

	public function send_a_message_to_friend() {
		global $gJConfig;
		$form = jForms::fill('hfnucontact~send_to_friend');

		if (! $form->check()) {
			$rep = $this->getResponse('redirect');
			$rep->action='hfnucontact~default:index';
			return $rep;
		}

		// the sender is  not connected and use contact form to send a message
		// to the contact defined in hfnucontact.ini.php
		if (! jAuth::isConnected()) {
			$email = $gJConfig->mailer['webmasterEmail'];
			$login = $gJConfig->mailer['webmasterName'];
		}
		else {
			$email = jAuth::getUserSession ()->email ;
			$login = jAuth::getUserSession ()->login ;
		}

		$mail = new jMailer();
		$mail->From       = $email;
		$mail->FromName   = $login;
		$mail->Sender     = $email;
		$mail->Subject    = $form->getData('subject');
		$mail->ContentType = 'text/html';

		$tpl = new jTpl();
		$tpl->assign('login',$login);
		$tpl->assign('message',$form->getData('message'));
		$mail->Body = $tpl->fetch('hfnucontact~send_an_email', 'text');
		$mail->AddAddress($form->getData('email_to'));
		$mail->Send();

		jForms::destroy('hfnucontact~send_to_friend');
		$rep = $this->getResponse('redirect');
		$rep->action='hfnucontact~default:contacted';
		return $rep;
	}

}
