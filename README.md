# Context

[![Author](https://img.shields.io/badge/author-@RemiSan-blue.svg?style=flat-square)](https://twitter.com/RemiSan)
[![Build Status](https://img.shields.io/travis/remi-san/context/master.svg?style=flat-square)](https://travis-ci.org/remi-san/context)
[![Quality Score](https://img.shields.io/scrutinizer/g/remi-san/context.svg?style=flat-square)](https://scrutinizer-ci.com/g/remi-san/context)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/remi-san/context.svg?style=flat-square)](https://packagist.org/packages/remi-san/context)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/remi-san/context.svg?style=flat-square)](https://scrutinizer-ci.com/g/remi-san/context/code-structure)

A lib providing interfaces and a container to deal with **contexts** in an application.

A **context** object should implement the `Context` interface.

If an object should be aware of the context, it should implement the `ContextAware` interface.

If you want to store a context statically, use the static class `ContextContainer`.
