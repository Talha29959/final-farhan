var students = new Array();

show();

function getScholarship(cgpa){
    if(cgpa >=3.95) return 100;
    else if(cgpa >=3.90 && cgpa <3.95) return 75;
    else if(cgpa >=3.50 && cgpa <3.90) return 50;
    else if(cgpa >=3.25 && cgpa <3.50) return 25;
    else if(cgpa >=3.00 && cgpa <3.25) return 12.5;
    else return 0;
}

/* Question 3 - Part-02 : Fetch the student's data from the form and add in LocalStorage as an object*/
function addStudent() {
    document.getElementById('alert').classList.add('d-none');
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var regNo = document.getElementById('regNo').value;
    var cgpa = document.getElementById('cgpa').value;
    if(!isAlreadyExists(students, regNo)) {
        students.push({
            name: firstName + ' ' + lastName,
            regNo: regNo,
            cgpa: cgpa,
            scholarship: getScholarship(cgpa)
        });
    }
    else {
        document.getElementById('alert').classList.remove('d-none');
    }

    show();   /*given */
}

function show() {
    var table = document.getElementById('studentTable');  //pick values and store in a table
    resetTable(table);   //reset previous list, and show new list if student add
    for(var i=0; i<students.length; i++){
        insertRow(table, students[i].name, students[i].regNo, students[i].cgpa,
            students[i].scholarship + '%', 'td');
    }
    document.getElementById("studentForm").reset();
}


function resetTable(table) {
    for(var r = table.rows.length; r > 0 ; r--)   //delete previous list
        table.deleteRow(r-1);
    insertRow(table, 'Name', 'Registration #', 'CGPA', 'Scholarship', 'th');
}

/* Question 3 - Part-03  : Create Elements to insert new row in the Table  */
function insertRow(table, name, regNo, cgpa, scholarship, rowType) {
    var tr = document.createElement("tr");
    var nameTd = document.createElement(rowType);
    var regNoTd = document.createElement(rowType);
    var cgpaTd = document.createElement(rowType);
    var scholarshipTd = document.createElement(rowType);

    var nameText = document.createTextNode(name);
    var regNoText = document.createTextNode(regNo);
    var cgpaText = document.createTextNode(cgpa);
    var scholarshipText = document.createTextNode(scholarship);

    nameTd.appendChild(nameText);
    regNoTd.appendChild(regNoText);
    cgpaTd.appendChild(cgpaText);
    scholarshipTd.appendChild(scholarshipText);

    tr.appendChild(nameTd);
    tr.appendChild(regNoTd);
    tr.appendChild(cgpaTd);
    tr.appendChild(scholarshipTd);

    table.appendChild(tr);
}

/* Question 3 - Part-04  : before insert new student's data, make sure student not registered already,
* show alert message otherwise*/
function isAlreadyExists(students, regNo){
    for(var i=0; i<students.length; i++)
        if(regNo.toUpperCase() === students[i].regNo.toUpperCase())
            return true;
        return false;   /*given */
}
