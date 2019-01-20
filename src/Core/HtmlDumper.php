<?php
/**
 * This Class extends Symfony.
 * Set The theme.
 * I provide you a theme which Laravel use.
 *
 * Created by PhpStorm.
 * User: YangLongFei
 * Date: 2017/8/31
 * Time: 15:59
 */
namespace Doetech;

class HtmlDumper extends \Symfony\Component\VarDumper\Dumper\HtmlDumper
{
    /**
     * Colour definitions for output.
     *
     * @var array
     */

    protected static $themes = array(
        'light' => array(
            'default' => 'background:none; color:#CC7832; line-height:1.2em; font:14px Menlo, Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:99999; word-break: break-all',
            'num' => 'font-weight:bold; color:#1299DA',
            'const' => 'font-weight:bold',
            'str' => ' color:#333333;',
            'note' => 'color:#000000',
            'ref' => 'color:#6E6E6E',
            'public' => 'color:#262626',
            'protected' => 'color:#262626',
            'private' => 'color:#262626',
            'meta' => 'color:#B729D9',
            'key' => 'color:#000000',
            'index' => 'color:#1299DA',
            'ellipsis' => 'color:#CC7832',
            'ns' => 'user-select:none;',
        ),
    );
}