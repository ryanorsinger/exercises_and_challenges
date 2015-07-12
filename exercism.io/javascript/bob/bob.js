//
// This is only a SKELETON file for the "Bob" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

'use strict';
var Bob = function() {};

Bob.prototype.hey = function(input) {
    var talk = {
        // Determine if input is a string.
        isString: function(input) {
            return (Object.prototype.toString.call(input) === '[object String]') ? true : false;
        },
        // determine if input is a question?
        isQuestion: function(input) {
            var lastCharacter;

            if (this.isString(input)) {
                lastCharacter = input.substring(input.length -1);
            }

            if (lastCharacter === '?') {
                return true;
            }
        },
        // Return 'Whoah, chill out!' if input is yelling.
        isYelling: function(input) {
            if(this.isString(input) && (input === input.toUpperCase()));
                return true;
            }
        },
        // Return 'Fine. Be that way!' if input is a blank string
        isBlankString: function(input) {
            console.log(input);
        },
        // Answer 'Whatever.' to anything else.
        isAnythingElse: function(input) {

        }
    };

    if(talk.isQuestion(input)) {
        console.log('Sure.');
    } else if(talk.isYelling(input)) {
        console.log('Whoah, chill out!');
    } else if (talk.isBlankString(input)) {
        console.log('')
    } else {

    }
}


module.exports = Bob;
