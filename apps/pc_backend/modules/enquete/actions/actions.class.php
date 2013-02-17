<?php

/**
 * enquete actions.
 *
 * @package    OpenPNE
 * @subpackage enquete
 * @author     Your name here
 */
class enqueteActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfWebRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
}
