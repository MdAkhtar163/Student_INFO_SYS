document.getElementById("student").addEventListener("submit", function(event) {
    event.preventDefault();

    const student = {
        firstName: document.getElementById("firstName").value,
        lastName: document.getElementById("lastName").value,
        admissionNumber: document.getElementById("admissionNumber").value,
        studentId: document.getElementById("studentId").value,
        semester: document.getElementById("semester").value,
        year: document.getElementById("year").value,
        gender: document.getElementById("gender").value,
        age: document.getElementById("age").value,
        dob: document.getElementById("dob").value,
        phone: document.getElementById("phone").value,
        email: document.getElementById("email").value,
        address: document.getElementById("address").value,
        city: document.getElementById("city").value,
        state: document.getElementById("state").value,
        pinCode: document.getElementById("pinCode").value,
    };

    let students = JSON.parse(localStorage.getItem("students")) || [];
    students.push(student);
    localStorage.setItem("students", JSON.stringify(students));

    displayStudents();
    document.getElementById("student").reset();
});

function displayStudents() {
    let students = JSON.parse(localStorage.getItem("students")) || [];
    let studentList = document.getElementById("studentList");
    studentList.innerHTML = "<ul>";
    students.forEach(student => {
        studentList.innerHTML += `<li>${student.firstName}</li>`; 
        studentList.innerHTML += `<li>${student.lastName}</li>`;  
        studentList.innerHTML += `<li>${student.admissionNumber}</li>`; 
        studentList.innerHTML += `<li>${student.studentId}</li>`;
        studentList.innerHTML += `<li>${student.semester}</li>`;
        studentList.innerHTML += `<li>${student.year}</li>`;
        studentList.innerHTML += `<li>${student.gender}</li>`;
        studentList.innerHTML += `<li>${student.age}</li>`;
        studentList.innerHTML += `<li>${student.dob}</li>`;
        studentList.innerHTML += `<li>${student.phone}</li>`;
        studentList.innerHTML += `<li>${student.email}</li>`;
        studentList.innerHTML += `<li>${student.address}</li>`;
        studentList.innerHTML += `<li>${student.city}</li>`;
        studentList.innerHTML += `<li>${student.state}</li>`;
        studentList.innerHTML += `<li>${student.pinCode}</li>`;
    });
    studentList.innerHTML += "</ul>";
}
function clearRecords() {
    localStorage.removeItem("students");  // Deletes all stored students
    displayStudents();  // Refreshes the display
}

// Call this function when needed
clearRecords();
function printForm() {
   window.print();
}

// Display stored students on page load
window.onload = displayStudents;