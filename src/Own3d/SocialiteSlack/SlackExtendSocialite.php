<?php

namespace Own3d\SocialiteSlack;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SlackExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('slack', __NAMESPACE__ . '\Provider');
    }
}
