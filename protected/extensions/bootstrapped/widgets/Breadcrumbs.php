<?php

Yii::import('zii.widgets.CBreadcrumbs');
class Breadcrumbs extends CBreadcrumbs{

    public $htmlOptions=array('class'=>'breadcrumb');

    public $separator = '/';

    public function run(){
        $links = array();

        if ($this->homeLink === null)
        {
            if (!empty($this->links))
            {
                $content = CHtml::link('Home', Yii::app()->homeUrl);
                $links[] = $this->renderItem($content);
            }
            else
                $links[] = $this->renderItem('Home', true);
        }
        else if ($this->homeLink !== false)
            $links[] = $this->homeLink;

        foreach ($this->links as $label=>$url)
        {
            if (is_string($label) || is_array($url))
            {
                $label = $this->encodeLabel ? CHtml::encode($label) : $label;
                $content = CHtml::link($label, $url);
                $links[] = $this->renderItem($content);
            }
            else
                $links[] = $this->renderItem($this->encodeLabel ? CHtml::encode($url) : $url, true);
        }

        echo CHtml::openTag('ul', $this->htmlOptions);
        echo implode('', $links);
        echo '</ul>';
    }

    protected function renderItem($content, $active=false)
    {
        $separator = !$active ? '<span class="divider">'.$this->separator.'</span>' : '';

        ob_start();
        echo CHtml::openTag('li', $active ? array('class'=>'active') : array());
        echo $content.$separator;
        echo '</li>';
        return ob_get_clean();
    }
}
?>
