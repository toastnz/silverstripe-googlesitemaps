<?php

namespace Wilr\GoogleSitemaps\Tests\Model;

use SilverStripe\ORM\DataObject;
use SilverStripe\Dev\TestOnly;
use SilverStripe\Control\Director;

class TestDataObject extends DataObject implements TestOnly
{

    private static $db = array(
        'SitemapPriority' => 'Varchar(10)'
    );

    public function canView($member = null)
    {
        return true;
    }

    public function AbsoluteLink()
    {
        return Director::absoluteBaseURL();
    }
}
