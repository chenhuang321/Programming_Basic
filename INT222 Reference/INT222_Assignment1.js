var cpdCourses = "apc100, ipc144, uli101, ios110, eac150, ibc233, oop244, dbs201, int222";

var Student = {
	'use strict'
	fName: "";
    lName: "";
	email: "";
	courses = courses;
	formatOutput: function() {
		return this.fName + " " + this.lName + ", " + this.sid + " " + this.email;
	}
	hasCourses: function() {
	    return this.courses;   
	}
}

function formatingName(letter) {
     'use strict';
	  var firstLetter = letter.substr(0, 1).toUpperCase();
	  var restWords = letter.substr(1).toLowerCase();
	  letter = firstLetter + restWords;
	  return letter;
}

function validateStudentID(studentID) {
     'use strict';
     var patt1 = /^([0-9]{3}[.]){2}[0-9]{3}$/;
     var invalidID = "Invalid student ID!\nPlease try again!";
	 if (patt1.test(studentID));
	 else {
		  alert(invalidID);
		  break;
	   }
}

function courseValidator(courses) {
	   'use strict';
	   var i, result;
	   var patt = new Array();
	   var inValidID = courses[i].toUpperCase() + " is not the course provided in CPD program!\nPlease try again!";
       for (i = 0; i < courses.length; i ++) {
	   patt[i] = RegExp(courses[i].toLowerCase());
	   if (patt[i].test(cpd));
	   else {
	       alert(inValidID);
	       break;
	   }
}

function search(total, part) {
	for (i = 0; i < studentGroup.length; i ++) {
		for (j = 0; j < courseEnrolls.length[i]; j ++) {
			if (courseEnrolls[j] === course) {
				feedBack = 1;
				break;
			} else feedBack = 0;
		}

		if (feedBack === 1) {
				numArray.push[i];
				k ++;
		}
	}
	alert("There are " + k + " student registry this course!");
	for (i = 0; i < k; i ++) {
		result += stdStr[numArray[i]] + "\n";
	alert(result);
	}
	
}

function getUsrInput() {
    var studentGroup = [];
    var studentInfor = [];
    var i;
    for (i = 0; i < 100; i ++) {
    studentGroup[i] = prompt("Please enter the first name, last name, student ID, email and courses (separated by ',').","steve,jobs,010.125.236,sjobs@myseneca.ca,eac150");
    if (studentGroup[i] === null) {
        break;
    }
    studentInfor[i] = studentGroup[i].split(",");
    validateStudentID(studentInfor[i][2]);
    courseValidator(studentInfor[i].splice(4,Number.MAX_VALUE));
    }
    
    for (i = 0; i < studentGroup.length - 1; i ++) {
        std[i][0] = formatingName(std[i][0]);
        std[i][1] = formatingName(std[i][1]);
        studentInfor[i] = new Person(std[i][0],std[i][1],std[i][2],std[i][3],std[i][4],std[i].splice(4, Number.MAX_VALUE));
        //console.log(studentInfor[i].formatOutput());
    }
	
	

}