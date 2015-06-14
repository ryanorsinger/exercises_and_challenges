; FizzBuzz in Clojure
(map
 #(cond (= 0 (mod % 15)) "FizzBuzz"
   (= 0 (mod % 3)) "Fizz"
   (= 0 (mod % 5)) "Buzz"
   :else %)
   (range 1 101))
