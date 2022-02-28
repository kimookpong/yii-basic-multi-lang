<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /*-- Google font --*/
        'https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap',
        /*-- Bootstrap --*/
        //'template/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css',
        /*-- Font Awesome --*/
        //'template/gentelella/vendors/font-awesome/css/font-awesome.min.css',
        'fontawesome/css/all.css',
        /*-- MDBootstrap flags --*/
        'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/css/flag-icons.min.css',
        /*-- NProgress --*/
        'template/gentelella/vendors/nprogress/nprogress.css',
        /*-- iCheck --*/
        'template/gentelella/vendors/iCheck/skins/flat/green.css',
        /*-- bootstrap-wysiwyg --*/
        'template/gentelella/vendors/google-code-prettify/bin/prettify.min.css',
        /*-- Select2 --*/
        'template/gentelella/vendors/select2/dist/css/select2.min.css',
        /*-- Switchery --*/
        'template/gentelella/vendors/switchery/dist/switchery.min.css',
        /*-- starrr --*/
        'template/gentelella/vendors/starrr/dist/starrr.css',
        /*-- bootstrap-daterangepicker --*/
        'template/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css',
        /*-- Dropify --*/
        'dropify/css/dropify.min.css',

        /*-- Custom Theme Style --*/
        'template/gentelella/build/css/custom.min.css',
        'css/site.css',
    ];
    public $js = [
        /*-- jQuery --*/
        //'template/gentelella/vendors/jquery/dist/jquery.min.js',
        /*-- Font Awesome --*/
        'fontawesome/js/solid.js',
        /*-- Bootstrap --*/
        'template/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js',
        /*-- FastClick --*/
        'template/gentelella/vendors/fastclick/lib/fastclick.js',
        /*-- NProgress --*/
        'template/gentelella/vendors/nprogress/nprogress.js',

        /*-- bootstrap-progressbar --*/
        'template/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
        /*-- iCheck --*/
        'template/gentelella/vendors/iCheck/icheck.min.js',
        /*-- bootstrap-daterangepicker --*/
        'template/gentelella/vendors/moment/min/moment.min.js',
        'template/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js',
        /*-- bootstrap-wysiwyg --*/
        'template/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js',
        'template/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js',
        'template/gentelella/vendors/google-code-prettify/src/prettify.js',
        /*-- jQuery Tags Input --*/
        'template/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js',
        /*-- Switchery --*/
        'template/gentelella/vendors/switchery/dist/switchery.min.js',
        /*-- Select2 --*/
        'template/gentelella/vendors/select2/dist/js/select2.full.min.js',
        /*-- Parsley --*/
        'template/gentelella/vendors/parsleyjs/dist/parsley.min.js',
        /*-- Autosize --*/
        'template/gentelella/vendors/autosize/dist/autosize.min.js',
        /*-- jQuery autocomplete --*
        'template/gentelella/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js',
        /*-- starrr --*/
        'template/gentelella/vendors/starrr/dist/starrr.js',




        /*-- Dropify --*/
        'dropify/js/dropify.min.js',
        /*-- Custom Theme Scripts --*/
        'template/gentelella/build/js/custom.js',
        'js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
