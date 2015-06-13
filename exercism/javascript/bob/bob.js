//
// This is only a SKELETON file for the "Bob" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

'use script';
var Bob = function() {};

var talk = {
    // Determine if input is a string.
    isString: function(input) {
        if (Object.prototype.toString.call(input) === '[object String]') {
            return true;
        }
    },

    //
    isQuestion: function(input) {
        // foo
    },

    isYelling: function(input) {
        // foo
    },

    isSayingAnything: function(input) {

    }

};

Bob.prototype.hey = function(input) {
    if (Object.prototype.toString.call(input) === '[object String]') {

        // Determine if input is a question

        // Return 'Whoah, chill out!' if input is yelling.

        // Answer 'Whatever.' to anything else.

        // Return 'Fine. Be that way!' if input is a blank string

        // trim
        if(input.trim() === '') {
            message = ''
        }

    } else {
        message =
    }

};

module.exports = Bob;
