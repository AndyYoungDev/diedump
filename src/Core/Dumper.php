<?php
namespace Doetech;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

/**
 * This Class is core.
 * Then execute "./HtmlDumper".
 *
 *
 * Created by PhpStorm.
 * User: YangLongFei
 * Date: 2017/8/31
 * Time: 16:00
 */
class Dumper{
    public function dump($value){
        if (class_exists(CliDumper::class)) {
            $dumper = 'cli' === PHP_SAPI ? new CliDumper : new HtmlDumper;

            $dumper->dump((new VarCloner)->cloneVar($value));
        } else {
            var_dump($value);
        }
    }
}