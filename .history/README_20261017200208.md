Lab # 9


F1
Which column did you make nullable, and why that one and not another?
-I made the is_available column nullable. I chose this one because a movie’s availability can sometimes be unknown or not yet decided, while title, genre, rating, and year are always required information.


F2
Which step failed first for you, and what did the error say?
-The first step that failed for me was when I switched my list page to read from the database. The page showed an “Undefined variable” error because my view still expected the filter variables the old controller used to send. Since I couldn’t edit the view, I fixed it by passing those variables from the controller again.


F3
You changed no Blade file in Part D, yet your pages still work. Why not?
-The Blade files only receive variables from the controller. When I switched the controller to use Movie::all() and findOrFail, it still sent the same variable names ($movies and $movie) that the views were already expecting, so the pages continued to work without any changes to the Blade files.
