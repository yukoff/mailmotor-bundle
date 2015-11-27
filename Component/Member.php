<?php

namespace MailMotor\Bundle\MailMotorBundle\Component;

/**
 * Member interface
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
interface Member
{
	/**
	 * Is subscribed
	 *
	 * @param string $email
	 * @param string $listId
	 * @return boolean
	 */
	public function isSubscribed($email, $listId);

	/**
	 * Subscribe
	 *
	 * @param string $email
	 * @param string $listId
	 * @return boolean
	 */
	public function subscribe($email, $listId);

	/**
	 * Unsubscribe
	 *
	 * @param string $email
	 * @param string $listId
	 * @return boolean
	 */
	public function unsubscribe($email, $listId);
}