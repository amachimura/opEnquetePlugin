<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * opEnquetePluginActions
 *
 * @package    OpenPNE
 * @subpackage action
 * @author     Kaoru Nishizoe <nishizoe@tejimaya.net>
 */
abstract class opEnquetePluginActions extends sfActions
{
  /**
   * Executes new action
   *
   * @param sfRequest $request A request object
   */
  public function executeNew($request)
  {
    $this->form = new EnqueteForm();

    return sfView::SUCCESS;
  }
}
