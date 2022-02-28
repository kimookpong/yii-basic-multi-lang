<?php

namespace app\components;

use Yii;
use yii\base\Component;
use yii\imagine\Image;

class Helpers extends Component
{

    public function lang()
    {
        $lang =  Yii::$app->request->get('language') ? Yii::$app->request->get('language') : Yii::$app->request->cookies['language'];

        if ($lang == 'en-US') {
            return Yii::t('app', 'English');
        } else if ($lang == 'zh-CN') {
            return Yii::t('app', 'Chinese');
        } else if ($lang == 'ja-JP') {
            return Yii::t('app', 'Japanese');
        } else {
            return Yii::t('app', 'Thai');
        }
    }
    public function lang_flag()
    {
        $lang =  Yii::$app->request->get('language') ? Yii::$app->request->get('language') : Yii::$app->request->cookies['language'];

        if ($lang == 'en-US') {
            return 'flag-icon-gb-eng';
        } else if ($lang == 'zh-CN') {
            return 'flag-icon-cn';
        } else if ($lang == 'ja-JP') {
            return 'flag-icon-jp';
        } else {
            return 'flag-icon-th';
        }
    }

    public function thaiDate($date)
    {
        $strMonthTH = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
        $datetime = date_create($date);
        $strYear    = date_format($datetime, "Y") + 543;
        $strMonth   = date_format($datetime, "n");
        $strMonthS  = $strMonthTH[$strMonth];
        $strDay     = date_format($datetime, "d");
        return "$strDay $strMonthS $strYear";
    }

    public function thaiMonthYear($date)
    {
        $strMonthTH = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
        $datetime = date_create($date);
        $strYear    = date_format($datetime, "Y") + 543;
        $strMonth   = date_format($datetime, "n");
        $strMonthS  = $strMonthTH[$strMonth];
        return "$strMonthS $strYear";
    }

    public function thaiYear($date)
    {
        $datetime = date_create($date);
        $strYear    = date_format($datetime, "Y") + 543;
        return "$strYear";
    }

    public function thaiDateTime($date)
    {
        $strMonthTH = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
        $datetime = date_create($date);
        $strYear    = date_format($datetime, "Y") + 543;
        $strMonth   = date_format($datetime, "n");
        $strMonthS  = $strMonthTH[$strMonth];
        $strDay     = date_format($datetime, "d");
        $strHour    = date_format($datetime, "H");
        $strMinute  = date_format($datetime, "i");
        $strTime    = $strHour . ':' . $strMinute . ' น.';
        return "$strDay $strMonthS $strYear $strTime";
    }
    public function dateCompare($date)
    {
        $datetime = date_create($date);
        $dateNow = date_create('now');

        $interval = date_diff($datetime, $dateNow);
        $compareMin = $interval->format('%i');
        $compareHour = $interval->format('%h');
        $compareDay = $interval->format('%a');

        $days = " วันที่ผ่านมา";
        $hours = " ชั่วโมงที่ผ่านมา";
        $mins = " นาทีที่ผ่านมา";

        if ($compareDay > 7) {
            return Yii::$app->helpers->thaiDateTime($date);
        } else if ($compareDay > 1) {
            return $compareDay . $days;
        } else if ($compareHour > 1) {
            return $compareHour . $hours;
        } else {
            return $compareMin . $mins;
        }
    }


    #
    #
    #
    # image control
    #
    #
    #
    public function showRatioThumbnail($imagepath, $width, $height, $default = "images/noimage.png")
    {
        $url = "images.php?style=ratio&max_w={$width}&max_h={$height}&src={$imagepath}";
        if ($default <> "") {
            $url .= "&defaultpath={$default}";
        }
        return $url;
    }
    public function showRatioThumbnailWithoutWaterMask($imagepath, $width, $height, $default = "images/noimage.png")
    {
        $url = "images.php?style=ratio_without_watermask&max_w={$width}&max_h={$height}&src={$imagepath}";
        if ($default <> "") {
            $url .= "&defaultpath={$default}";
        }
        return $url;
    }
    public function showCropThumbnail($imagepath, $width, $height, $default = "images/noimage.png")
    {
        $url = "images.php?style=cropImage&max_w={$width}&max_h={$height}&src={$imagepath}";
        if ($default <> "") {
            $url .= "&defaultpath={$default}";
        }
        return $url;
    }
    public function showCropInThumbnail($imagepath, $width, $height, $default = "images/noimage.png")
    {
        $url = "images.php?style=cropImageIn&max_w={$width}&max_h={$height}&src={$imagepath}";
        if ($default <> "") {
            $url .= "&defaultpath={$default}";
        }
        return $url;
    }
    public function showFixThumbnail($imagepath, $width, $height, $default = "images/noimage.png")
    {
        $url = "images.php?style=fix&max_w={$width}&max_h={$height}&src={$imagepath}";
        if ($default <> "") {
            $url .= "&defaultpath={$default}";
        }
        return $url;
    }
    public function showFullSite($imagepath, $default = "images/noimage.png")
    {
        $url = "images.php?style=ratio&max_w=800&max_h=800&src={$imagepath}";
        if ($default <> "") {
            $url .= "&defaultpath={$default}";
        }
        return $url;
    }
    #
    #
    #
    # image control
    #
    #
    #

}
