# [symfony-flex-demo](https://symfony-flex-demo.github.io)/script-skeleton-user

[![Build Status](https://travis-ci.org/symfony-flex-demo/script-skeleton-user.svg?branch=master)](https://travis-ci.org/symfony-flex-demo/script-skeleton-user)

## TODO
* Fixture test users
* Ensure db schema is written to db. DONE
* Testing.
* Guard

## Documentation
### Getting Started With FOSUserBundle
There are tow version of this document, one difference is in security.yaml
* *[Getting Started With FOSUserBundle](https://symfony.com/doc/master/bundles/FOSUserBundle/index.html#step-4-configure-your-application-s-security-yml)*
* *[Getting Started With FOSUserBundle](https://symfony.com/doc/current/bundles/FOSUserBundle/index.html#step-4-configure-your-application-s-security-yml)*
* *[Unrecognized option “csrf_provider” under “security.firewalls.main.form_login” despite csrf enabled](https://stackoverflow.com/questions/43082459/unrecognized-option-csrf-provider-under-security-firewalls-main-form-login-d)*

### Guard
* *[How to Create a Custom Authentication System with Guard](https://symfony.com/doc/master/security/guard_authentication.html)*

## Testing
* *[Tests (Best Practices)](https://symfony.com/doc/master/best_practices/tests.html)*
* *[Testing](https://symfony.com/doc/master/testing.html)*

## Bugs
### Referencing controllers with a single colon is deprecated since Symfony 4.1
* Seems to be caused by friendsofsymfony/user-bundle 2.1.2 and Symfony 4.1
* Switched to friendsofsymfony/user-bundle:2.1.x-dev in install.bash, waiting for a corrected stable version.
* Not even yet corrected in dev.
* The problem may come from a @FOSUserBundle/Resources/config/routing/\*.xml file referenced from etap/fos_user/config/routes/fos_user.yaml
* Deprecation notices disabled in php >= 7.1 because of https://github.com/FriendsOfSymfony/FOSUserBundle/pull/2806
