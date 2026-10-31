Lab # 10

G1
Which column did you turn into a table, and why that one and not another?
-I turned genre into the genres table. It comes from a fixed list (Comedy, Action, Sci-Fi, Thriller), the same values repeat across many movies, and a genre could one day need its own details. Title, rating and year are different for every movie, and is_available is only true or false.

G2
What number did screenshot 6 show, and why exactly that number?
-It showed 6 queries. One query loaded the 5 movies, and then one more query ran for each of the 5 movies to look up its genre. That is the number of movies plus one. (Use your own number if yours differs.)

G3
Your belongsTo method is named in the singular. What would break if you made it plural?
-Eloquent adds _id to the method name to find the foreign key column. If I named it genres(), it would look for a genres_id column, which does not exist in my movies table, so my list page would crash.
