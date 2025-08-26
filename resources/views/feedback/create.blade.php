<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <form action="/feedback" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="question1">How satisfied are you with the newsletter?</label><br>
        <input type="radio" name="question1" value="Very Satisfied"> Very Satisfied<br>
        <input type="radio" name="question1" value="Satisfied"> Satisfied<br>
        <input type="radio" name="question1" value="Neutral"> Neutral<br>
        <input type="radio" name="question1" value="Dissatisfied"> Dissatisfied<br>
        <input type="radio" name="question1" value="Very Dissatisfied"> Very Dissatisfied<br><br>

        <label for="question2">What do you think about the content quality?</label><br>
        <input type="radio" name="question2" value="Excellent"> Excellent<br>
        <input type="radio" name="question2" value="Good"> Good<br>
        <input type="radio" name="question2" value="Average"> Average<br>
        <input type="radio" name="question2" value="Poor"> Poor<br><br>

        <label for="question3">Would you recommend this newsletter to others?</label><br>
        <input type="radio" name="question3" value="Yes"> Yes<br>
        <input type="radio" name="question3" value="No"> No<br><br>

        <label for="openQuestion">Please provide any additional feedback:</label><br>
        <textarea name="openQuestion" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Submit Feedback</button>
    </form>
</body>
</html>
