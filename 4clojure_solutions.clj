;; 4Clojure problems and solutions

; Write a function that returns the Nth element from a sequence, without using the nth function.
(fn [coll index]
  (get (vec coll) index))

; Write a function to return the total number of elements in a sequence, without using count.
(defn check_if_empty [x]
  (not (empty? x))



