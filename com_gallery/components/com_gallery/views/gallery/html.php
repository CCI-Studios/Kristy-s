<?php

class ComGalleryViewGalleryHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$menu = KFactory::get('lib.joomla.application')
					->getMenu()
					->getActive();
		
		$root = 'images/galleries';
		$folder = $menu->params->get('folder', '');
		$columns = $menu->params->get('columns', '');
		$col_space = $menu->params->get('col_space', '');
		$row_space = $menu->params->get('row_space', '');
		
		$images = JFolder::files(JPATH_ROOT.DS. $root .DS. $folder);
		
		$this->assign('images', $images);
		$this->assign('columns', $columns);
		$this->assign('col_space', $col_space);
		$this->assign('row_space', $row_space);
		$this->assign('folder', $root .DS. $folder);
		
		return parent::display();
	}
	
}