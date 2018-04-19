var e1, e2, e3, e4, e5, result;

e1 = prompt("Please enter your first name!");
e2 = Number(prompt("Please enter your birth year!"));
e3 = prompt("Please enter your school!");
e4 = prompt("Please enter the courses you enroll in!");
e5 = prompt("Please enter one more course in your schedule!");

function capFirstLetter(letter) {
   var firstLetter = letter.substr(0,1).toUpperCase();
   var restLetters = letter.substr(1).toLowerCase();
   letter = firstLetter + restLetters;
   return letter;
}

function getAge(bYear) {
   var year = new Date();
   year = year.getFullYear();
   var age = year - bYear;
   return age;
}

function displayMyCourses(enrolls) {
   for (var i = 0; i < enrolls.length; i ++)
       var report = "";
      
       for (var i = 0; i < enrolls.length; i ++) {
          report += "\n\t\t";
          report += enrolls[i].toUpperCase();
       }
       
       return report; 
}  

e1 = capFirstLetter(e1);
e2 = getAge(e2);

e4 = e4.split(",");
e4.push(e5);
e4.sort();
e4 = displayMyCourses(e4);

var elements = ["Name (e1): ", "Age (e2): ", "School (e3): ", "Courses (e4): "];
result = "";
var e = [e1,e2,e3,e4];

for (var j = 0; j < 4; j ++) {
   result += elements[j] + e[j];
   result += "\n";
}

alert(result);