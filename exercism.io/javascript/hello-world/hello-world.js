//
// This is only a SKELETON file for the 'Hello World' exercise. It's been provided as a
// convenience to get you started writing code faster.
//
var HelloWorld = function () {};

HelloWorld.prototype.hello = function (input) {
    'use strict';

    var message = '';

    if (input.trim() === '') {
        message = 'Hello, world!';
    } else if (Object.prototype.toString.call(input) === '[object String]') {
        message = 'Hello, ' + input + '!';
    } else {
        message = 'The input provided was not a valid.';
    }

    return message;
};

module.exports = HelloWorld;
