<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * PluginEnquete form.
 *
 * @package    OpenPNE
 * @subpackage form
 * @author     Kaoru Nishizoe <nishizoe@tejimaya.net>
 */
abstract class PluginEnqueteForm extends BaseEnqueteForm
{
  public function setup()
  {
    parent::setup();

    unset($this['id']);
    unset($this['community_id']);
    unset($this['member_id']);
    unset($this['created_at']);
    unset($this['updated_at']);

    $this->setWidget('title', new sfWidgetFormInput());
    $this->widgetSchema->getFormFormatter()->setTranslationCatalogue('enquete_form');
  }
}
