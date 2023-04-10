<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Survey</title>
    </head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #3D8F3D;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        input[type="text"],
        input[type="email"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .gender-grid {
            display: grid;
            grid-template-columns: repeat(3, 0.5fr);
            margin-bottom: 18px;
        }

        .hobbies-interests-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            margin-top: 10px;
        }

        input[type="reset"], input[type="submit"] {
            display: inline-block;
            width: 30%;
            padding: 10px 20px;
            margin-top: 25px;
            color: #FFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="reset"] {
            background-color: #E0E0E0;
            margin-left: 90px;
            margin-right: 10px;
        }
        input[type=reset]:hover {
            background-color: #CCC;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            margin-right: 10px;
        }
        input[type="submit"]:hover {
            background-color: #3E8E41;
        }
    </style>

    <body>
        <h1>Hobbies & Interests Survey</h1>
        <form action="process.php" method="POST">
            <label for="name", style="font-weight: bold">Name:</label>
            <input type="text" id="name" name="name" required>

            <div class="gender-grid">
                <label for="gender" style="font-weight: bold">Gender:</label>
                <label for="male"><input type="radio" id="male" name="gender" value="Male" required>Male</label>
                <label for="female"><input type="radio" id="female" name="gender" value="Female">Female</label>
            </div>

            <label for="studentID", style="font-weight: bold">Student ID:</label>
            <input type="text" id="studentID" name="studentID" required pattern="[0-9]+" title="Please enter your student ID">

            <label for="university", style="font-weight: bold">University:</label>
            <input type="text" id="university" name="university" required>

            <label for="class", style="font-weight: bold">Class:</label>
            <input type="text" id="class" name="class" required>

            <label for="email", style="font-weight: bold">Email:</label>
            <input type="email" id="email" name="email" required>

            <br>
            <label for="hobbies", style="font-weight: bold">Hobbies:</label>
            <div class="hobbies-interests-grid">
                <label><input type="checkbox" name="hobbies[]" value="Reading">Reading</label>
                <label><input type="checkbox" name="hobbies[]" value="Writing">Writing</label>
                <label><input type="checkbox" name="hobbies[]" value="Drawing">Drawing</label>
                <label><input type="checkbox" name="hobbies[]" value="Listening Music">Listening Music</label>
                <label><input type="checkbox" name="hobbies[]" value="Playing Sports">Playing Sports</label>
                <label><input type="checkbox" name="hobbies[]" value="Playing Games">Playing Games</label>
                <label><input type="checkbox" name="hobbies[]" value="Others" onclick="showOtherHobbiesInput()">Others</label>
            </div>

            <div id="otherHobbiesInput" style="display:none">
                <input type="text" id="otherHobby" name="otherHobby">
            </div>
            <script>
            function showOtherHobbiesInput()
            {
                var othersCheckbox = document.querySelector('input[name="hobbies[]"][value="Others"]');
                var otherHobbiesInput = document.getElementById('otherHobbiesInput');
                if (othersCheckbox.checked)
                {
                    otherHobbiesInput.style.display = "block";
                }
                else
                {
                    otherHobbiesInput.style.display = "none";
                }
            }
            </script>

            <br>
            <label for="interests", style="font-weight: bold">Interests:</label>
            <div class="hobbies-interests-grid">
                <label><input type="checkbox" name="interests[]" value="Mathematics">Mathematics</label>
                <label><input type="checkbox" name="interests[]" value="Literature">Literature</label>
                <label><input type="checkbox" name="interests[]" value="Science">Science</label>
                <label><input type="checkbox" name="interests[]" value="Art">Art</label>
                <label><input type="checkbox" name="interests[]" value="Travel">Travel</label>
                <label><input type="checkbox" name="interests[]" value="Photography">Photography</label>
                <label><input type="checkbox" name="interests[]" value="Others" onclick="showOtherInterestsInput()">Others</label>
            </div>

            <div id="otherInterestsInput" style="display:none">
                <input type="text" id="otherInterest" name="otherInterest">
            </div>
            <script>
            function showOtherInterestsInput()
            {
                var othersCheckbox = document.querySelector('input[name="interests[]"][value="Others"]');
                var otherInterestsInput = document.getElementById('otherInterestsInput');
                if (othersCheckbox.checked)
                {
                    otherInterestsInput.style.display = "block";
                }
                else
                {
                    otherInterestsInput.style.display = "none";
                }
            }
            </script>

            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
