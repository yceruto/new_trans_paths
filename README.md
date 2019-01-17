# New Translation Paths Demo

## Install
```bash
$ git clone https://github.com/yceruto/new_trans_paths
$ cd new_trans_paths/
$ composer install
$ php bin/console cache:clear
```

## Check it out

* Discovering new dirs configured in `twig.paths` and `translator.paths`.
* Discovering new messages/domains (`validators` and `security`) from `Validator`, `Form` and Security core components (if installed).
* !! Discovering new trans id from PHP classes/services having `@translator` as dependency.
 
```bash
$ php bin/console debug:translation en
```

Enjoy!
