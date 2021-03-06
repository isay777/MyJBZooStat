<?php
defined( '_JEXEC' ) or die; // No direct access

/**
 * View for  current element
 * @author CB9TOIIIA
 */
class MyjbzoostatViewDisqus extends JViewLegacy
{

	public function display( $tpl = null )
	{
		$this->_setToolBar();
		parent::display( $tpl );
	}

    protected function _setToolBar()
    {
        JToolBarHelper::title( JText::_( 'Менеджер комментариев Disqus' ) );
				JToolbarHelper::divider();


				$component = JComponentHelper::getComponent('com_myjbzoostat');
				$params = json_decode($component->params);
				$StatOrProduct = $params->statorproduct;

				if ($StatOrProduct == 'stat') { $StatOrProduct = 'Статьи';}
				if ($StatOrProduct == 'product') { $StatOrProduct = 'Товары';}

				$bar = JToolBar::getInstance('toolbar');
				$title = JText::_('Панель управления');
				$dhtml = "<a href=\"/administrator/\" class=\"btn btn-small\"><i class=\"icon-joomla\" title=\"$title\"></i>$title</a>";
				$bar->appendButton('Custom', $dhtml, 'list');

				JToolBarHelper::divider();

				$bar = JToolBar::getInstance('toolbar');
				$title = JText::_($StatOrProduct.' JBZoo');
				$dhtml = "<a href=\"/administrator/index.php?option=com_zoo\" class=\"btn btn-small\"><i class=\"icon-home\" title=\"$title\"></i>$title</a>";
				if (JComponentHelper::isEnabled('com_zoo') == '1') {  $bar->appendButton('Custom', $dhtml, 'list'); }

				JToolBarHelper::divider();

				$bar = JToolBar::getInstance('toolbar');
				$title = JText::_('Посещаемость');
				$dhtml = "<a href=\"/administrator/index.php?option=com_myjbzoostat\" class=\"btn btn-small\"><i class=\"icon-options\" title=\"$title\"></i>$title</a>";
				$bar->appendButton('Custom', $dhtml, 'list');

				JToolBarHelper::divider();

				$bar = JToolBar::getInstance('toolbar');
				$title = JText::_('Теги');
				$dhtml = "<a href=\"/administrator/index.php?option=com_myjbzoostat&view=tags\" class=\"btn btn-small\"><i class=\"icon-tags\" title=\"$title\"></i>$title</a>";
				if (JComponentHelper::isEnabled('com_zoo') == '1') {  $bar->appendButton('Custom', $dhtml, 'list'); }

				JToolBarHelper::divider();

				$bar = JToolBar::getInstance('toolbar');
				$title = JText::_($StatOrProduct);
				$dhtml = "<a href=\"/administrator/index.php?option=com_myjbzoostat&view=articles\" class=\"btn btn-small\"><i class=\"icon-list\" title=\"$title\"></i>$title</a>";
				if (JComponentHelper::isEnabled('com_zoo') == '1') {  $bar->appendButton('Custom', $dhtml, 'list'); }

				JToolBarHelper::divider();

				$bar = JToolBar::getInstance('toolbar');
				$title = JText::_('Авторы');
				$dhtml = "<a href=\"/administrator/index.php?option=com_myjbzoostat&view=autors\" class=\"btn btn-small\"><i class=\"icon-users\" title=\"$title\"></i>$title</a>";
				if (JComponentHelper::isEnabled('com_zoo') == '1') { $bar->appendButton('Custom', $dhtml, 'list'); }

				JToolBarHelper::divider();

				$bar = JToolBar::getInstance('toolbar');
				$title = JText::_('Статистика авторов');
				$dhtml = "<a href=\"/administrator/index.php?option=com_myjbzoostat&view=reportauthors\" class=\"btn btn-small\"><i class=\"icon-users\" title=\"$title\"></i>$title</a>";
				if (JComponentHelper::isEnabled('com_zoo') == '1') { $bar->appendButton('Custom', $dhtml, 'list'); }


				JToolBarHelper::divider();

				$bar = JToolBar::getInstance('toolbar');
				$title = JText::_('Профиль автора');
				$dhtml = "<a href=\"/administrator/index.php?option=com_myjbzoostat&view=auhorsprofile\" class=\"btn btn-small\"><i class=\"icon-user\" title=\"$title\"></i>$title</a>";
				if (JComponentHelper::isEnabled('com_zoo') == '1') {  $bar->appendButton('Custom', $dhtml, 'list'); }


				JToolBarHelper::divider();

				$bar = JToolBar::getInstance('toolbar');
				$title = JText::_('Disqus');
				$dhtml = "<a href=\"/administrator/index.php?option=com_myjbzoostat&view=disqus\" class=\"btn btn-small\"><i class=\"icon-eye\" title=\"$title\"></i>$title</a>";
				$bar->appendButton('Custom', $dhtml, 'list');

				JToolBarHelper::preferences('com_myjbzoostat');


    }

}
