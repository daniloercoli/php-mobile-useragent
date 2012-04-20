# PHP Mobile User Agent

Mobile Browser detection in PHP.
Uses a simple and fast algorithm to recognize major mobile browsers or platform.

## Overview

    $ua = new UserAgentInfo();

    $ua->get_mobile_user_agent_name()  //returns the mobile User Agent name, false otherwise.
    $ua->get_platform()  //returns the mobile device's platform, false otherwise. All return strings are from the class constants.

## Contribute

If you found a mobile browser or platform this library fails to recognize, feel free to submit an issue. Please provide the user agent string.
And well, if you also want to provide the patch, it's even better. 