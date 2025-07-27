<!DOCTYPE html>
<html>
<head>
  <title>JavaScript Basic Concepts</title>
</head>
<body>

  <h1>Student Information and Mark Summary</h1>
  <p>Check the console for details and click the button to see results.</p>

  <script>
    console.log("\nSTUDENT PROFILE AND RESULT INFORMATION");

    // Student data
    var student = {
      name: "Zobayer Islam Jony",
      age: 24,
      marks: {
        Java: 80,
        OOP2: 72,
        JavaScript: 65,
        Algorithm: 90
      },
      passingMark: 40
    };

    // Calculations
    var totalMarks = 0;
    var subjectCount = 0;

    for (var subject in student.marks) {
      totalMarks += student.marks[subject];
      subjectCount++;
    }

    var averageMarks = totalMarks / subjectCount;

    var isAdult = student.age >= 18;
    var hasPassed = true;

    for (var subject in student.marks) {
      if (student.marks[subject] < student.passingMark) {
        hasPassed = false;
        break;
      }
    }

    // Summary display in console
    function displaySummary() {
      console.log("Student Name:", student.name);
      console.log("Age:", student.age, isAdult ? "(Adult)" : "(Not Adult)");

      console.log("Marks:");
      for (var subject in student.marks) {
        console.log(subject + ":", student.marks[subject]);
      }

      console.log("Total Marks:", totalMarks);
      console.log("Average Marks:", averageMarks.toFixed(2));
      console.log("Passed all subjects?", hasPassed ? "Yes" : "No");
    }

    displaySummary();

    // Popup result
    function showStudentResult() {
      var marksDetails = "";
      for (var subject in student.marks) {
        marksDetails += subject + ": " + student.marks[subject] + "\n";
      }

      var resultMessage =
        "Student: " + student.name + "\n" +
        "Age: " + student.age + (isAdult ? " (Adult)" : " (Not Adult)") + "\n\n" +
        "Marks:\n" + marksDetails +
        "\nTotal Marks: " + totalMarks +
        "\nAverage Marks: " + averageMarks.toFixed(2) +
        "\nPassed All Subjects? " + (hasPassed ? "Yes" : "No");

      alert(resultMessage);
      console.log("Student result popup shown.");
    }
  </script>

  <br><br>
  <button onclick="showStudentResult()">Show Student Result</button>

</body>
</html>
