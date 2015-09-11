<?php
/**
 * @file    MainSidebar.php.
 * @author  Agiel K. Saputra
 * @date    5/8/2015
 * @time    2:42 PM
 */

namespace codezeen\yii2\adminlte\widgets;

use Yii;
use yii\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/**
 * Class MainSidebar.
 * Create main sidebar for admin-lte.
 * ```php
 * $adminSiteMenu[0] = ['label' => 'MAIN NAVIGATION', 'options' => ['class' => 'header'], 'template' => '{label}'];
 * $adminSiteMenu[1] = ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'items' => [
 *     ['icon' => 'fa fa-circle-o text-red', 'label' => 'Home', 'url' => ['/site/index']],
 * ]];
 * $adminSiteMenu[2] = ['label' => 'BADGE AND MULTILEVEL', 'options' => ['class' => 'header'], 'template' => '{label}'];
 * $adminSiteMenu[3] = ['label' => 'Multilevel', 'icon' => 'fa fa-share', 'options' => ['class' => 'treeview'], 'items' => [
 *     ['icon' => 'fa fa-circle-o text-yellow', 'label' => 'Level One', 'url' => '#'],
 *     ['icon' => 'fa fa-circle-o text-aqua', 'label' => 'Level One', 'url' => '#', 'items' => [
 *         ['icon' => 'fa fa-circle-o', 'label' => 'Badge', 'url' => '#', 'badge' => '2'],
 *         ['icon' => 'fa fa-circle-o', 'label' => 'Badge red', 'url' => '#', 'badge' => '2', 'badgeBgClass' => 'bg-red'],
 *         ['icon' => 'fa fa-circle-o', 'label' => 'Badge options', 'url' => '#', 'badge' => '2', 'badgeOptions' => [
 *             'class' => 'label pull-right bg-yellow'
 *         ]],
 *     ]],
 *     ['icon' => 'fa fa-circle-o text-red', 'label' => 'Level One', 'url' => ['/user/view','id' => '1']],
 * ]];
 * ksort($adminSiteMenu);
 * echo MainSidebar::widget([
 *     'items'   => $adminSiteMenu,
 * ]);
 * ```
 * @author Agiel K. Saputra
 */
class MainSidebar extends Menu
{
    /**
     * @inheritdoc
     */
    public $linkTemplate = '<a href="{url}" {linkOptions}>{icon}<span>{label}</span>{right-icon}{badge}</a>';
    public $labelTemplate = '<a href="#">{icon}<span>{label}</span>{right-icon}{badge}</a>';
    public $submenuTemplate = "\n<ul class=\"treeview-menu{open}\"{block}>\n{items}\n</ul>\n";
    public $activateParents = true;
    public $options = ['class' => 'sidebar-menu'];

    /**
     * @var string Default tag for badge.
     */
    public $badgeTag = 'small';
    /**
     * @var string Default class for badge.
     */
    public $badgeClass = 'badge pull-right';
    /**
     * @var string Default background color of badge.
     */
    public $badgeBgClass = 'bg-green';
    /**
     * @var string Class of parent icon
     */
    public $parentRightIcon = 'fa fa-angle-left pull-right';

    /**
     * @inheritdoc
     */
    protected function renderItems($items)
    {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag = ArrayHelper::remove($options, 'tag', 'li');
            $class = [];
            if (!empty($item['items'])) {
                $class[] = 'treeview';
            }
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }
            if (!empty($class)) {
                if (empty($options['class'])) {
                    $options['class'] = implode(' ', $class);
                } else {
                    $options['class'] .= ' ' . implode(' ', $class);
                }
            }

            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
                $menu .= strtr($submenuTemplate, [
                    '{open}' => $item['active'] ? ' menu-open' : '',
                    '{block}' => $item['active'] ? 'style="display: block"' : '',
                    '{items}' => $this->renderItems($item['items']),
                ]);
            }
            if ($tag === false) {
                $lines[] = $menu;
            } else {
                $lines[] = Html::tag($tag, $menu, $options);
            }
        }

        return implode("\n", $lines);
    }

    /**
     * @inheritdoc
     */
    protected function renderItem($item)
    {
        $item['badgeOptions'] = isset($item['badgeOptions']) ? $item['badgeOptions'] : [];

        if (!ArrayHelper::getValue($item, 'badgeOptions.class')) {
            $badgeBgClass = isset($item['badgeBgClass']) ? $item['badgeBgClass'] : $this->badgeBgClass;
            $item['badgeOptions']['class'] = $this->badgeClass . ' ' . $badgeBgClass;
        }

        if (isset($item['items']) && !isset($item['right-icon'])) {
            $item['right-icon'] = $this->parentRightIcon;
        }

        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

            return strtr($template, [
                '{icon}'        => isset($item['icon']) ? '<i class="' . $item['icon'] . '"></i> ' : null,
                '{url}'         => Html::encode(Url::to($item['url'])),
                '{label}'       => $item['label'],
                '{right-icon}'  => isset($item['right-icon']) ? '<i class="' . $item['right-icon'] . '"></i>' : null,
                '{badge}'       => isset($item['badge']) ? Html::tag($this->badgeTag, $item['badge'], $item['badgeOptions']) : null,
                '{linkOptions}' => isset($item['linkOptions']) ? Html::renderTagAttributes($item['linkOptions']) : null
            ]);
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

            return strtr($template, [
                '{icon}'        => isset($item['icon']) ? '<i class="' . $item['icon'] . '"></i> ' : null,
                '{label}'       => $item['label'],
                '{right-icon}'  => isset($item['right-icon']) ? '<i class="' . $item['right-icon'] . '"></i>' : null,
                '{badge}'       => isset($item['badge']) ? Html::tag($this->badgeTag, $item['badge'], $item['badgeOptions']) : null,
                '{linkOptions}' => isset($item['linkOptions']) ? Html::renderTagAttributes($item['linkOptions']) : null
            ]);
        }
    }
}