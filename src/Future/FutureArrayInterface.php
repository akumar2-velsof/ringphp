<?php
namespace GuzzleHttp1\Ring\Future;

/**
 * Future that provides array-like access.
 */
interface FutureArrayInterface extends
    FutureInterface,
    \ArrayAccess,
    \Countable,
    \IteratorAggregate {};
