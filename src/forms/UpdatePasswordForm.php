<?php

/**
 * This file is part of the DocPHT project.
 * 
 * @author Valentino Pesce
 * @copyright (c) Valentino Pesce <valentino@iltuobrand.it>
 * @copyright (c) Craig Crosby <creecros@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DocPHT\Form;

use Tracy\Dumper;
use Nette\Forms\Form;
use Nette\Utils\Html;

class UpdatePasswordForm extends MakeupForm
{
	public function create()
	{
		$form = new Form;
		$form->onRender[] = [$this, 'bootstrap4'];

		$form->addGroup('Personal data')
			->setOption('description', 'Test');

		$form->addText('name', 'Your name:')
			->setRequired('Enter your name');

		$form->addSubmit('submit', 'Send');

		if ($form->isSuccess()) {
            echo '<h2>Form was submitted and successfully validated</h2>';
			Dumper::dump($form->getValues(), [Dumper::COLLAPSE => false]);
			exit;
		}
		
		return $form;
	}
}
