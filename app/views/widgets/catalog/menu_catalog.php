<?php //$parents = isset($category['children']);?>
<li>
    <a href="/category/<?=$category['slug']?>" ><?=$category['title']?></a>
    <?php if(isset($category['children'])):?>
        <ul>
            <?=$this->getMenuHtml($category['children']);?>
        </ul>
    <?php endif;?>
</li>