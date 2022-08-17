# yii2-requirejs

just a bundled version of require.js to avoid random crap plugins conflicts

## Install

```shell
composer require cacko\yii2-requireks
```

## Usage

```php
Cacko\Yii2\RequireJs\RequireJsAsset::register($view);
```

and then wrap your js code

```javascript
((require, define, requirejs) => {
    require(['junk'], (Junk) => {
      ....
    });
})(__require.require, __require.define, __require.requirejs);
```
